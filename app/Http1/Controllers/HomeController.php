<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function gallery(){
        return view('frontend.gallery');
    }
    public function about(){
        return view('frontend.about');
    }
    public function doctors(){
        return view('frontend.doctors');
    }
    public function blogs(){
        return view('frontend.blogs');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function service(){
        return view('frontend.service');
    }

 

}
