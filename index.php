<?php
<<<<<<< HEAD
<<<<<<< HEAD
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates'); // используется Twig папка с шаблонами
$view = new \Twig\Environment($loader);

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) use($view){
    $body= $view->render('index.twig');
    $response->getBody()->write($body);
    return $response;
});

$app->get('/about', function (Request $request, Response $response, $args) use($view){
    $body=$view->render('about.twig',[
        'name'=> 'Daniil'
    ]);// выбираем шаблон и вторым  аргументом передаем параметры
    $response->getBody()->write($body);
    return $response;
});

$app->run();
=======
echo 'Work';//все рабоатет
>>>>>>> b72d4bc... Work
=======
echo 'Work';//все рабоатет
>>>>>>> origin/main
