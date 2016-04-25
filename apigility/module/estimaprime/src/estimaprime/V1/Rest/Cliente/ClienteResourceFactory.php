<?php
namespace estimaprime\V1\Rest\Cliente;

class ClienteResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('estimaprime\V1\Rest\Cliente\ClienteMapper');            
        return new ClienteResource($mapper);
    }
}
