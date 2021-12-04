<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\newsletter;
use App\Models\subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterEmail;
use App\Models\User;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = newsletter::paginate(10);
        return view('admin.newsletters.index', ['newsletters' => $newsletters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newsletters.create');
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
            'title_en'  => 'required|min:2',
            'title_ar'  => 'required|min:2',
            'content_en'  => 'required',
            'content_ar'  => 'required',
        ]);

        $Newsletter = Newsletter::create($validated);

        return redirect()->route('admin.newsletters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(newsletter $newsletter)
    {
        return view('admin.newsletters.show', ['newsletter' => $newsletter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsletter $newsletter)
    {
        $subscribers = subscriber::all();
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterEmail($subscriber->name, $newsletter));
            User::where('email', 'admin@material.com')->first();
        }
        return redirect()->route('admin.newsletters.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('admin.newsletters.index');
    }
    public function mail(newsletter $newsletter)
    {
        $subscribers = subscriber::all();
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterEmail($subscriber->name, $newsletter));
        }
        return redirect()->route('admin.newsletters.index');
    }
}
