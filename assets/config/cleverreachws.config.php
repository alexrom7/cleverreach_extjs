<?php
/**
 *WS configuration class
 * 
 * Manages the configuration parameters for ws
 * @author Alexis Romero
 * @version 1.0
 */

/**
 * Manages ws configuration parameters
 * @package Assets
 * @subpackage Config
 */
class CleverReachWsConfiguration {
    
    //Local configuration
    private static $_local = array(
        'url' => 'http://api.cleverreach.com/soap/interface_v5.1.php?wsdl',
        'customer_number' => '52596',
        'login' => 'test',
        'password' => 'test123',
        'API_KEY' => '754a99acffacbd7f184c997899eaf933-2'
    );
    
    //Development configuration
    private static $_development = array(
        'url' => 'http://api.cleverreach.com/soap/interface_v5.1.php?wsdl',
        'customer_number' => '52596',
        'login' => 'test',
        'password' => 'test123',
        'API_KEY' => '754a99acffacbd7f184c997899eaf933-2'
    );
    
    //QA configuration
    private static $_qa = array(
        'url' => 'http://api.cleverreach.com/soap/interface_v5.1.php?wsdl',
        'customer_number' => '52596',
        'login' => 'test',
        'password' => 'test123',
        'API_KEY' => '754a99acffacbd7f184c997899eaf933-2'
    );
    
    
    //Production configuration
    private static $_production = array(
        'url' => 'http://api.cleverreach.com/soap/interface_v5.1.php?wsdl',
        'customer_number' => '52596',
        'login' => 'test',
        'password' => 'test123',
        'API_KEY' => '754a99acffacbd7f184c997899eaf933-2'
    );
     
    /**
     * Returns director configuration given an environment
     * @param int $environment  Environment type
     * @return array    Director configuration
     */
    public static function get($environment){
        switch ($environment){
            case 0:
                return self::$_local;
                break;
            case 1:
                return self::$_development;
                break;
            case 2:
                return self::$_qa;
                break;
            case 3:
                return self::$_production;
                break;
            default:
                return self::$_local;
                break;         
        }
    }
}

?>