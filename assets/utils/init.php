<?php

    /**
     * Init
     *
     * Includes all classes
     * @version 1.0
     * @package Assets
     * @subpackage Init
     */

     /**
      * Includes
      */
    //Config
    require_once dirname(__FILE__).'/../../assets/config/configuration.php';
    
    //Models
    
    //Utils
    require_once dirname(__FILE__).'/../../assets/utils/log.php';

    // WEBSERVICES
    require_once dirname(__FILE__).'/../../controller/webservices/Interface_V5.php'; 
?>