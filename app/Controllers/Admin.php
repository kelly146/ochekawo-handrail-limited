<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function index()
    {
        
        return view('index');
    }
    public function dashboard()
    {
        
        return view('dashboard');
    }
}