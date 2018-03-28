<?php
/**
 * Created by PhpStorm.
 * @author yjkwak
 * @date 2018-03-15 PM 4:18
 */

namespace voidnoble\Logs;

use Illuminate\Support\Facades\Request;

class Logs
{
    public function getLog()
    {
        $referrer = Request::server('HTTP_REFERER');

        // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
        Request::setTrustedProxies(['127.0.0.1'], \Illuminate\Http\Request::HEADER_X_FORWARDED_ALL);

        $data = [
            "ip" => Request::getClientIp(),
            "user_agent" => Request::header('User-Agent'),
            "referrer" => ($referrer)? $referrer : "",
        ];

        return $data;
    }

    public function logging()
    {
        $data = $this->getLog();

        $log = new \voidnoble\Logs\Models\Log($data);
        $log->save();
    }
}