<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.home');
    }

    public function about(){

        return view('Frontend.about');
    }

    public function services(){

        return view('Frontend.services');
    }

    public function project(){

        return view('Frontend.project');
    }

    public function blog(){

        return view('Frontend.blog');
    }

    public function projectdetails()
    {
        return view('Frontend.projectdetails');
    }

    public function blogdetails()
    {
        return view('Frontend.blogdetails');
    }

    public function email()
    {
       return view('Frontend.email');
    }


}
