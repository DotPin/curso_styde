<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    
    public function index(){

        if(request()->has('empty')){
            $users = [];
        }else{
            $users =[
                'Diego','Pablo','Hugo','Victor','Miguel','Sebastian'
            ];
        }

        $titles = 'Listado de usuarios';

        return view('user.index',compact('titles','users'));
    }

    public function nuevo(){
        return view('user.new');
    }

    public function show($id){
        return view('user.detail',compact('id'));
    }

    public function edit($name){
        $name = ucfirst($name);
        return view('user.edit',compact('name'));
    }

}    
