<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use MessageFormatter;

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

        return redirect()->route('welcome');
    }
}
