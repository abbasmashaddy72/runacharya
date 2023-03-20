<x-front-layout>
    <!-- Start Hero -->
    <section style="background-image: url({{ asset('storage/' . $hero_image) }})"
        class="relative table w-full py-36 lg:py-64 bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10">
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6 mt-3">
                    {{ get_static_option('hero_title') }}
                </h1>
                <p class="text-white/60 text-lg max-w-xl">{{ get_static_option('hero_description') }}</p>

                <div class="mt-8">
                    <a href="{{ route('book_appointment') }}"
                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Book
                        Appointment</a>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div
            class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- FEATURES START -->
    <section class="relative py-16 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container">
            <div class="grid justify-center grid-cols-1">
                <div class="relative -mt-40 lg:-mt-60">
                    <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 gap-[24px]">
                        @for ($i = 1; $i <= count($feature); $i++)
                            <div
                                class="p-6 text-center text-white transition-all duration-500 ease-in-out rounded-lg shadow group md:px-4 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900  bg-gradient-to-r to-blue-600 from-emerald-400">
                                <div
                                    class="flex items-center justify-center w-16 h-16 mx-auto text-2xl text-indigo-600 align-middle rounded-lg shadow-sm bg-indigo-600/5 dark:shadow-gray-700">
                                    <img
                                        src="{{ asset('storage/' . $feature['feature_' . $i]['hero_feature_icon_' . $i]) }}">
                                </div>

                                <div class="content">
                                    <a href="{{ $feature['feature_' . $i]['hero_feature_url_' . $i] }}"
                                        class="text-lg font-medium title h5 hover:text-gray-900">
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

                <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-8 gap-[30px]">
                    @foreach ($key as $key_item)
                        <div class="text-center md:px-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-3xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                                <img class="height-[45px]" src="{{ asset('storage/' . $key_item->icon) }}">
                            </div>

                            <div class="content mt-7">
                                <a href="{{ route('service_single', ['data' => $key_item->id]) }}"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">{{ $key_item->name }}</a>
                                <p class="text-slate-800 dark:text-slate-200 mt-3">{{ $key_item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    @foreach ($key as $key_item)
                        <div class="lg:col-span-4 md:col-span-6">
                            <div
                                class="flex items-center p-3 transition-all duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                                <div
                                    class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                    <img class="height-[45px]" src="{{ asset('storage/' . $key_item->icon) }}">
                                </div>
                                <div class="flex-1">
                                    <h4 class="mb-0 text-lg font-medium">{{ $key_item->name }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
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
                    Blogs
                </h3>
            </div>
            <!--end grid-->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-4 mx-auto">
                @foreach ($blogs as $item)
                    <div class="w-full px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('blog_single', ['data' => $item->id]) }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                                </a>
                            </div>
                            <div>
                                <div class="flex justify-end">
                                    <span
                                        class="bg-indigo-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                        {{ $item->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <h3>
                                    <a href="{{ route('blog_single', ['data' => $item->id]) }}"
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                @foreach ($blogs as $item)
                    <div class="lg:col-span-4 md:col-span-6">
                        <div
                            class="flex items-center p-3 text-white transition-all duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900 bg-gradient-to-r from-blue-400 to-emerald-400">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[50px] -rotate-50 text-indigo-600 text-center rounded-full mr-3">
                                <img src="{{ asset('storage/' . $item->image) }}">
                            </div>
                            <a href="{{ route('blogs') }}">
                                <div class="flex-1 text-gray-900">
                                    <h4 class="mb-0 text-lg font-medium">{{ $item->name }}</h4>
                                    <p>{{ $item->degree }}</p>
                                    <p>{{ $item->specialty }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <!--end contanier-->
        </div>
    </section>
    <!--end section-->
    <!-- End -->
    <section class="py-16 dark:bg-slate-800 md:py-24">
        <div class="container">
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
                                    <p class="text-slate-800 dark:text-slate-200">" {{ $item->message }} "</p>
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
