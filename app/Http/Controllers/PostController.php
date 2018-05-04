<?php

namespace App\Http\Controllers;

use App\Events\PostCreatedEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $event = new PostCreatedEvent(['name' => 'DELATTRE', 'first_name' => 'Bruno']);
        //event($event);
        broadcast($event)->toOthers();
        dd();
    }
}
