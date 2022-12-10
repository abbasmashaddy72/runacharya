<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        view()->share('dark_mode', session()->has('dark_mode') ? filter_var(session('dark_mode'), FILTER_VALIDATE_BOOLEAN) : false);
        view()->share('agent', new Agent());
        view()->share('side_menu', $this->sideMenu());
        $pageName = request()->route()->getName();
        $activeMenu = $this->activeMenu($pageName);
        view()->share('first_level_active_index', $activeMenu['first_level_active_index']);
        view()->share('second_level_active_index', $activeMenu['second_level_active_index']);
        view()->share('third_level_active_index', $activeMenu['third_level_active_index']);

        return view('layouts.app');
    }

    public function sideMenu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'admin.dashboard',
            ],
            'bookedAppointment-from' => [
                'icon' => 'calendar',
                'title' => 'Booked Appointment',
                'route_name' => 'admin.booked-appointment-form.index',
            ],
            'contacted-from' => [
                'icon' => 'phone-incoming',
                'title' => 'Contacted From Data',
                'route_name' => 'admin.contacted-form.index',
            ],
            'devider',
            'homepage' => [
                'icon' => 'home',
                'title' => 'Home Page',
                'route_name' => 'admin.homepage.index',
            ],
            'about' => [
                'icon' => 'shield',
                'title' => 'About Us',
                'route_name' => 'admin.about.index',
            ],
            'services' => [
                'icon' => 'settings',
                'title' => 'Services',
                'route_name' => 'admin.services.index',
            ],
            'doctor' => [
                'icon' => 'award',
                'title' => 'Doctors',
                'route_name' => 'admin.doctors.index',
            ],
            'testimonial' => [
                'icon' => 'chevrons-up',
                'title' => 'Testimonials',
                'route_name' => 'admin.testimonials.index',
            ],
            'gallery' => [
                'icon' => 'image',
                'title' => 'Gallery',
                'route_name' => 'admin.unisharp.lfm.show',
            ],
            'contact' => [
                'icon' => 'phone-call',
                'title' => 'Contact Us',
                'route_name' => 'admin.contact.index',
            ],
            'users' => [
                'icon' => 'user',
                'title' => 'Users',
                'route_name' => 'admin.users.index',
            ]
        ];
    }

    /**
     * Determine active menu & submenu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activeMenu($pageName)
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';

        foreach ($this->sideMenu() as $menuKey => $menu) {
            if ($menu !== 'devider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                $firstLevelActiveIndex = $menuKey;
            }

            if (isset($menu['sub_menu']) ?? $menu['sub_menu'] = []) {

                foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {

                    if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                        $firstLevelActiveIndex = $menuKey;
                        $secondLevelActiveIndex = $subMenuKey;
                    }

                    if (isset($subMenu['sub_menu'])) {

                        foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {

                            if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                $firstLevelActiveIndex = $menuKey;
                                $secondLevelActiveIndex = $subMenuKey;
                                $thirdLevelActiveIndex = $lastSubMenuKey;
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex
        ];
    }
}
