<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contact(){
        return redirect('https://www.educastudio.com/contact-us');
    }
}
