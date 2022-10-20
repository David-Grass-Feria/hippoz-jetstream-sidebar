<?php

namespace Hippoz\HippozJetstreamSidebar\Facades;

use Illuminate\Support\Facades\Facade;

class HippozJetstreamSidebar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hippoz-jetstream-sidebar';
    }
}
