<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'estimaprime\\V1\\Rest\\Cliente\\ClienteResource' => 'estimaprime\\V1\\Rest\\Cliente\\ClienteResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'estimaprime.rest.cliente' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/cliente[/:cliente_id]',
                    'defaults' => array(
                        'controller' => 'estimaprime\\V1\\Rest\\Cliente\\Controller',
                    ),
                ),
            ),
            'estimaprime.rpc.ping' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ping',
                    'defaults' => array(
                        'controller' => 'estimaprime\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'estimaprime.rest.cliente',
            1 => 'estimaprime.rpc.ping',
        ),
    ),
    'zf-rest' => array(
        'estimaprime\\V1\\Rest\\Cliente\\Controller' => array(
            'listener' => 'estimaprime\\V1\\Rest\\Cliente\\ClienteResource',
            'route_name' => 'estimaprime.rest.cliente',
            'route_identifier_name' => 'cliente_id',
            'collection_name' => 'cliente',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'estimaprime\\V1\\Rest\\Cliente\\ClienteEntity',
            'collection_class' => 'estimaprime\\V1\\Rest\\Cliente\\ClienteCollection',
            'service_name' => 'cliente',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'estimaprime\\V1\\Rest\\Cliente\\Controller' => 'HalJson',
            'estimaprime\\V1\\Rpc\\Ping\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'estimaprime\\V1\\Rest\\Cliente\\Controller' => array(
                0 => 'application/vnd.estimaprime.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'estimaprime\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.estimaprime.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'estimaprime\\V1\\Rest\\Cliente\\Controller' => array(
                0 => 'application/vnd.estimaprime.v1+json',
                1 => 'application/json',
            ),
            'estimaprime\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.estimaprime.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'estimaprime\\V1\\Rest\\Cliente\\ClienteEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'estimaprime.rest.cliente',
                'route_identifier_name' => 'cliente_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'estimaprime\\V1\\Rest\\Cliente\\ClienteCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'estimaprime.rest.cliente',
                'route_identifier_name' => 'cliente_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'estimaprime\\V1\\Rest\\Cliente\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
    'zf-content-validation' => array(
        'estimaprime\\V1\\Rest\\Cliente\\Controller' => array(
            'input_filter' => 'estimaprime\\V1\\Rest\\Cliente\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'estimaprime\\V1\\Rest\\Cliente\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\NotEmpty',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'nome',
                'description' => 'nome cliente',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'email',
                'description' => 'email@email.com',
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'estimaprime\\V1\\Rpc\\Ping\\Controller' => 'estimaprime\\V1\\Rpc\\Ping\\PingControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'estimaprime\\V1\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'ping',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'estimaprime.rpc.ping',
        ),
    ),
);
