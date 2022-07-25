<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index(){
        return view('konten.index');
    }

    public function detail(){
        return view('konten.detail');
    }

    public function create(){
        return view('konten.create');
    }

    public function edit(){
        return view('konten.edit');
    }
}
