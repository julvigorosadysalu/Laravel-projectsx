<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function layout(){
        return view('pages/dashboard');
    }
    public function users(){
        return view('pages/users');
    }
    public function buttons(){
        return view('pages/buttons');
    }
    public function cards(){
        return view('pages/cards');
    }
    public function skills(){
        return view('pages/skills');
    }
    public function awards(){
        return view('pages/awards');
    }
    public function projects(){
        return view('pages/projects');
    }
    public function ebooks(){
        return view('pages/ebooks');
    }
    public function notes(){
        return view('pages/notes');
    }
    public function novels(){
        return view('pages/novels');
    }
    public function midtest(){
        return view('pages/midtest');
    }
    public function finaltest(){
        return view('pages/finaltest');
    }
    public function improvement(){
        return view('improvement');
    }
    public function schedule(){
        return view('schedule');
    }
}
