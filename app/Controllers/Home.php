<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function dashboard_admin()
    {
        return view('dashboard_admin');
    }

    public function dashboard_comum()
    {
        return view('dashboard_comum');
    }

    
}
