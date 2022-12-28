<?php
declare(strict_types=1);


namespace Moharami\LaravelDataTransferObject\Tests\Unit;

use Moharami\LaravelDataTransferObject\DataTransferObject;
use Moharami\LaravelDataTransferObject\Tests\DTOs\UserData;
use PHPUnit\Framework\TestCase;


class DtoTest extends TestCase
{

    public function test_convert_array_to_object()
    {
        $array = [
            'first_name' => 'amir',
            'last_name' => 'moharami'
        ];

        $object = UserData::make($array);
        $this->assertEquals('moharami', $object->last_name);
    }

}
