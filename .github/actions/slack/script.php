<?php

require_once "vendor/autoload.php";
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);

/* $response = Requests::post(
  "https://hooks.slack.com/services/id_here", 
  array(
    'Content-type' => 'application/json'
  ),
  json_encode(array (
    'blocks' => 
      array (
        0 => 
        array (
          'type' => 'section',
          'text' => 
          array (
            'type' => 'mrkdwn',
            'text' => 'You have a new request:
    *<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*',
          ),
        ),
        1 => 
        array (
          'type' => 'section',
          'fields' => 
          array (
            0 => 
            array (
              'type' => 'mrkdwn',
              'text' => '*Type:*
    Computer (laptop)',
            ),
            1 => 
            array (
              'type' => 'mrkdwn',
              'text' => '*When:*
    Submitted Aut 10',
            ),
          ),
        ),
      ),
    ),
  ),
);

var_dump($response);

if (!$response->success) {
  echo $response->body;
} */
