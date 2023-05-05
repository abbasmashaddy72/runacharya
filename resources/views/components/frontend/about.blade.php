<h4
    class="mt-8 mb-6 text-2xl font-medium leading-normal text-center text-black md:text-3xl md:leading-normal lg:leading-normal dark:text-white">
    ABOUT US
</h4>
<div class="max-w-7xl px-4 mx-auto sm:px-6">
    <div class="pt-8 pb-10 md:pt-8 md:pb-16">

        <!-- Hero content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 text-center gap-20">

            <!-- Content -->
            <div class="text-center mb-8">
                <h2 class="mb-4 font-extrabold h4 text-3xl font-red-hat-display" data-aos="fade-down">
                    {{ 'Welcome to ' }}{{ config('app.name', 'Laravel') }}</h2>
                <p class="text-justify whitespace-pre-line">
                    {{ get_static_option('description') }}
                </p>
            </div>

            <div class="relative inline-flex items-center justify-center">
                <!-- Image inside mockup size: 290x624px (or 580x1248px for >Retina devices) -->
                <img src="{{ asset('storage/' . get_static_option('about_image')) }}" width="650" alt=""
                    class="relative h-auto max-w-full mx-auto pointer-events-none rounded-lg" aria-hidden="true" />
            </div>

            <!-- Mobile mockup -->
            {{-- <div class="flex items-center justify-center" x-data="{ modalExpanded: false }" data-aos="fade-up" data-aos-delay="450">
                <div class="relative inline-flex items-center justify-center">
                    <!-- Image inside mockup size: 290x624px (or 580x1248px for >Retina devices) -->
                    <img src="{{ asset('storage/' . get_static_option('about_image')) }}" width="650" alt=""
                        class="relative h-auto max-w-full mx-auto pointer-events-none rounded-lg" aria-hidden="true" />
                    <!-- Play button -->
                    <a class="absolute transition duration-150 ease-in-out cursor-pointer hover:opacity-75"
                        @click.prevent="modalExpanded = true" aria-controls="modal">
                        <img src="{{ asset('svg/play-button.svg') }}" width="80" height="80" alt="Play" />
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

    </div>
</div>
