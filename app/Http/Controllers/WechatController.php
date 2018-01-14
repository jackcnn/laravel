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

        $app->server->push(function ($message) {
            return "您好！欢迎使用 EasyWeChat!";
        });

        return $app->server->serve();

    }
}
