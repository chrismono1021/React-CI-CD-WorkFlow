<?php

require_once "vendor/autoload.php";
Requests::register_autoloader();

echo "::debug ::Sending a request to slack\n";

$response = Requests::post(
  $_ENV['INPUT_SLACK_WEBHOOK'], 
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
            'text' => $_ENV['INPUT_MESSAGE'],
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
              'text' => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",
            ),
            1 => 
            array (
              'type' => 'mrkdwn',
              'text' => "*Event:*\n{$_ENV['GITHUB_EVENT_NAME']}",
            ),
            2 => 
            array (
              'type' => 'mrkdwn',
              'text' => "*Ref:*\n{$_ENV['GITHUB_REF']}",
            ),
            3 => 
            array (
              'type' => 'mrkdwn',
              'text' => "*SHA:*\n{$_ENV['GITHUB_SHA']}",
            ),
          ),
        ),
      ),
    ),
  ),
);

echo "::group::Slack Response logs\n";
var_dump($response);
echo "::endgroup::\n";

if (!$response->success) {
  echo $response->body;
  exit(1);
}
