<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        view()->share('title', 'Home Page');
        $hero_image = get_static_option('hero_image');
        $hero_title = get_static_option('hero_title');
        $hero_description = get_static_option('hero_description');
        $logo = get_static_option('logo');

        $hero_feature_text_1 = get_static_option('hero_feature_text_1');
        $hero_feature_icon_1 = get_static_option('hero_feature_icon_1');
        $hero_feature_url_1 = get_static_option('hero_feature_url_1');

        $hero_feature_text_2 = get_static_option('hero_feature_text_2');
        $hero_feature_icon_2 = get_static_option('hero_feature_icon_2');
        $hero_feature_url_2 = get_static_option('hero_feature_url_2');

        $hero_feature_text_3 = get_static_option('hero_feature_text_3');
        $hero_feature_icon_3 = get_static_option('hero_feature_icon_3');
        $hero_feature_url_3 = get_static_option('hero_feature_url_3');

        return view('pages.backend.homepage.index', compact([
            'hero_image',
            'hero_title',
            'hero_description',
            'logo',
            'hero_feature_text_1',
            'hero_feature_icon_1',
            'hero_feature_url_1',
            'hero_feature_text_2',
            'hero_feature_icon_2',
            'hero_feature_url_2',
            'hero_feature_text_3',
            'hero_feature_icon_3',
            'hero_feature_url_3',
        ]));
    }

    public function update(Request $request)
    {
        $hero_image = get_static_option('hero_image');
        $hero_title = get_static_option('hero_title');
        $hero_description = get_static_option('hero_description');
        $logo = get_static_option('logo');

        $hero_feature_text_1 = get_static_option('hero_feature_text_1');
        $hero_feature_icon_1 = get_static_option('hero_feature_icon_1');
        $hero_feature_url_1 = get_static_option('hero_feature_url_1');

        $hero_feature_text_2 = get_static_option('hero_feature_text_2');
        $hero_feature_icon_2 = get_static_option('hero_feature_icon_2');
        $hero_feature_url_2 = get_static_option('hero_feature_url_2');

        $hero_feature_text_3 = get_static_option('hero_feature_text_3');
        $hero_feature_icon_3 = get_static_option('hero_feature_icon_3');
        $hero_feature_url_3 = get_static_option('hero_feature_url_3');

        if ($hero_image != $request->hero_image && !empty($request->hero_image)) {
            $hero_image = $request->hero_image->store('hero', 'public');
            set_static_option('hero_image', $hero_image);
        }

        if ($hero_title != $request->hero_title) {
            set_static_option('hero_title', $request->hero_title);
        }

        if ($hero_description != $request->hero_description) {
            set_static_option('hero_description', $request->hero_description);
        }

        if ($logo != $request->logo && !empty($request->logo)) {
            $logo = $request->logo->store('logo', 'public');
            set_static_option('logo', $logo);
        }

        if ($hero_feature_text_1 != $request->hero_feature_text_1) {
            set_static_option('hero_feature_text_1', $request->hero_feature_text_1);
        }

        if ($hero_feature_icon_1 != $request->hero_feature_icon_1 && !empty($request->hero_feature_icon_1)) {
            $hero_feature_icon_1 = $request->hero_feature_icon_1->store('hero', 'public');
            set_static_option('hero_feature_icon_1', $hero_feature_icon_1);
        }

        if ($hero_feature_url_1 != $request->hero_feature_url_1) {
            set_static_option('hero_feature_url_1', $request->hero_feature_url_1);
        }

        if ($hero_feature_text_2 != $request->hero_feature_text_2) {
            set_static_option('hero_feature_text_2', $request->hero_feature_text_2);
        }

        if ($hero_feature_icon_2 != $request->hero_feature_icon_2 && !empty($request->hero_feature_icon_2)) {
            $hero_feature_icon_2 = $request->hero_feature_icon_2->store('hero', 'public');
            set_static_option('hero_feature_icon_2', $hero_feature_icon_2);
        }

        if ($hero_feature_url_2 != $request->hero_feature_url_2) {
            set_static_option('hero_feature_url_2', $request->hero_feature_url_2);
        }

        if ($hero_feature_text_3 != $request->hero_feature_text_3) {
            set_static_option('hero_feature_text_3', $request->hero_feature_text_3);
        }

        if ($hero_feature_icon_3 != $request->hero_feature_icon_3 && !empty($request->hero_feature_icon_3)) {
            $hero_feature_icon_3 = $request->hero_feature_icon_3->store('hero', 'public');
            set_static_option('hero_feature_icon_3', $hero_feature_icon_3);
        }

        if ($hero_feature_url_3 != $request->hero_feature_url_3) {
            set_static_option('hero_feature_url_3', $request->hero_feature_url_3);
        }

        return redirect()->route('admin.homepage.index');
    }
}
