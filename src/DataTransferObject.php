<?php


namespace Moharami\LaravelDataTransferObject;

use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObject
{
    public function __construct($data)
    {
        $class = new ReflectionClass(static::class);
        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $reflectionProperty) {
            $field = $reflectionProperty->getName();
            $this->$field = $data[$field];
        }
    }

    public static function make($data)
    {
        $class = get_called_class();
        return new $class($data);

    }

}
