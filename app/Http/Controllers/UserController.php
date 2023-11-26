<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "ini adalah method index";
    }

    public function create()
    {
        return "ini adalah method create";
    }

    public function read()
    {
        return "ini adalah method show/read";
    }

    public function update()
    {
        return "ini adalah method update";
    }
    
    public function delete()
    {
        return "ini adalah method delete";
    }


}
