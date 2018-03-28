<?php
/**
 * Created by PhpStorm.
 * @author yjkwak
 * @date 2018-03-15 PM 4:20
 */

namespace voidnoble\Logs;

use Illuminate\Support\Facades\Facade;

class LogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'logs';
    }
}