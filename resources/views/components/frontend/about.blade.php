<h4
    class="mt-8 mb-6 text-2xl font-medium leading-normal text-center text-black md:text-3xl md:leading-normal lg:leading-normal dark:text-white">
    ABOUT US
</h4>
<div class="container mt-8 md:mt-8">
    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
        <div class="md:col-span-5">
            <div class="relative">
                <img src="{{ asset('storage/' . get_static_option('about_image')) }}" class="mx-auto" alt="" />
                <div class="absolute left-0 right-0 text-center bottom-2/4 translate-y-2/4">
                    <a href="https://www.youtube.com/watch?v={{ get_static_option('about_video') }}" data-type="youtube"
                        data-id="fKSBVIKbcAg"
                        class="inline-flex items-center justify-center w-20 h-20 text-indigo-600 bg-white rounded-full shadow-lg dark:shadow-gray-700 dark:bg-slate-900">
                        <i class="inline-flex items-center justify-center text-2xl uil uil-play"></i>
                    </a>
                </div>
            </div>
            {{-- <!-- Mobile mockup -->
            <div class="flex items-center justify-center" x-data="{ modalExpanded: false }" data-aos="fade-up" data-aos-delay="450">
                <div class="relative inline-flex items-center justify-center">
                    <!-- Image inside mockup size: 290x624px (or 580x1248px for >Retina devices) -->
                    <img src="{{ asset('storage/' . get_static_option('about_image')) }}" width="650" alt=""
                        class="relative h-auto max-w-full mx-auto pointer-events-none rounded-lg" aria-hidden="true" />
                    <!-- Play button -->
                    <a class="absolute transition duration-150 ease-in-out cursor-pointer hover:opacity-75"
                        @click.prevent="modalExpanded = true" aria-controls="modal">
                        <i class="inline-flex items-center justify-center text-2xl uil uil-play"></i>

                    </a>
                </div>

                <!-- Modal backdrop -->
                <div class="fixed inset-0 z-50 transition-opacity bg-black bg-opacity-75" x-show="modalExpanded"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true"
                    x-cloak></div>

                <!-- Modal dialog -->
                <div id="modal"
                    class="fixed inset-0 z-50 flex items-center justify-center px-4 overflow-hidden transform sm:px-6"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-show="modalExpanded"
                    x-transition:enter="transition ease-in-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-8"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in-out duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-8" x-cloak>
                    <div class="w-full max-w-6xl max-h-full overflow-auto bg-white"
                        @click.outside="modalExpanded = false" @keydown.escape.window="modalExpanded = false">
                        <div class="relative pb-[56.25%]">
                            <iframe class="absolute w-full h-full"
                                src="https://www.youtube.com/embed/{{ get_static_option('about_video') }}"
                                title="Video" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--end col-->
        <div class="md:col-span-7">
            <div class="lg:ml-4">
                <p class="max-w-xl text-slate-800 dark:text-slate-200 whitespace-pre-line text-justify">
                    {{ get_static_option('description') }}
                </p>
                <a href="{{ route('book_appointment') }}"
                    class="mt-3 text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">Book
                    Appointment<i class="align-middle mdi mdi-chevron-right"></i></a>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end grid-->
</div>
