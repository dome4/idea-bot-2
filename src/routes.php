<?php

use Slim\Http\Request;
use Slim\Http\Response;


$app->group('/api', function () {
    $this->group('/v1', function () {


        /**
         * create new idea
         */
        $this->post('/idea', function ($request, $response, $args) {
            
            return $response;
        });

        /**
         * get a random idea
         */
        $this->get('/random-idea', function ($request, $response, $args) {
            
            return $response;
        });
    });
});