<?php

//**********   INCLUDES
include_once(dirname(__FILE__) . '/../assets/utils/init.php');

class Groups {

    /**
     * Obtains the List of Groups
     * @return array Operation status and Groups
     */
    function getAll() {
        $service = new Interface_V5();
        $ws = Configuration::getCleverReachWs();
        $apiKey = $ws['API_KEY'];

        try {
            $result = $service->groupGetList($apiKey);
            
            if ($result->status == "SUCCESS") {   
                
                return array('success' => true, 'groups' => $result->data);
                
            } else {          
                LOG::getInstance()->put(Log::$ERROR, __CLASS__, __METHOD__, $result->message);
                return array('success' => false, 'message' => $result->message);
            }
            
        } catch (Exception $e) {
            LOG::getInstance()->put(Log::$ERROR, __CLASS__, __METHOD__, $e->getMessage());
            return array('success' => false, 'message' => $e->getMessage());
        }
    }
}

?>