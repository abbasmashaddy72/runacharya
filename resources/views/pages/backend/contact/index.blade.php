<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('contact.index') !!}</x-slot>
    <x-backend.content>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Contact Us') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <x-form action="{{ route('contact.update') }}">

                <div class="grid-cols-3 gap-2 sm:grid">
                    <x-label>Contact No
                        <x-input name="contact_no" value="{{ $contact_no }}" type="text" />
                    </x-label>

                    <x-label>Email
                        <x-input name="email" value="{{ $email }}" type="email" />
                    </x-label>

                    <x-label>Location
                        <x-input name="location" value="{{ $location }}" type="text" />
                    </x-label>

                    <x-label>Fb Url
                        <x-input name="fb_url" value="{{ $fb_url }}" type="text" />
                    </x-label>

                    <x-label>Twitter Url
                        <x-input name="twitter_url" value="{{ $twitter_url }}" type="text" />
                    </x-label>

                    <x-label>Instagram Url
                        <x-input name="instagram_url" value="{{ $instagram_url }}" type="text" />
                    </x-label>

                    <x-label>Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)
                        <x-input name="embed_map_link" value="{{ $embed_map_link }}" type="text" />
                    </x-label>
                </div>

                <button type="submit" class="mr-2 shadow-md btn btn-primary">{{ __('Update') }}</button>
            </x-form>
        </div>
    </x-backend.content>
</x-app-layout>
