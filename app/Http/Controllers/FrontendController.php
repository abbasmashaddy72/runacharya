<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('logo', get_static_option('logo'));
        view()->share('fb_url', get_static_option('fb_url'));
        view()->share('twitter_url', get_static_option('twitter_url'));
        view()->share('instagram_url', get_static_option('instagram_url'));
        view()->share('short_description', get_static_option('short_description'));
    }

    public function index()
    {
        $hero_image = get_static_option('hero_image');

        $feature_1['hero_feature_text_1'] = get_static_option('hero_feature_text_1');
        $feature_1['hero_feature_icon_1'] = get_static_option('hero_feature_icon_1');
        $feature_1['hero_feature_url_1'] = get_static_option('hero_feature_url_1');

        $feature_2['hero_feature_text_2'] = get_static_option('hero_feature_text_2');
        $feature_2['hero_feature_icon_2'] = get_static_option('hero_feature_icon_2');
        $feature_2['hero_feature_url_2'] = get_static_option('hero_feature_url_2');

        $feature_3['hero_feature_text_3'] = get_static_option('hero_feature_text_3');
        $feature_3['hero_feature_icon_3'] = get_static_option('hero_feature_icon_3');
        $feature_3['hero_feature_url_3'] = get_static_option('hero_feature_url_3');

        $feature = ['feature_1' => $feature_1, 'feature_2' => $feature_2, 'feature_3' => $feature_3];

        $services = Service::get()->groupBy('department.title');
        $doctors = Doctor::get();
        $testimonials = Testimonial::with('doctor')->get()->take(10);

        return view('pages.frontend.index', compact([
            'hero_image',
            'feature',
            'services',
            'doctors',
            'testimonials'
        ]));
    }

    public function about_us()
    {
        view()->share('title', 'About Us');

        return view('pages.frontend.about_us');
    }

    public function services()
    {
        view()->share('title', 'Services');
        $services = Service::get()->groupBy('department.title');

        return view('pages.frontend.services', compact('services'));
    }

    public function doctors()
    {
        view()->share('title', 'Doctors');
        $doctors = Doctor::get();

        return view('pages.frontend.doctors', compact('doctors'));
    }

    public function gallery()
    {
        view()->share('title', 'Gallery');
        $dir = Storage::disk('public')->directories('files');

        for ($i = 0; $i < count($dir); $i++) {
            $directories[$i] = Storage::disk('public')->directories($dir[$i]);
        }

        $directories = array_filter($directories);
        $directories = Arr::flatten($directories);
        sort($directories);

        return view('pages.frontend.gallery', compact('directories'));
    }

    public function contact_us()
    {
        view()->share('title', 'Contact Us');

        return view('pages.frontend.contact_us');
    }

    public function book_appointment()
    {
        view()->share('title', 'Book Appointment');

        return view('pages.frontend.book_appointment');
    }
}
