<?php

class ValidationException extends AppException
{
    private $errors = [];

    function __construct($errors = [], $message = 'Erros de validação.', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function __get($attribute)
    {
        return $this->errors[$attribute];
    }
}
