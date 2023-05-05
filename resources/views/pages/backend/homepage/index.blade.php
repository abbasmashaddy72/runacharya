<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('homepage.index') !!}</x-slot>
    <x-backend.content>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Home Page') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <x-form action="{{ route('admin.homepage.update') }}" has-files>
                <div class="flex justify-around">
                    <x-file-upload name="hero_image" label="Hero Image">
                        <div>
                            @if ($hero_image)
                                <span class="block w-20 h-20">
                                    <img class="w-full rounded-full" src="{{ asset('storage/' . $hero_image) }}" />
                                </span>
                            @endif
                        </div>
                    </x-file-upload>

                    <x-label>Hero Title
                        <x-input name="hero_title" value="{{ $hero_title }}" type="text" />
                    </x-label>

                    <x-label>Hero Description
                        <x-textarea name="hero_description" value="{{ $hero_description }}" />
                    </x-label>

                    <x-file-upload name="logo" label="Logo">
                        <div>
                            @if ($logo)
                                <span class="block w-20 h-20">
                                    <img class="w-full rounded-full" src="{{ asset('storage/' . $logo) }}" />
                                </span>
                            @endif
                        </div>
                    </x-file-upload>
                </div>

                <p class="text-lg font-semibold leading-tight text-gray-800">Hero Feature 1</p>

                <div class="grid-cols-3 gap-2 sm:grid">
                    <x-file-upload name="hero_feature_icon_1" label="Hero Feature Icon 1">
                        <div>
                            @if ($hero_feature_icon_1)
                                <span class="block w-20 h-20">
                                    <img class="w-full rounded-full"
                                        src="{{ asset('storage/' . $hero_feature_icon_1) }}" />
                                </span>
                            @endif
                        </div>
                    </x-file-upload>

                    <x-label>Hero Feature Text 1
                        <x-input name="hero_feature_text_1" value="{{ $hero_feature_text_1 }}" type="text" />
                    </x-label>

                    <x-label>Hero Feature Url 1
                        <x-input name="hero_feature_url_1" value="{{ $hero_feature_url_1 }}" type="text" />
                    </x-label>
                </div>

                <p class="text-lg font-semibold leading-tight text-gray-800">Hero Feature 2</p>

                <div class="grid-cols-3 gap-2 sm:grid">
                    <x-file-upload name="hero_feature_icon_2" label="Hero Feature Icon 2">
                        <div>
                            @if ($hero_feature_icon_2)
                                <span class="block w-20 h-20">
                                    <img class="w-full rounded-full"
                                        src="{{ asset('storage/' . $hero_feature_icon_2) }}" />
                                </span>
                            @endif
                        </div>
                    </x-file-upload>

                    <x-label>Hero Feature Text 2
                        <x-input name="hero_feature_text_2" value="{{ $hero_feature_text_2 }}" type="text" />
                    </x-label>

                    <x-label>Hero Feature Url 2
                        <x-input name="hero_feature_url_2" value="{{ $hero_feature_url_2 }}" type="text" />
                    </x-label>
                </div>

                <p class="text-lg font-semibold leading-tight text-gray-800">Hero Feature 3</p>

                <div class="grid-cols-3 gap-2 sm:grid">
                    <x-file-upload name="hero_feature_icon_3" label="Hero Feature Icon 3">
                        <div>
                            @if ($hero_feature_icon_3)
                                <span class="block w-20 h-20">
                                    <img class="w-full rounded-full"
                                        src="{{ asset('storage/' . $hero_feature_icon_3) }}" />
                                </span>
                            @endif
                        </div>
                    </x-file-upload>

                    <x-label>Hero Feature Text 3
                        <x-input name="hero_feature_text_3" value="{{ $hero_feature_text_3 }}" type="text" />
                    </x-label>

                    <x-label>Hero Feature Url 3
                        <x-input name="hero_feature_url_3" value="{{ $hero_feature_url_3 }}" type="text" />
                    </x-label>
                </div>

                <button type="submit" class="mr-2 shadow-md btn btn-primary">{{ __('Update') }}</button>
            </x-form>
        </div>
    </x-backend.content>

    <x-backend.content>

        <x-slot name="title">Sliders</x-slot>
        <x-slot name="top_right_button">
            <button onclick="Livewire.emit('openModal', 'backend.modals.sliders-modal')"
                class="mr-2 shadow-md btn btn-primary">{{ __('Add') }}</button>
        </x-slot>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Sliders') }}
            </h2>
        </x-slot>

        <div class="py-12">
            @livewire('backend.tables.sliders-table')
        </div>
    </x-backend.content>
</x-app-layout>
