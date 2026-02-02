<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewLeadMail;


class ContactController extends Controller
{
    // Show contact page
    public function index()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|string|min:3|max:255',
            'email'        => 'required|email|max:255|unique:leads',
            'country_code' => 'required|string|max:10',
            'number'       => 'required|string|max:20|unique:leads',
            'message'      => 'nullable|string',
        ]);

        Lead::create($data);

        
        Mail::to('saitamil395@gmail.com')->send(new NewLeadMail($data));

        return redirect()->back()->with('success', 'Thank you! We will contact you soon.');
    }
}
