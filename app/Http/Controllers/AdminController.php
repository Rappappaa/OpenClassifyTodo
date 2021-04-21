<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users = User::All();
        $lists = ListModel::All();
        return view('admin.home',compact('users','lists'));
    }

    public function users(){
        $users = User::All();
        return view('admin.users',compact('users'));
    }

    public function lists(){
        $lists = DB::table('lists')
            ->join('users','users.id','=','lists.ref_user')
            ->get();
        return view('admin.lists',compact('lists'));
    }
}
