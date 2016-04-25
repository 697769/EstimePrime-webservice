<?php
namespace estimaprime;

use estimaprime\V1\Rest\Cliente\ClienteEntity;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
    
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'estimaprimeclienteTableGateway' => function($sm){
                    $dbAdapter = $sm->get('DB\cliente');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new ClienteEntity());                    
                    return new TableGateway('cliente', $dbAdapter, null,$resultSetPrototype);
                },
                'estimaprime\V1\Rest\Cliente\ClienteMapper' => function($sm){
                    $tableGateway = $sm->get('estimaprimeclienteTableGateway');
                    return new ClienteMapper($tableGateway);
                }
            )
        );
    }

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
