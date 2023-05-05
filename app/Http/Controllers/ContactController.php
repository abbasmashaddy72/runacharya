<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        view()->share('title', 'Contact Us');
        $contact_no = get_static_option('contact_no');
        $email = get_static_option('email');
        $location = get_static_option('location');
        $fb_url = get_static_option('fb_url');
        $twitter_url = get_static_option('twitter_url');
        $instagram_url = get_static_option('instagram_url');
        $embed_map_link_1 = get_static_option('embed_map_link_1');
        $embed_map_link_2 = get_static_option('embed_map_link_2');

        return view('pages.backend.contact.index', compact([
            'contact_no',
            'email',
            'location',
            'fb_url',
            'twitter_url',
            'instagram_url',
            'embed_map_link_1',
            'embed_map_link_2'
        ]));
    }

    public function update(Request $request)
    {
        $contact_no = get_static_option('contact_no');
        $email = get_static_option('email');
        $location = get_static_option('location');
        $fb_url = get_static_option('fb_url');
        $twitter_url = get_static_option('twitter_url');
        $instagram_url = get_static_option('instagram_url');
        $embed_map_link_1 = get_static_option('embed_map_link_1');
        $embed_map_link_2 = get_static_option('embed_map_link_2');

        if ($contact_no != $request->contact_no) {
            set_static_option('contact_no', $request->contact_no);
        }
        if ($email != $request->email) {
            set_static_option('email', $request->email);
        }
        if ($location != $request->location) {
            set_static_option('location', $request->location);
        }
        if ($fb_url != $request->fb_url) {
            set_static_option('fb_url', $request->fb_url);
        }
        if ($twitter_url != $request->twitter_url) {
            set_static_option('twitter_url', $request->twitter_url);
        }
        if ($instagram_url != $request->instagram_url) {
            set_static_option('instagram_url', $request->instagram_url);
        }
        if ($embed_map_link_1 != $request->embed_map_link_1) {
            set_static_option('embed_map_link_1', $request->embed_map_link_1);
        }
        if ($embed_map_link_2 != $request->embed_map_link_2) {
            set_static_option('embed_map_link_2', $request->embed_map_link_2);
        }


        return redirect()->route('admin.contact.index');
    }
}
