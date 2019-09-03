<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class UserController extends Controller
{
    public function index()
    {
        echo "我是无法拒接一个有眼光的人";exit;
        $key = 'qqq';
        $val = Redis::get($key);
        var_dump($val);
    }

}