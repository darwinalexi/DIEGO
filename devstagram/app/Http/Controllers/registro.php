<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registro extends Controller{

    public function store(Request $request){

        $request->request->add(['email' => Str::slug($request->email)]);

        $this->validate($request, [
            'name'=>'required | max:30',
            'email' =>'required |unique:users|email|max:60',
            'password' =>'required|confirmed|min:6'
        ]);

        registro::create([
            'name' => $request->nombre,
            'email' => $request->correo,
            //'password' => Hash::make($request->password)
            'password' => Hash::make($request->clave)
            //'password' => bcrypt($request->password)
        ]);
    }
}
