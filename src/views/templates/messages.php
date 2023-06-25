<?php

$errors = [];

if ($exception) {
  $message = [
    'type' => 'error',
    'message' => $exception->getMessage()
  ];
}

$alertType = null;

switch ($message['type']) {
  case 'error':
    $alertType = 'danger';
    break;
  default:
    $alertType = 'success';
    break;
}

if ($message) {
  echo "<div class='my-3 alert alert-{$alertType}' role='alert'>{$message['message']}</div>";
}
