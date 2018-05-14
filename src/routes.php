<?php


use Slim\Http\Request;
use Slim\Http\Response;
use App\Controllers\IdeaController;



$app->group('/api', function () {
    $this->group('/v1', function () {


        /**
         * create new idea
         */
        $this->post('/idea', IdeaController::class . ':postIdea');

        /**
         * get a random idea
         */
        $this->get('/random-idea', IdeaController::class . ':getRandomIdea');
    });
});