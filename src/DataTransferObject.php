<?php


namespace Moharami\LaravelDataTransferObject;

use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObject
{
    public function __construct($data)
    {
        $class = new ReflectionClass(static::class);

        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            $field = $property->name;
            $value = $data[$field];
            if ($property->getAttributes()) {
                $attributes = $property->getAttributes();
                $field = $attributes[0]->newInstance()->value;
            }
            $this->$field = $value;
        }
    }

    public static function make($data)
    {
        $class = get_called_class();
        return new $class($data);
    }

}
