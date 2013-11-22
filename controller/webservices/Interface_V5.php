<?php

include_once(dirname(__FILE__) . '/../assets/utils/init.php');

class returnString {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // string
}

class returnData {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // ArrayOfString
}

class returnClient {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // clientData
}

class clientData {
  public $id; // int
  public $firstname; // string
  public $name; // string
  public $company; // string
  public $email; // string
  public $login_domain; // string
}

class returnReceiver {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // receiverData
}

class receiverData {
  public $id; // int
  public $email; // string
  public $registered; // int
  public $activated; // int
  public $deactivated; // int
  public $active; // boolean
  public $source; // string
  public $quality; // int
  public $attributes; // receiverAttributes
  public $globalAttributes; // receiverAttributes
  public $events; // receiverEvents
  public $orders; // receiverOrders
}

class receiverAttribute {
  public $key; // string
  public $value; // string
  public $type; // string
  public $variable; // string
}

class receiverEvent {
  public $type; // string
  public $type_id; // string
  public $value; // string
  public $stamp; // int
}

class returnReceivers {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // receiverBatchList
}

class receiverOrder {
  public $order_id; // string
  public $purchase_date; // int
  public $product_id; // string
  public $product; // string
  public $quantity; // int
  public $price; // float
  public $mailings_id; // int
  public $source; // string
}

class receiverOrderList {
  public $email; // string
  public $data; // orderBatch
}

class pageFilterSegment {
  public $page; // int
  public $filter; // string
}

class dateFilterSegment {
  public $filter; // string
  public $range_start; // string
  public $range_end; // string
  public $page; // int
}

class returnGroup {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // group
}

class group {
  public $id; // int
  public $name; // string
  public $description; // string
  public $last_mailing; // int
  public $last_changed; // int
  public $count; // int
  public $inactive_count; // int
  public $total_count; // int
  public $attributes; // receiverAttributes
  public $globalAttributes; // receiverAttributes
}

class returnGroups {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // groups
}

class returnStats {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // stats
}

class stats {
  public $total; // int
  public $active; // int
  public $inactive; // int
  public $bounces; // int
  public $avgStars; // double
}

class returnFilter {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // int
}

class filterRule {
  public $field; // string
  public $operator; // string
  public $logic; // string
  public $condition; // string
}

class returnForms {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // FormList
}

class clientForm {
  public $id; // int
  public $name; // string
  public $description; // string
}

class DOIData {
  public $user_ip; // string
  public $user_agent; // string
  public $referer; // string
  public $postdata; // string
  public $info; // string
}

class returnMailing {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // mailingData
}

class mailingData {
  public $id; // int
  public $name; // string
  public $type; // string
  public $subject; // string
  public $sender_name; // string
  public $sender_email; // string
  public $groupId; // int
  public $groupIds; // mailingGroupIds
  public $html; // string
  public $text; // string
}

class mailingGroupId {
  public $id; // int
}

class returnReports {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // reports
}

class report {
  public $id; // int
  public $name; // string
  public $sent; // int
  public $receiversName; // string
}

class returnDetailedReports {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // reportsD
}

class returnReport {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // reportData
}

class reportData {
  public $id; // int
  public $name; // string
  public $sent; // int
  public $groups; // string
  public $receiver_count; // int
  public $opened; // int
  public $clicks; // int
  public $bounced; // int
  public $quality; // int
  public $xml; // string
}

class dateReportFilterSegment {
  public $filter; // string
  public $link_id; // int
  public $range_start; // string
  public $range_end; // string
  public $page; // int
}

class reportGroupId {
  public $id; // int
  public $name; // int
}

class returnReportReceivers {
  public $status; // string
  public $message; // string
  public $statuscode; // int
  public $data; // receiverReportBatchList
}

class receiverReportData {
  public $id; // int
  public $email; // string
}


