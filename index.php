<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */
require 'vendor/autoload.php';

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */

$app = new \Slim\Slim();
$app->config(array(
    'debug' => true,
    'templates.path' => 'views'
));

$app->get('/', 'Home:Index');
$app->get('/talent/', 'Talent:Index');
$app->get('/task/', 'Task:Index');

 $app->hook('slim.before', function () use ($app) {
      $app->view()->appendData(array('baseUrl' => '/SlimPro'));
   });
   
//启动slim
$app->run();
