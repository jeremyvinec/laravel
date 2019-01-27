<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function test($name='toi'){

        return view('test',[
            'name'=>$name,
            //'page_title'=>'Page de test'
        ]);

    }

    public function getUsersList(){
        $user = User::get();
        return view('users_list', ['users'=> $user]);
    }
}
