<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class TestaController extends Controller
{

    public function testeRole(){
        $owner  = new Role(); 

        $admin  =  new  Role(); 
        $admin->name          =  'admin' ; 
        $admin->display_name  =  ' User Administrator ' ; // opcional 
        $admin->description   =  'O usuário pode gerenciar e editar outros usuários ' ; // opcional 
        $admin->save();
    }
}
