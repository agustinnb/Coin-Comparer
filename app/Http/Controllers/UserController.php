<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        return view('createuser');
    }
    public function login(){
        return "Acá te logueas";
    }
    public function delete(){
        return "Acá te borras";
    }
}
