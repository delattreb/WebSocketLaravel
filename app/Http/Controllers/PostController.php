<?php

namespace App\Http\Controllers;

use App\Events\PostCreatedEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $event = new PostCreatedEvent(['ws_name' => 'COVAGE', 'ws_data' => 'Some Datas']);
        //event($event);
        broadcast($event)->toOthers();
        dd();
    }
}
