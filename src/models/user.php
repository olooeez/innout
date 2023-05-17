<?php

require_once(dirname(__FILE__) . '/../config/config.php');

require_once(MODEL_PATH . '/model.php');

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',
    ];
}

?>
