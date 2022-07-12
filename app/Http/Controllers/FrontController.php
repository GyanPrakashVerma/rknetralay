<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Blog;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $blog= Blog::where('delete_status',0)->where('status',1)->get()->take(3);
        $feedback=Feedback::where('delete_status',0)->get();
        return view('frontend.index',compact('blog','feedback'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function gallery(){
        $image= Gallery::where('delete_status',0)->get();
        return view('frontend.gallery',compact('image'));
    }
    public function doctors(){
        return view('frontend.doctors');
    }
    public function blogs(){
        $blog= Blog::where('delete_status',0)->where('status',1)->get()->take(8);
        return view('frontend.blogs',compact('blog'));
    }
    public function blog($id){
        $blog=Blog::find($id);
        $bloggg= Blog::where('delete_status',0)->where('status',1)->get()->take(5);
        return view('frontend.blog',compact('blog','bloggg'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function service(){
        return view('frontend.service');
    }
}
