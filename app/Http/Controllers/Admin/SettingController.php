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
        $settings = Setting::all();
        return view('admin.settings.edit', ['settings' => $settings]);
    }


    public function create()
    {
        //
    }


    public function store(SettingsRequest $request)
    {
        foreach ($request->validated() as $title => $content) {
            $setting = Setting::firstWhere('title', $title);
            if ($title === 'hero_image') {
                $setting->clearMediaCollection('hero');
                $setting->addMediaFromRequest('hero_image')->toMediaCollection('hero');
                $setting->content = $setting->getFirstMediaUrl('hero');
            } else {
                $setting->content = $content;
            }
            $setting->save();
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
