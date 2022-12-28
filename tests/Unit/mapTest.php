<?php


namespace Moharami\LaravelDataTransferObject\Tests\Unit;

use Moharami\LaravelDataTransferObject\Tests\DTOs\UserData;
use Monolog\Test\TestCase;

class mapTest extends TestCase
{
    public function test_map()
    {
        $array = [
            'first_name' => 'amir',
            'last_name' => 'moharami'
        ];

        $object = UserData::make($array);
        $this->assertEquals('amir', $object->firstName);
    }
}
