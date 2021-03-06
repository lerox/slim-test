<?php
// Routes

$app->get('/hi/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write('Hello, ' . $args['name']);
});

$app->get('/', function ($request, $response, $args) {
    $response = $response->withHeader('Content-Type', 'application/json; charset=UTF-8');
    return $response->withStatus(200)->write('{"message":"It\'s working"}');
});

$app->get('/ping', function ($req, $res, $args) {
    return $res->withStatus(200)->write('pong');
});

$app->get('/bad', function ($req, $res, $args) {
    return $res->withStatus(400)->write('Bad request my friend!');
});
