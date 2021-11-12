<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        Message::create($validated);
        Mail::to($request->email)->send(new WelcomeEmail($request->fname));
        User::where('email', 'admin@admin.com')->first()->notify(new MessageReceived);
        return redirect()->route('welcome');
    }
}
