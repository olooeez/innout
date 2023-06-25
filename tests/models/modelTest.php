<?php
require_once(dirname(__FILE__) . '/../../src/config/config.php');

require_once(MODEL_PATH . '/model.php');

use PHPUnit\Framework\TestCase;

class modelTest extends TestCase
{
  public function testLoadUserFromArray()
  {
    $user = [
      'id' => 1,
      'name' => 'John Doe',
      'email' => 'john@example.com'
    ];

    $model = new Model($user);
    $this->assertEquals($user['id'], $model->id);
    $this->assertEquals($user['name'], $model->name);
    $this->assertEquals($user['email'], $model->email);
  }
}
