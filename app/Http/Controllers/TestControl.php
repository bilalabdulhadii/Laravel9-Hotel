<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControl extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
    public function func()
    {
        return view('home.func');
    }

    public function parameter($id, $number)
    {
        //echo "Parameter 1: ", $id;
        //echo "<br>Parameter 2: ", $number;
        return view('home.func2',['id' => $id, 'number' => $number]);
    }
    public function save(Request $request)
    {
        echo "Save Function:<br>";
        echo "First Name: ", $_REQUEST["fname"];
        echo "<br>Last Name: ", $_REQUEST["lname"];
    }

}
