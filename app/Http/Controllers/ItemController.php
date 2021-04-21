<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function additem(){
        $user = auth()->user();
        $item = null;
        return view('listitem',compact('user','item'));
    }

    public function additem_action(){
        DB::table('lists')->insert([
            'ref_user' => auth()->user()->getAuthIdentifier(),
            'description' => request('inputDescription'),
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home');
    }

    public function edititem(){
        $user = auth()->user();
        $item = ListModel::Where(['id' => request('inputID'), 'ref_user' => auth()->user()->getAuthIdentifier()])->First();
        return view('listitem',compact('user','item'));
    }

    public function edititem_action(){
        ListModel::Where([
                'id' => request('inputID'),
                'ref_user' => auth()->user()->getAuthIdentifier()
            ])
            ->update([
                'ref_user' => auth()->user()->getAuthIdentifier(),
                'description' => request('inputDescription'),
                'updated_at' => Carbon::now()
            ]);

        return redirect()->route('home');
    }

    public function delete_item(){
        ListModel::Where(['ref_user' => auth()->user()->id,'id' => request('inputID')])->delete();
        return redirect()->route('home');
    }
}
