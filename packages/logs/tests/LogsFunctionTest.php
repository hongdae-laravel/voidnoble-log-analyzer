<?php
/**
 * Created by PhpStorm.
 * @author yjkwak
 * @date 2018-03-15 PM 4:33
 */

namespace voidnoble\Logs\Test;

use Logs;

class LogsFunctionTest extends TestCase
{
    public function testLogging()
    {
        $this->assertTrue(Logs::logging());

        $this->assertArrayHasKey("ip", Logs::getLog());
        $this->assertArrayHasKey("user_agent", Logs::getLog());
        $this->assertArrayHasKey("referrer", Logs::getLog());
    }
}
