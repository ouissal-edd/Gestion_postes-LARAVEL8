<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosteController extends Controller
{
    public function index()
    {
        return view("poste");
    }
}
