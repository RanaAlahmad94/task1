<?php

namespace App\Http\Controllers;

use App\Models\User2;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function HomeIndex(){
        return view('welcome');
    }
    public function store(Request $request)
    {
        // $user = new User2();
        $name = $request->input('name');
        $email = $request->input('email');
        // $user->save();
    
        $isInsert = User2::insert(['name'=>$name, 'email'=>$email]);
        // return redirect('store');

        if($isInsert) echo '<h1> insert success..</h1>';
        else echo'<h1> failed..</h1>';
    }
}
