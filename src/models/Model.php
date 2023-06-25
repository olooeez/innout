<?php

class Model
{
  protected static $tableName = '';
  protected static $columns = [];

  protected $values = [];

  function __construct($user)
  {
    $this->loadUserFromArray($user);
  }

  public function loadUserFromArray($array)
  {
    if ($array) {
      foreach ($array as $key => $value) {
        $this->$key = $value;
      }
    }
  }

  public function __get($key)
  {
    return $this->values[$key];
  }

  public function __set($key, $value)
  {
    $this->values[$key] = $value;
  }

  public static function getOne($filters = [], $columns = '*')
  {
    $class = get_called_class();
    $result = static::getResultSetFromSelect($filters, $columns);
    return $result ? new $class($result->fetch_assoc()) : null;
  }

  public static function get($filters = [], $columns = '*')
  {
    $objects = [];
    $result = static::getResultSetFromSelect($filters, $columns);
    $class = get_called_class();

    while ($row = $result->fetch_assoc()) {
      array_push($objects, new $class($row));
    }

    return $objects;
  }

  public static function getResultSetFromSelect($filters = [], $columns = '*')
  {
    $sql = "SELECT ${columns} FROM " . static::$tableName . static::getFilters($filters);
    $result = Database::getResultFromQuery($sql);

    if ($result->num_rows == 0) {
      return null;
    }

    return $result;
  }

  private static function getFilters($filters)
  {
    $sql = ' WHERE 1 = 1';

    foreach ($filters as $column => $value) {
      $sql .= " AND ${column} = " . static::getFormatedValue($value);
    }

    return $sql;
  }

  private static function getFormatedValue($value)
  {
    if (is_null($value))
      return 'null';
    else if (gettype($value) == 'string')
      return "'${value}'";
    else
      return $value;
  }
}
