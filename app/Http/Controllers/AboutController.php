<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        view()->share('title', 'About Us');
        $image = get_static_option('about_image');
        $video = get_static_option('about_video');
        $description = get_static_option('description');

        return view('pages.backend.about.index', compact([
            'image',
            'video',
            'description'
        ]));
    }

    public function update(Request $request)
    {
        $image = get_static_option('about_image');
        $video = get_static_option('about_video');
        $description = get_static_option('description');

        if ($image != $request->image && !empty($request->image)) {
            $image = $request->image->store('about', 'public');
            set_static_option('about_image', $image);
        }

        if ($video != $request->video) {
            set_static_option('about_video', $request->video);
        }

        if ($description != $request->description) {
            set_static_option('description', $request->description);
        }

        return redirect()->route('about.index');
    }
}
