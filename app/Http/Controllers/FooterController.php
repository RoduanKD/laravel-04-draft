<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();
        return view('admin.footers.index', ['footers' => $footer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('admin.footers.edit', ['footer' => $footer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $validation = $request->validate([
            'firstsection' => 'required',
            'secondsection' => 'required',
            'thirdsection' => 'required',
            'forthsection' => 'required',
            // 'featured_image'    => 'required|file|image',
            // 'category_id'   => 'required|numeric|exists:categories,id',
            // 'tags'          => 'required|array|min:1|max:5',
            // 'tags.*'        => 'required|numeric|exists:tags,id',
        ]);
        // $request->dd();
        // // $validation['featured_image'] = $request->featured_image->store('public/images');
        // $validation['content_en'] = Purify::clean($request->content_en);
        $footer->update($validation);

        return redirect()->route('admin.footers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
