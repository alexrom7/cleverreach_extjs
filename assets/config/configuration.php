<?php
/**
 * CleverReach Example Configuration Class
 * 
 * Manages the configuration parameters for the application
 */

include(dirname(__FILE__).'/../../shared/config/environment.php');
include(dirname(__FILE__).'/log.config.php');
include(dirname(__FILE__).'/cleverreachws.config.php');

/**
 * Manages application configuration parameters
 * @package Assets
 * @subpackage Config
 */

class Configuration {
    
    /**
     * Obtains log configuration parameters
     * @return array
     */
    public static function getLog(){
        return LogConfig::get(Environment::$environment);
    }

    /**
     * Obtains clever reach webservice details
     * @return array    
     */
    public static function getCleverReachWs(){
        return CleverReachWsConfiguration::get(Environment::$environment);
    }
    

}

?>