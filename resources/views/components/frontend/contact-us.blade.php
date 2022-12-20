<section class="relative py-16 md:py-24">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            <div class="px-6 mt-6 text-center">
                <div
                    class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-700">
                    <i class="uil uil-phone"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="text-xl font-medium title h5">Phone</h5>
                    @php
                        $contact_no = preg_replace('~[^0-9]~', '', get_static_option('contact_no'));
                        preg_match('~([0-9]{3})([0-9]{3})([0-9]{4})~', $contact_no, $matches);
                    @endphp
                    <div class="mt-5">
                        <a href="{{ 'tel:' . $contact_no }}"
                            class="text-indigo-600 duration-500 ease-in-out btn btn-link hover:text-indigo-600 after:bg-indigo-600">{{ $matches[1] . '-' . $matches[2] . '-' . $matches[3] }}</a>
                    </div>
                </div>
            </div>

            <div class="px-6 mt-6 text-center">
                <div
                    class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-700">
                    <i class="uil uil-envelope"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="text-xl font-medium title h5">Email</h5>

                    <div class="mt-5">
                        <a href="{{ 'mailto: ' . get_static_option('contact_no') }}"
                            class="text-indigo-600 duration-500 ease-in-out btn btn-link hover:text-indigo-600 after:bg-indigo-600">{{ get_static_option('email') }}</a>
                    </div>
                </div>
            </div>

            <div class="px-6 mt-6 text-center">
                <div
                    class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-700">
                    <i class="uil uil-location-point"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="text-xl font-medium title h5">Location</h5>

                    <div class="mt-5">
                        <a href="{{ '//' . get_static_option('location') }}" target="__blank" data-type="iframe"
                            class="text-indigo-600 duration-500 ease-in-out video-play-icon read-more lightbox btn btn-link hover:text-indigo-600 after:bg-indigo-600">View
                            on Google map</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <div class="container mt-16 md:mt-24">
        <div class="grid md:grid-cols-1 grid-cols-1 items-center gap-[30px]">
            @livewire('frontend.contact-form')
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Section-->

<div class="relative container-fluid">
    <div class="grid grid-cols-1">
        <div class="w-full leading-[0] border-0">
            <iframe src="{{ get_static_option('embed_map_link') }}" style="border:0" class="w-full h-[500px]"
                allowfullscreen></iframe>
        </div>
    </div>
    <!--end grid-->
</div>
