<x-front-layout>
    <!-- FEATURES START -->
    <section class="relative py-16 mt-3 bg-gray-50 dark:bg-slate-800 md:py-24">
        <h4
            class="mb-6 text-2xl font-medium leading-normal text-center text-black md:text-3xl md:leading-normal lg:leading-normal dark:text-white">
            ABOUT US
        </h4>
        <div class="container mt-8 md:mt-8">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="frontend\assets\wallpaper\neopolis.02.jpg" class="mx-auto" alt="" />
                        <div class="absolute left-0 right-0 text-center bottom-2/4 translate-y-2/4">
                            <a href="https://youtu.be/fKSBVIKbcAg" data-type="youtube" data-id="fKSBVIKbcAg"
                                class="inline-flex items-center justify-center w-20 h-20 text-indigo-600 bg-white rounded-full shadow-lg lightbox dark:shadow-gray-700 dark:bg-slate-900">
                                <i class="inline-flex items-center justify-center text-2xl mdi mdi-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="md:col-span-7">
                    <div class="lg:ml-4">
                        <p class="max-w-xl text-slate-400">
                            Neopolis Clinics is located in Film Nagar, Jubilee Hills Hyderabad
                            <br>
                            Road Number 82 Navanirman Nagar Colony, Jubilee Hills, Hyderabad, India, Telangana
                            <br>
                            We think that everyone should have easy access to excellent
                            healthcare. Our aim is to make the procedure as simple as
                            possible for our patients and to offer treatment no matter
                            where they are — in person or at their convenience.
                            Hospital information systems provide a common source of information about a patient's health
                            history, and doctors schedule timing. The system has to keep data in a secure place and
                            controls who can reach the data in certain circumstances. These systems enhance the ability
                            of health care professionals to coordinate care by providing a patient's health information
                            and visit history at the place and time that it is needed.
                        </p>
                        <a href="{{ route('book_appointment') }}"
                            class="mt-3 text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">
                            Book Appointment
                            <i class="align-middle mdi mdi-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->
</x-front-layout>
