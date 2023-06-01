<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisTestController extends Controller
{
    public function redis()
    {
        $redis = Redis::get();
        return view("redis");
    }
}
