<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

/**
 * create new idea
 */
$app->post('/idea', function ($request, $response, $args) {
    echo $request;
});

/**
 * get a random idea
 */
$app->get('/random-idea', function ($request, $response, $args) {
    echo $request;
});
