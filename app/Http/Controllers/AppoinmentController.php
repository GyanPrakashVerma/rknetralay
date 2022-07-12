<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function index(){
        $appntmt= Appointment::all();
        return view('backend.Appointment.index',compact('appntmt')); 
    }
    public function store(Request $request){
        // return "hii";
    $appntmt = new Appointment;
    $appntmt->name = $request->name; 
    $appntmt->email = $request->email; 
    $appntmt->phone = $request->phone; 
    $appntmt->date = $request->ap_date; 
    $appntmt->message = $request->message; 
    $appntmt->save();
    return redirect()->route('home');
    }
}
