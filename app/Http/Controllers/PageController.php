<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homeRedirect(){
        return view('homepage');
    }

    public function aboutRedirect(){
        return view('about');
    }

    public function contactsRedirect(){
        return view('contacts');
    }
}
