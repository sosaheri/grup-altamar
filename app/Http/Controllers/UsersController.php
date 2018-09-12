<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{


   public function home(){

        $users = User::orderBy('id', 'desc')->paginate(10);
    	//return $users;
        return view('usuarios', ['users' => $users]);
    }

public function delete($id){
        
        User::where('id', $id)
        ->delete();
        return  redirect('usuarios')->with('info','Usuario Eliminada');
   

    }
    

}
