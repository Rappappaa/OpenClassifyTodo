<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user = auth()->user();
            $items = ListModel::Where('ref_user',$user->id)->simplePaginate(10);
            return view('home',compact('user','items'));
        }
        return redirect()->route('login');
    }

    public function creating_asc(){
    if(Auth::check()){
        $user = auth()->user();
        $items = ListModel::Where('ref_user',$user->id)->OrderBy('id')->simplePaginate(10);
        return view('home',compact('user','items'));
    }
    return redirect()->route('login');
}

    public function creating_desc(){
        if(Auth::check()){
            $user = auth()->user();
            $items = ListModel::Where('ref_user',$user->id)->OrderBy('id','DESC')->simplePaginate(10);
            return view('home',compact('user','items'));
        }
        return redirect()->route('login');
    }

    public function updating_asc(){
        if(Auth::check()){
            $user = auth()->user();
            $items = ListModel::Where('ref_user',$user->id)->OrderBy('updated_at')->simplePaginate(10);
            return view('home',compact('user','items'));
        }
        return redirect()->route('login');
    }

    public function updating_dsec(){
        if(Auth::check()){
            $user = auth()->user();
            $items = ListModel::Where('ref_user',$user->id)->OrderBy('updated_at','DESC')->simplePaginate(10);
            return view('home',compact('user','items'));
        }
        return redirect()->route('login');
    }

    public function search(){
        $user = auth()->user();
        $search = request('inputSearch');
        $items = ListModel::Where('description','like',"%$search%")->Where('ref_user',$user->getAuthIdentifier())->simplePaginate(10);
        return view('home',compact('user','items'));
    }
}
