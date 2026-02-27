<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function index()
    {
        return 'selamat datang';
    }

    public function about()
    {
        return 'naufal ramadhan, 244107020201';
    }

    public function articles($id)
    {
        return 'id : ' . $id;
    }

}
