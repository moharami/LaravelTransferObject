<?php
declare(strict_types=1);


namespace Moharami\LaravelDataTransferObject\Attributes;


use Attribute;

#[Attribute]
class map
{
    public function __construct(public string $value)
    {
    }

}
