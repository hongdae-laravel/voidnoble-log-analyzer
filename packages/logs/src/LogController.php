<?php

namespace voidnoble\Logs;

use App\Http\Controllers\Controller;
use voidnoble\Logs\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $referrer = $request->headers->get('referer');

        // only trust proxy headers coming from the IP addresses on the array (change this to suit your needs)
        $request->setTrustedProxies(['127.0.0.1']);

        $data = [
            "ip" => $request->getClientIp(),
            "user_agent" => $request->header('User-Agent'),
            "referrer" => ($referrer)? $referrer : "",
        ];

        $log = new Log($data);
        $log->save();

        return __METHOD__;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return __METHOD__;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return __METHOD__;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return __METHOD__ . " " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return __METHOD__ . " " . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return __METHOD__ . " " . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return __METHOD__ . " " . $id;
    }
}
