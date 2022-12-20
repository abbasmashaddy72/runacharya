<x-front-layout>
    <!-- Start Hero -->
    <section class="relative block h-screen swiper-slider-hero" id="home">
        <div class="flex items-center py-24 overflow-hidden swiper-slide md:py-24">
            <div class="slide-inner slide-bg-image md:px-2 px-2 flex items-center bg-center bg-no-repeat ;"
                data-background="{{ url('storage/' . $hero_image) }}">
                <div class="absolute inset-0"></div>
            </div>
        </div>
        <!-- end swiper-slide -->
    </section>
    <!-- Hero End -->

    <!-- FEATURES START -->
    <section class="relative py-16 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container">
            <div class="grid justify-center grid-cols-1">
                <div class="relative z-10 -mt-44">
                    <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 gap-[24px]">
                        @for ($i = 1; $i <= count($feature); $i++)
                            <div
                                class="p-6 text-center text-white transition-all duration-500 ease-in-out rounded-lg shadow bg-blue-600 group md:px-4 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                                <div
                                    class="flex items-center justify-center w-16 h-16 mx-auto text-2xl text-indigo-600 align-middle rounded-lg shadow-sm bg-indigo-600/5 dark:shadow-gray-700">
                                    <img
                                        src="{{ url('storage/' . $feature['feature_' . $i]['hero_feature_icon_' . $i]) }}">
                                </div>

                                <div class="content mt-7">
                                    <a href="{{ $feature['feature_' . $i]['hero_feature_url_' . $i] }}"
                                        class="text-lg font-medium title h5 hover:text-indigo-600">
                                        {{ $feature['feature_' . $i]['hero_feature_text_' . $i] }}
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>

        <x-frontend.about />
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section class="relative py-16 md:py-24">
        <div class="container">
            @foreach ($services as $item => $key)
                <div class="grid grid-cols-1 pb-8 text-center mt-4">
                    <h3
                        class="mb-6 text-2xl font-medium leading-normal text-black md:text-3xl md:leading-normal dark:text-white">
                        {{ $item }}
                    </h3>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    @foreach ($key as $key_item)
                        <div class="lg:col-span-4 md:col-span-6">
                            <div
                                class="flex items-center p-3 transition-all duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                                <div
                                    class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                    <img class="height-[45px]" src="{{ url('storage/' . $key_item->icon) }}">
                                </div>
                                <div class="flex-1">
                                    <h4 class="mb-0 text-lg font-medium">{{ $key_item->name }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <!--end contanier-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="py-16 mt-2 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3
                    class="mb-6 text-2xl font-medium leading-normal text-black md:text-3xl md:leading-normal dark:text-white">
                    DOCTORS
                </h3>
            </div>
            <!--end grid-->
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                @foreach ($doctors as $item)
                    <div class="lg:col-span-4 md:col-span-6">
                        <div
                            class="flex items-center p-3 text-white transition-all duration-500 ease-in-out bg-white rounded-md shadow home-doctors hover:scale-105 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                            <div
                                class="items-center justify-center h-[45px] min-w-[100px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img class="bg-red-900" src="{{ url('storage/' . $item->image) }}">
                            </div>
                            <a href="{{ route('doctors') }}">
                                <div class="flex-1 text-gray-600">
                                    <h4 class="mb-0 text-lg font-medium">{{ $item->name }}</h4>
                                    <p>{{ $item->degree }}</p>
                                    <p>{{ $item->specialty }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end contanier-->
    </section>
    <!--end section-->
    <!-- End -->
    <section class="py-16 mt-2 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container md:md:py-24 py-11">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    WHAT OUR PATIENTS SAYS
                </h3>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item">
                    @foreach ($testimonials as $item)
                        <div class="text-center tiny-slide">
                            <div class="customer-testi">
                                <div
                                    class="relative p-6 m-2 bg-white rounded shadow content dark:shadow-gray-700 dark:bg-slate-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="#4f46e5" d="m10 7l-2 4h3v6H5v-6l2-4h3m8 0l-2 4h3v6h-6v-6l2-4h3Z" />
                                    </svg>
                                    <p class="text-slate-400">" {{ $item->message }} "</p>
                                    @for ($i = 1; $i <= $item->rating; $i++)
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 inline text-amber-400 fill-current">
                                            <path
                                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                            </path>
                                        </svg>
                                    @endfor
                                    @for ($i = 1; $i <= 5 - $item->rating; $i++)
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 inline text-gray-400 fill-current dark:text-gray-100">
                                            <path
                                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>

                                <div class="mt-5 text-center">
                                    <h6 class="mt-2 font-semibold">{{ $item->name }}</h6>
                                    <span class="text-sm text-slate-400">{{ $item->doctor->specialty }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <x-frontend.contact-us />
</x-front-layout>
