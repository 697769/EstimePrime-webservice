<?php
return array(
    'estimaprime\\V1\\Rest\\Cliente\\Controller' => array(
        'description' => 'serviço responsavel pela administração de clientes',
        'collection' => array(
            'description' => 'coleção de dados de clientes',
            'GET' => array(
                'description' => 'traz a listagem de todos os clientes',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente"
       },
       "first": {
           "href": "/cliente?page={page}"
       },
       "prev": {
           "href": "/cliente?page={page}"
       },
       "next": {
           "href": "/cliente?page={page}"
       },
       "last": {
           "href": "/cliente?page={page}"
       }
   }
   "_embedded": {
       "cliente": [
           {
               "_links": {
                   "self": {
                       "href": "/cliente[/:cliente_id]"
                   }
               }
              "nome": "nome cliente",
              "email": "email@email.com"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'insere novo cliente',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente[/:cliente_id]"
       }
   }
   "nome": "nome cliente",
   "email": "email@email.com"
}',
                'request' => '{
   "nome": "nome cliente",
   "email": "email@email.com"
}',
            ),
        ),
        'entity' => array(
            'description' => 'cliente do sistema',
            'GET' => array(
                'description' => 'traz um cliente especifico do sistemas',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente[/:cliente_id]"
       }
   }
   "nome": "nome cliente",
   "email": "email@email.com"
}',
            ),
            'DELETE' => array(
                'description' => 'remove um cliente do sistema',
                'request' => '{
   "nome": "nome cliente",
   "email": "email@email.com"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cliente[/:cliente_id]"
       }
   }
   "nome": "nome cliente",
   "email": "email@email.com"
}',
            ),
        ),
    ),
    'estimaprime\\V1\\Rpc\\Ping\\Controller' => array(
        'description' => 'verificação de status da api',
        'GET' => array(
            'description' => 'retorna o status de ping da api',
            'response' => '{
\'status\':\'ping retornado com sucesso!\'
}',
        ),
    ),
);
