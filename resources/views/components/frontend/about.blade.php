<h4
    class="mt-8 mb-6 text-2xl font-medium leading-normal text-center text-black md:text-3xl md:leading-normal lg:leading-normal dark:text-white">
    ABOUT US
</h4>
<div class="container mt-8 md:mt-8">
    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
        <div class="md:col-span-5">
            <div class="relative">
                <img src="{{ url('storage/' . get_static_option('about_image')) }}" class="mx-auto" alt="" />
                <div class="absolute left-0 right-0 text-center bottom-2/4 translate-y-2/4">
                    <a href="{{ get_static_option('about_video') }}" data-type="youtube" data-id="fKSBVIKbcAg"
                        class="inline-flex items-center justify-center w-20 h-20 text-indigo-600 bg-white rounded-full shadow-lg lightbox dark:shadow-gray-700 dark:bg-slate-900">
                        <i class="inline-flex items-center justify-center text-2xl uil uil-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="md:col-span-7">
            <div class="lg:ml-4">
                <p class="max-w-xl text-slate-400">
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
