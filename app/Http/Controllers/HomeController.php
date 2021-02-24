<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function Home()
    {
        return redirect('https://www.educastudio.com/');
    }
    public function Home1()
    {
        echo 'selamat datang di halaman home';
    }
    
}
