<x-front-layout>
    <section class="relative py-16 mt-3 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mt-4 mb-6 text-2xl font-medium leading-normal md:text-3xl md:leading-normal dark:text-white">
                    Gallery
                </h3>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
                <div class="relative overflow-hidden rounded-md shadow blog dark:shadow-gray-700">
                    <img src="{{ asset('frontend\assets\gallery\diverticulitis.jpeg') }}" alt="" />

                    <div class="p-6 content">
                        <a href="blog-detail.html"
                            class="text-lg font-medium duration-500 ease-in-out title h5 hover:text-indigo-600">DIVERTICULITIS</a>
                        <p class="mt-3 text-slate-400">
                            Diverticulosis occurs when small, bulging pouches (diverticula) develop in your digestive
                            tract.
                        </p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-md shadow blog dark:shadow-gray-700">
                    <img src="{{ asset('frontend\assets\gallery\hepatitis.jpeg') }}" alt="" />

                    <div class="p-6 content">
                        <a href="blog-detail.html"
                            class="text-lg font-medium duration-500 ease-in-out title h5 hover:text-indigo-600">HEPATITIS</a>
                        <p class="mt-3 text-slate-400">
                            Hepatitis is inflammation of the liver. Inflammation is swelling that happens when tissues
                            of
                            the body are injured or infected.
                        </p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-md shadow blog dark:shadow-gray-700">
                    <img src="{{ asset('frontend\assets\gallery\gastroesophageal.jpg') }}" alt="" />

                    <div class="p-6 content">
                        <a href="blog-detail.html"
                            class="text-lg font-medium duration-500 ease-in-out title h5 hover:text-indigo-600">GASTROESOPHAGEAL</a>
                        <p class="mt-3 text-slate-400">
                            Gastroesophageal reflux disease (GERD) occurs when stomach acid repeatedly flows back into
                            the
                            tube connecting your mouth and stomach (esophagus).
                        </p>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
</x-front-layout>
