<x-front-layout>
    <!-- Start -->
    <section class="py-16 mt-2 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mt-4 mb-6 text-2xl font-medium leading-normal md:text-3xl md:leading-normal dark:text-white">
                    Blogs
                </h3>
            </div>
            <!--end grid-->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-4 mx-auto">
                {{-- <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]"> --}}
                @foreach ($data as $item)
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

            @if ($data->hasPages())
                <div class="pagination-wrapper">
                    {{ $data->links() }}
                </div>
            @endif
        </div>
        <!--end contanier-->
    </section>
    <!--end section-->
</x-front-layout>
