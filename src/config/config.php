<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');

define('MODEL_PATH', dirname(realpath(__FILE__)) . '/../models');
define('VIEW_PATH', dirname(realpath(__FILE__)) . '/../views');
define('CONTROLLER_PATH', dirname(realpath(__FILE__)) . '/../controllers');
define('EXCEPTION_PATH', dirname(realpath(__FILE__)) . '/../exceptions');
define('TEMPLATE_PATH', dirname(VIEW_PATH . '/templates'));

require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(MODEL_PATH . '/model.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));

?>
