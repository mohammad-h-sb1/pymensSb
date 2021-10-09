<?php

namespace Payment\Sb;

use Illuminate\Support\Facades\Facade;

class paymentServiceFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'paymentService';
    }

}
