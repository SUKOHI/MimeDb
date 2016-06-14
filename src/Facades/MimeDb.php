<?php namespace Sukohi\MimeDb\Facades;

use Illuminate\Support\Facades\Facade;

class MimeDb extends Facade {

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'mime-db'; }

}