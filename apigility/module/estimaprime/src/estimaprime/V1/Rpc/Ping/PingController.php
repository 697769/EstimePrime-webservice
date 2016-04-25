<?php
namespace estimaprime\V1\Rpc\Ping;

use Zend\Mvc\Controller\AbstractActionController;

class PingController extends AbstractActionController
{
    public function pingAction()
    {
        return ['status'=>'Ping retornado com sucesso!'];
    }
}
