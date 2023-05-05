<x-front-layout>
    <section class="relative py-16 mt-3 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mt-4 mb-6 text-2xl font-medium leading-normal md:text-3xl md:leading-normal dark:text-white">
                    Gallery
                </h3>
            </div>
            <!--end grid-->
            <div class="flex flex-wrap">
                <!-- First Repeater -->
                @foreach ($directories as $path)
                    <section id={{ strtolower(str_replace(' ', '_', pathinfo($path)['filename'])) }}>
                        <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-left mb-16">
                            {{ preg_replace('/[0-9]+/', '', pathinfo($path)['filename']) }}</h1>
                        <div class="flex flex-wrap -mx-4">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-2">
                                @foreach (\File::files('storage/' . $path) as $item)
                                    <div class="w-full flex flex-col">
                                        <div class="group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                                            data-wow-delay=".1s">
                                            <div class="rounded overflow-hidden">
                                                <a href="{{ asset(pathinfo($item)['dirname'] . '/' . pathinfo($item)['basename']) }}"
                                                    data-lightbox="{{ strtolower(str_replace(' ', '_', pathinfo($path)['filename'])) }}">
                                                    <img loading="lazy" src="https://via.placeholder.com/310x224"
                                                        data-src="{{ asset(pathinfo($item)['dirname'] . '/' . pathinfo($item)['basename']) }}"
                                                        alt="{{ preg_replace('/[^A-Za-z0-9\-]/', ' ', pathinfo($item)['filename']) }}"
                                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover lazyload" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    @push('scripts')
        <script>
            if ("loading" in HTMLImageElement.prototype) {
                var images = document.querySelectorAll('img[loading="lazy"]');
                var sources = document.querySelectorAll("source[data-srcset]");
                sources.forEach(function(source) {
                    source.srcset = source.dataset.srcset;
                });
                images.forEach(function(img) {
                    img.src = img.dataset.src;
                });
            } else {
                var script = document.createElement("script");
                script.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js";
                document.body.appendChild(script);
            }
        </script>
    @endpush
</x-front-layout>
