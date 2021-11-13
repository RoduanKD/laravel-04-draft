<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'name_en'     => 'required|min:3',
            'name_ar'     => 'required|min:3',
            'description_en'   => 'required',
            'description_ar'   => 'required',
            'featured_image'    => 'required|file|image',
        ]);
        $validation['featured_image'] = $request->featured_image->store('public/images');
        // please add purification here like Admin/PostController@store
        $service = Service::create($validation);


        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.services.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Service $service, Request $request)
    {
        $validation = $request->validate([
            'name_en'     => 'required|min:3',
            'name_ar'     => 'required|min:3',
            // validations are missing descriptions
        ]);

        $service->update($validation);

        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index');
    }
}
