<x-front-layout>
    <!-- Start -->
    <section class="relative py-16 mt-6 md:py-24">
        <div class="container">

            @foreach ($services as $item => $key)
                <div class="grid grid-cols-1 pb-8 text-center mt-4" id="{{ '#' . str_replace(' ', '_', $item) }}">
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
        <!--end grid-->
    </section>
    <!--end section-->
    <!-- End -->
</x-front-layout>
