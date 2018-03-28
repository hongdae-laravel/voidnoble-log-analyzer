<?php
/**
 * Created by PhpStorm.
 * @author yjkwak
 * @date 2018-03-15 PM 4:30
 */

namespace voidnoble\Logs\Test;

use voidnoble\Logs\LogFacade;
use voidnoble\Logs\LogServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            LogServiceProvider::class
        ];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Logs' => LogFacade::class,
        ];
    }
}
