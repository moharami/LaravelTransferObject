<?php


namespace Moharami\LaravelDataTransferObject\Tests\DTOs;

use Moharami\LaravelDataTransferObject\Attributes\map;
use Moharami\LaravelDataTransferObject\DataTransferObject;

class UserData extends DataTransferObject
{
    #[map('firstName')]
    public string $first_name;
    public string $last_name;
}
