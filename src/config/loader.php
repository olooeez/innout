<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/${modelName}.php");
}

function loadController($controllerName) {
    require_once(CONTROLLER_PATH . "/${controllerName}.php");
}

function loadView($viewName, $parameters = []) {
    if (count($parameters) > 0) {
        foreach ($parameters as $key => $value) {
            if (strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH . "/${viewName}.php");
}

?>
