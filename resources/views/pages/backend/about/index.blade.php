<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('about.index') !!}</x-slot>
    <x-backend.content>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('About Us') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <x-form action="{{ route('admin.about.update') }}" has-files>
                <x-file-upload name="image" label="Image">
                    <div>
                        @if ($image)
                            <span class="block w-20 h-20">
                                <img class="w-full rounded-full" src="{{ url('storage/' . $image) }}" />
                            </span>
                        @endif
                    </div>
                </x-file-upload>

                <x-label>Video Url
                    <x-input name="video" value="{{ $video }}" type="text" />
                </x-label>

                <x-label>Description
                    <x-textarea name="description" value="{{ $description }}" />
                </x-label>

                <x-label>Short Description
                    <x-textarea name="short_description" value="{{ $short_description }}" />
                </x-label>

                <button type="submit" class="mr-2 shadow-md btn btn-primary">{{ __('Update') }}</button>
            </x-form>
        </div>
    </x-backend.content>
</x-app-layout>
