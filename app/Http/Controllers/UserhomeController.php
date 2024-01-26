<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserhomeController extends Controller
{
    public function index()
    {
        return view('userHome');
    }

    public function jadwalRapat()
    {
        return view('jadwalRapat');
    }


    public function buatRapat()
    {
        return view('buatRapat');
    }

    public function userHome()
    {

        return view('userHome');

    }

    public function arsipRapat()
    {
        return view('arsipRapat');
    }
}
