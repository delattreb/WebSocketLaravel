<?php

namespace App\Http\Controllers;

use App\Events\GroupWizzEvent;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function notify(int $group_id)
    {
        broadcast(new GroupWizzEvent($group_id, ['ws_name' => 'COVAGE', 'ws_data' => 'Some Datas']));
        return redirect()->back();
    }
}
