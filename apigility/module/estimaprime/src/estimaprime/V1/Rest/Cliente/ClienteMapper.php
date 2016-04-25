<?php
namespace estimaprime\V1\Rest\Cliente;

use Zend\Db\TableGateway\TableGateway;

class ClienteMapper {
    
    protected $tableGateway;
    
    public function construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
}
