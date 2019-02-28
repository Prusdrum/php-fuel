<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Fuel\Model\GasStation;

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
  $name = $args['name'];
  $station = new GasStation($name . " owns this gas station");
  $response->getBody()->write($station->getName());

  return $response;
});
$app->run();