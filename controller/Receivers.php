<?php

//**********   INCLUDES
include_once(dirname(__FILE__) . '/../assets/utils/init.php');

class Receivers {

    /**
     * Obtains the List of Receivers
     * @return array Operation status and Receivers
     */
    function getAll($data) {
        $service = new Interface_V5();
        $ws = Configuration::getCleverReachWs();
        $apiKey = $ws['API_KEY'];
        $groupId = $data->groupId;
        $page = new pageFilterSegment();
        //$page->page = isset($data->page) ? $data->page : 0;
        $page->page = 0;
        $page->filter = isset($data->filter) ? $data->filter : 'all';

        try {
            $result = $service->receiverGetPage($apiKey, $groupId, $page);
            return array('success' => true, 'receivers' => $result->data);
        } catch (Exception $e) {
            LOG::getInstance()->put(Log::$ERROR, __CLASS__, __METHOD__, $e->getMessage());
            return array('success' => false, 'message' => $e->getMessage());
        }
    }

    function save($formData) {
        $service = new Interface_V5();
        $ws = Configuration::getCleverReachWs();
        $apiKey = $ws['API_KEY'];
        
        $receiverData = new receiverData();
        $receiverData->id = $formData->id;
        $receiverData->active = $formData->active;
        $receiverData->email = $formData->email;
        $receiverData->activated = $formData->activated;
        $receiverData->quality = $formData->quality;
        $receiverData->registered = $formData->registered;
        $receiverData->source = $formData->source;
        $receiverData->attributes = $formData->attributes;
        $receiverData->globalAttributes = $formData->globalAttributes;
        $receiverData->events =  $formData->events;
        $receiverData->orders = $formData->orders;
        
        if ($receiverData->id){ //Updating Status
            if ($receiverData->active == "true"){
                $result = $service->receiverSetActive($apiKey, $formData->groupId, $receiverData->email);
            }
            else{
                $result = $service->receiverSetInactive($apiKey, $formData->groupId, $receiverData->email);
            }
        }
        else // Adding Receivers
            $result = $service->receiverAdd($apiKey, $formData->groupId, $receiverData);
        
        return ($result->status == 'SUCCESS') 
                        ? array('success' => true) 
                        : array('success' => false, 'message' => $result->message);
    }
}

?>