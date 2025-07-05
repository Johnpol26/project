<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProjectController extends Controller
{
    public function showProject()
    {
        return view('MyProjects');
    }
}
