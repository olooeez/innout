<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');

define('MODEL_PATH', dirname(realpath(__FILE__)) . '/../models');

require_once(realpath(dirname(__FILE__) . '/database.php'));

?>