/**
 * Interface_V5 class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Interface_V5 extends SoapClient {

  private static $classmap = array(
                                    'returnString' => 'returnString',
                                    'returnData' => 'returnData',
                                    'returnClient' => 'returnClient',
                                    'clientData' => 'clientData',
                                    'returnReceiver' => 'returnReceiver',
                                    'receiverData' => 'receiverData',
                                    'receiverAttribute' => 'receiverAttribute',
                                    'receiverEvent' => 'receiverEvent',
                                    'returnReceivers' => 'returnReceivers',
                                    'receiverOrder' => 'receiverOrder',
                                    'receiverOrderList' => 'receiverOrderList',
                                    'pageFilterSegment' => 'pageFilterSegment',
                                    'dateFilterSegment' => 'dateFilterSegment',
                                    'returnGroup' => 'returnGroup',
                                    'group' => 'group',
                                    'returnGroups' => 'returnGroups',
                                    'returnStats' => 'returnStats',
                                    'stats' => 'stats',
                                    'returnFilter' => 'returnFilter',
                                    'filterRule' => 'filterRule',
                                    'returnForms' => 'returnForms',
                                    'clientForm' => 'clientForm',
                                    'DOIData' => 'DOIData',
                                    'returnMailing' => 'returnMailing',
                                    'mailingData' => 'mailingData',
                                    'mailingGroupId' => 'mailingGroupId',
                                    'returnReports' => 'returnReports',
                                    'report' => 'report',
                                    'returnDetailedReports' => 'returnDetailedReports',
                                    'returnReport' => 'returnReport',
                                    'reportData' => 'reportData',
                                    'dateReportFilterSegment' => 'dateReportFilterSegment',
                                    'reportGroupId' => 'reportGroupId',
                                    'returnReportReceivers' => 'returnReportReceivers',
                                    'receiverReportData' => 'receiverReportData',
                                   );

  public function Interface_V5($wsdl = "http://api.cleverreach.com/soap/interface_v5.1.php?wsdl", $options = array()) {

    $ws = Configuration::getCleverReachWs();
        $wsdl = $ws['url'];

    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * creates a global blacklistentry from the given email 
   *
   * @param string $apiKey
   * @param string $email
   * @return returnString
   */
  public function globalBlacklistAdd($apiKey, $email) {
    return $this->__soapCall('globalBlacklistAdd', array($apiKey, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * deletes a global blacklistentry from the given email 
   *
   * @param string $apiKey
   * @param string $email
   * @return returnString
   */
  public function globalBlacklistDelete($apiKey, $email) {
    return $this->__soapCall('globalBlacklistDelete', array($apiKey, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns client data (url, client id, ...) based on API key 
   *
   * @param string $apiKey
   * @return returnClient
   */
  public function clientGetDetails($apiKey) {
    return $this->__soapCall('clientGetDetails', array($apiKey),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns tns:returnString 
   *
   * @param string $apiKey
   * @param string $name
   * @param string $url
   * @param string $password
   * @return returnString
   */
  public function clientRegisterMyProductSearch($apiKey, $name, $url, $password) {
    return $this->__soapCall('clientRegisterMyProductSearch', array($apiKey, $name, $url, $password),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * creates a global blacklistentry from the given email 
   *
   * @param string $apiKey
   * @param string $email
   * @return returnString
   */
  public function ClientGlobalBlacklistAdd($apiKey, $email) {
    return $this->__soapCall('ClientGlobalBlacklistAdd', array($apiKey, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * removes a global blacklistentry 
   *
   * @param string $apiKey
   * @param string $email
   * @return returnString
   */
  public function ClientGlobalBlacklistRemove($apiKey, $email) {
    return $this->__soapCall('ClientGlobalBlacklistRemove', array($apiKey, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * adds new user. subscriberData has to be same structure f.e. datafield returned by getByEmail 
   * (email is the only required field) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param receiverData $subscriberData
   * @return returnReceiver
   */
  public function receiverAdd($apiKey, $listId, receiverData $subscriberData) {
    return $this->__soapCall('receiverAdd', array($apiKey, $listId, $subscriberData),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * adds a batch of new users (maximum of 50 per batch). 
   *
   * @param string $apiKey
   * @param int $listId
   * @param receiverBatchList $subscriberData
   * @return returnString
   */
  public function receiverAddBatch($apiKey, $listId, receiverBatchList $subscriberData) {
    return $this->__soapCall('receiverAddBatch', array($apiKey, $listId, $subscriberData),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * basicly the same as add but it just update's the given data (email is the only required 
   * field) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param receiverData $userData
   * @return returnReceiver
   */
  public function receiverUpdate($apiKey, $listId, receiverData $userData) {
    return $this->__soapCall('receiverUpdate', array($apiKey, $listId, $userData),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * deletes given email and all corrosponding data 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @return returnString
   */
  public function receiverDelete($apiKey, $listId, $email) {
    return $this->__soapCall('receiverDelete', array($apiKey, $listId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * will set given email to active (can receive emails) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @return returnReceiver
   */
  public function receiverSetActive($apiKey, $listId, $email) {
    return $this->__soapCall('receiverSetActive', array($apiKey, $listId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * will set given email to inactive (can not receive emails) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @return returnReceiver
   */
  public function receiverSetInactive($apiKey, $listId, $email) {
    return $this->__soapCall('receiverSetInactive', array($apiKey, $listId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * get subscriber data based on email adress 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @param int $level
   * @return returnReceiver
   */
  public function receiverGetByEmail($apiKey, $listId, $email, $level) {
    return $this->__soapCall('receiverGetByEmail', array($apiKey, $listId, $email, $level),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * get subscriber data based on ID 
   *
   * @param string $apiKey
   * @param int $listId
   * @param int $id
   * @param int $level
   * @return returnReceiver
   */
  public function receiverGetById($apiKey, $listId, $id, $level) {
    return $this->__soapCall('receiverGetById', array($apiKey, $listId, $id, $level),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns a list of receivers 
   *
   * @param string $apiKey
   * @param int $listId
   * @param pageFilterSegment $page
   * @return returnReceivers
   */
  public function receiverGetPage($apiKey, $listId, pageFilterSegment $page) {
    return $this->__soapCall('receiverGetPage', array($apiKey, $listId, $page),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns a list of receivers filtered by date 
   *
   * @param string $apiKey
   * @param int $listId
   * @param dateFilterSegment $page
   * @return returnReceivers
   */
  public function receiverGetByDate($apiKey, $listId, dateFilterSegment $page) {
    return $this->__soapCall('receiverGetByDate', array($apiKey, $listId, $page),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * appends order to assigned email 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @param receiverOrder $orderData
   * @return returnString
   */
  public function receiverAddOrder($apiKey, $listId, $email, receiverOrder $orderData) {
    return $this->__soapCall('receiverAddOrder', array($apiKey, $listId, $email, $orderData),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * appends orders to assigned emails in a batch (maximum of 50 emails per batch) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param receiverOrderBatch $orderList
   * @return returnString
   */
  public function receiverAddOrderBatch($apiKey, $listId, receiverOrderBatch $orderList) {
    return $this->__soapCall('receiverAddOrderBatch', array($apiKey, $listId, $orderList),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * creates a new receiverlist 
   *
   * @param string $apiKey
   * @param string $name
   * @return returnGroup
   */
  public function groupAdd($apiKey, $name) {
    return $this->__soapCall('groupAdd', array($apiKey, $name),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * Drops list including all filters, followups, forms etc 
   *
   * @param string $apiKey
   * @param int $listId
   * @return returnString
   */
  public function groupDelete($apiKey, $listId) {
    return $this->__soapCall('groupDelete', array($apiKey, $listId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * deletes all receivers inside given group 
   *
   * @param string $apiKey
   * @param int $listId
   * @return returnString
   */
  public function groupClear($apiKey, $listId) {
    return $this->__soapCall('groupClear', array($apiKey, $listId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * will create filter from given rules. Returns FilterID 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $name
   * @param filterRules $rules
   * @return returnFilter
   */
  public function groupFilterAdd($apiKey, $listId, $name, filterRules $rules) {
    return $this->__soapCall('groupFilterAdd', array($apiKey, $listId, $name, $rules),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns available lists for current apiKey 
   *
   * @param string $apiKey
   * @return returnGroups
   */
  public function groupGetList($apiKey) {
    return $this->__soapCall('groupGetList', array($apiKey),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns statistics of the list 
   *
   * @param string $apiKey
   * @param int $listId
   * @return returnStats
   */
  public function groupGetStats($apiKey, $listId) {
    return $this->__soapCall('groupGetStats', array($apiKey, $listId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * Starts Import of from a given csv file 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $file
   * @param string $action
   * @return returnString
   */
  public function groupCSVImport($apiKey, $listId, $file, $action) {
    return $this->__soapCall('groupCSVImport', array($apiKey, $listId, $file, $action),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns details about the given list 
   *
   * @param string $apiKey
   * @param int $listId
   * @return returnGroup
   */
  public function groupGetDetails($apiKey, $listId) {
    return $this->__soapCall('groupGetDetails', array($apiKey, $listId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * adds a user defined field to the list 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $name
   * @param string $type
   * @param string $default
   * @return returnString
   */
  public function groupAttributeAdd($apiKey, $listId, $name, $type, $default) {
    return $this->__soapCall('groupAttributeAdd', array($apiKey, $listId, $name, $type, $default),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * removes a user defined field (cannot be undone) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $name
   * @return returnString
   */
  public function groupAttributeDelete($apiKey, $listId, $name) {
    return $this->__soapCall('groupAttributeDelete', array($apiKey, $listId, $name),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * creates a blacklistentry in the given customer group (listId) from the given email 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @return returnString
   */
  public function groupBlacklistAdd($apiKey, $listId, $email) {
    return $this->__soapCall('groupBlacklistAdd', array($apiKey, $listId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * removes a blacklistentry from the given customer group (listId) 
   *
   * @param string $apiKey
   * @param int $listId
   * @param string $email
   * @return returnString
   */
  public function groupBlacklistRemove($apiKey, $listId, $email) {
    return $this->__soapCall('groupBlacklistRemove', array($apiKey, $listId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns all available forms for given group 
   *
   * @param string $apiKey
   * @param int $listId
   * @return returnForms
   */
  public function formsGetList($apiKey, $listId) {
    return $this->__soapCall('formsGetList', array($apiKey, $listId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns all available forms for given group 
   *
   * @param string $apiKey
   * @param int $formId
   * @param boolean $ssl
   * @param boolean $badget
   * @return returnString
   */
  public function formsGetCode($apiKey, $formId, $ssl, $badget) {
    return $this->__soapCall('formsGetCode', array($apiKey, $formId, $ssl, $badget),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns all available forms for given group 
   *
   * @param string $apiKey
   * @param int $formId
   * @param boolean $ssl
   * @param boolean $badget
   * @return returnString
   */
  public function formsGetEmbeddedCode($apiKey, $formId, $ssl, $badget) {
    return $this->__soapCall('formsGetEmbeddedCode', array($apiKey, $formId, $ssl, $badget),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * sends an activation mail to the given Email. You will need to submit a formID (getForms) 
   * 
   *
   * @param string $apiKey
   * @param int $formId
   * @param string $email
   * @return returnString
   */
  public function formsActivationMail($apiKey, $formId, $email) {
    return $this->__soapCall('formsActivationMail', array($apiKey, $formId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * sends an activation mail to the given Email. You will need to submit a formID (getForms) 
   * and additional DOI data (ip,referer, user_agent, etc) 
   *
   * @param string $apiKey
   * @param int $formId
   * @param string $email
   * @param DOIData $doidata
   * @return returnString
   */
  public function formsSendActivationMail($apiKey, $formId, $email, DOIData $doidata) {
    return $this->__soapCall('formsSendActivationMail', array($apiKey, $formId, $email, $doidata),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * sends a confirmation mail to the given Email. You will need to submit a formID (getForms) 
   * 
   *
   * @param string $apiKey
   * @param int $formId
   * @param string $email
   * @return returnString
   */
  public function formsUnsubscribeMail($apiKey, $formId, $email) {
    return $this->__soapCall('formsUnsubscribeMail', array($apiKey, $formId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * sends a confirmation mail to the given Email. You will need to submit a formID (getForms) 
   * 
   *
   * @param string $apiKey
   * @param int $formId
   * @param string $email
   * @return returnString
   */
  public function formsSendUnsubscribeMail($apiKey, $formId, $email) {
    return $this->__soapCall('formsSendUnsubscribeMail', array($apiKey, $formId, $email),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * creates new mailing 
   *
   * @param string $apiKey
   * @param mailingData $mailingData
   * @return returnMailing
   */
  public function mailingCreate($apiKey, mailingData $mailingData) {
    return $this->__soapCall('mailingCreate', array($apiKey, $mailingData),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * changes an existing mailing 
   *
   * @param string $apiKey
   * @param int $mailingId
   * @param mailingData $mailingData
   * @return returnMailing
   */
  public function mailingUpdate($apiKey, $mailingId, mailingData $mailingData) {
    return $this->__soapCall('mailingUpdate', array($apiKey, $mailingId, $mailingData),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns an existing mailing 
   *
   * @param string $apiKey
   * @param int $mailingId
   * @return returnMailing
   */
  public function mailingGet($apiKey, $mailingId) {
    return $this->__soapCall('mailingGet', array($apiKey, $mailingId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns an existing mailing 
   *
   * @param string $apiKey
   * @param int $mailingId
   * @param int $GroupId
   * @return returnMailing
   */
  public function mailingAddgroup($apiKey, $mailingId, $GroupId) {
    return $this->__soapCall('mailingAddgroup', array($apiKey, $mailingId, $GroupId),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns a list of the last 30 mailing reports 
   *
   * @param string $apiKey
   * @return returnReports
   */
  public function reportGetList($apiKey) {
    return $this->__soapCall('reportGetList', array($apiKey),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns a list of the last 30 mailing reports 
   *
   * @param string $apiKey
   * @return returnDetailedReports
   */
  public function reportGetDetailedList($apiKey) {
    return $this->__soapCall('reportGetDetailedList', array($apiKey),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns a list of the last 20 campaign reports 
   *
   * @param string $apiKey
   * @return returnReports
   */
  public function reportCampaignGetList($apiKey) {
    return $this->__soapCall('reportCampaignGetList', array($apiKey),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * return report details 
   *
   * @param string $apiKey
   * @param int $reportId
   * @param int $level
   * @return returnReport
   */
  public function reportGetDetails($apiKey, $reportId, $level) {
    return $this->__soapCall('reportGetDetails', array($apiKey, $reportId, $level),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

  /**
   * returns a list of receivers filtered by acticity and date 
   *
   * @param string $apiKey
   * @param int $reportId
   * @param dateReportFilterSegment $page
   * @return returnReportReceivers
   */
  public function reportGetUserActivity($apiKey, $reportId, dateReportFilterSegment $page) {
    return $this->__soapCall('reportGetUserActivity', array($apiKey, $reportId, $page),       array(
            'uri' => 'CRS',
            'soapaction' => ''
           )
      );
  }

}

?>
