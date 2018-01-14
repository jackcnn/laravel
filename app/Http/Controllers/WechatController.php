<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;

class WechatController extends Controller
{
    //
    public function index()
    {
        $app = Factory::officialAccount([]);

        return $app->server->serve();

    }
}
