<x-front-layout>
    <!-- Start -->
    <section class="py-16 mt-2 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mt-4 mb-6 text-2xl font-medium leading-normal md:text-3xl md:leading-normal dark:text-white">
                    Doctors
                </h3>
            </div>
            <!--end grid-->
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                @foreach ($doctors as $item)
                    <div class="lg:col-span-4 md:col-span-6">
                        <div
                            class="flex items-center p-3 text-white transition-all duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900 bg-gradient-to-r to-blue-600 from-emerald-400">
                            <div
                                class="items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img height="height-[45px]" src="{{ asset('storage/' . $item->image) }}">
                            </div>
                            <a href="{{ route('doctors') }}">
                                <div class="flex-1 text-gray-900">
                                    <h4 class="mb-0 text-lg font-medium">{{ $item->name }}</h4>
                                    <h3>{{ $item->degree }}</h3>
                                    <h3>{{ $item->specialty }}</h3>
                                    <h3>{{ 'Reg No. ' . $item->reg_no }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--end contanier-->
    </section>
    <!--end section-->
</x-front-layout>
