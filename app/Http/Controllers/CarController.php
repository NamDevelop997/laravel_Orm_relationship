<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    function add()
    {
        DB::table('car')->insert(['name' => 'Honda220', 'color' => 'red']);
    }

    function show()
    {
        // $cars = DB::table('car')->get();
        $cars = DB::table('car')->avg('id');

        echo $cars;
    }

    function find($id){
        $cars = DB::table('car')->find($id);
        dd($cars);
    }
}
