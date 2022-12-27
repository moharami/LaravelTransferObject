<?php

namespace Moharami\LaravelDataTransferObject;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Moharami\LaravelDataTransferObject\Skeleton\SkeletonClass
 */
class LaravelDataTransferObjectFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraveldatatransferobject';
    }
}
