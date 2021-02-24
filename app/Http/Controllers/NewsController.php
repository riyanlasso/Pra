<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return redirect('https://www.educastudio.com/news');
    }

    public function topik($topik){
        return redirect('https://www.educastudio.com/news/'.$topik.'');
    }
}
