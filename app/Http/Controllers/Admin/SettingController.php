<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SettingController extends Controller
{

    public function index()
    {
        return view('admin.settings.create');
    }


    public function create()
    {
        //
    }


    public function store(SettingsRequest $request , Setting $setting)
    {
        $setting->title     = $request->title;
        $setting->content   = $request->content;
        $setting->save();

        if ($request->image) {
            $setting->addMediaFromRequest('image')->toMediaCollection('setting');
        }

        return back()->withStatus(__('New Hero Settings is successfully updated.'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
