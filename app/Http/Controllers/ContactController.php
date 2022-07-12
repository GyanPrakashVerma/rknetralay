<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $enquiry =new Enquiry;
        $enquiry ->Name=$request->name;
        $enquiry ->email=$request->email;
        $enquiry ->contact=$request->phone;
        $enquiry ->message=$request->message;
        $enquiry ->save();
        return redirect()->back();

    }
}
