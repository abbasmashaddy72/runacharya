@push('styles')
    @include('components.backend.ckeditor_style')
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('oembed[url]').forEach(element => {
                // get just the code for this youtube video from the url
                let vCode = element.attributes.url.value.split('?v=')[1];
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML = `
    <div class="aspect-w-16 aspect-h-9">
        <iframe src="https://www.youtube.com/embed/${vCode}?rel=0" width="800" height="450" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>`;
            });
        })
    </script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('p > a').forEach(element => {
                // get just the code for this youtube video from the url
                let href = element.attributes.href.value;
                let text = element.innerHTML;
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML =
                    `
                <p class="m-2 text-center"><a class="ml-6 text-white capitalize bg-blue-500 btn-sm hover:bg-blue-300" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
<x-front-layout>
    {{-- <section class="relative py-16 mt-3 bg-gray-50 dark:bg-slate-800 md:py-24">
        <!-- Blog Details -->
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 justify-center items-center -mx-4">
                    <div>
                        <div class="mb-4 group wow fadeInUp p-4" data-wow-delay=".1s">
                            <img src="{{ asset('storage/' . $data->icon) }}" alt="{{ $data->name }}"
                                class="w-40 h-40 object-cover border-gray-200 border-2 rounded-full shadow-testimonial mx-auto" />
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="mx-8 mb-8 text-xl leading-relaxed text-body-color wow fadeInUp whitespace-pre-line text-justify"
                            data-wow-delay=".1s">
                            {{ $data->name }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-8 px-36 ck-content">
            {!! preg_replace('#<script(.*?)>(.*?)</script>#is', '', $data->description) !!}
        </div>

        <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
            <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                Related Services
            </h2>
            <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
        </div>
        <!-- First Repeater -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 md:gap-4 mx-auto">
            @forelse ($related as $item)
                @include('components.frontend.service')
            @empty
                <div class="w-full px-4">
                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                </div>
            @endforelse
        </div>
    </div>
    </section> --}}

    <section class="relative md:mt-24 mt-16" id="portfolio">
        <div class="container" id="ivf">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $data->icon) }}" class="rounded-full" alt="{{ $data->name }}">
                        <div class="absolute top-0 left-0 -z-1">
                            <img src="assets/images/illustrator/dots.svg" alt="{{ $data->name }}">
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 md:col-span-6 mt-8 md:mt-0">
                    <div class="lg:ml-5">
                        <h6
                            class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-center">
                            {{ $data->name }}
                        </h6>
                        <p class="text-justify">
                            {!! preg_replace('#<script(.*?)>(.*?)</script>#is', '', $data->description) !!}
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-front-layout>
