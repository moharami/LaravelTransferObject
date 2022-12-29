<?php


namespace Moharami\LaravelDataTransferObject;

use http\Exception\InvalidArgumentException;
use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObject
{
    public function __construct($data)
    {
        $class = new ReflectionClass(static::class);

        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            $value = $data[$property->name];
            $field = $this->getField($property);
            $this->$field = $value;
        }
    }

    public static function make($data)
    {
        $class = get_called_class();
        return new $class($data);
    }

    
    public function getField(ReflectionProperty $property)
    {
        $field = $property->name;
        if ($property->getAttributes()) {
            $attributes = $property->getAttributes();
            $field = $attributes[0]->newInstance()->value;
        }
        return $field;
    }


}
