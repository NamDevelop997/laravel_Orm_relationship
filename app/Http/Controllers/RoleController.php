<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function show(){
        //Kiểm tra xem 1 quyền role id =3 có bao nhiêu user sử dụng
       return  Role::find(3)->users;
    }
}
