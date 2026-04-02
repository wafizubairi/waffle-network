<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:2',
            'email'   => 'required|email',
            'phone'   => 'nullable',
            'service' => 'required',
            'message' => 'required|min:10',
        ]);

        Mail::to('hello@wafflenetwork.my')
            ->send(new ContactMail($request->all()));

        return back()->with('success', __('home.success_message'));
    }
}