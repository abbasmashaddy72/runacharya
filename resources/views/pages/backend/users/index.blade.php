<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('users.index') !!}</x-slot>
    <x-backend.content>

        <x-slot name="top_right_button">
            <button onclick="Livewire.emit('openModal', 'backend.modals.users-modal')"
                class="mr-2 shadow-md btn btn-primary">{{ __('Add') }}</button>
        </x-slot>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Users') }}
            </h2>
        </x-slot>

        <div class="py-12">
            @livewire('backend.tables.users-table')
        </div>
    </x-backend.content>
</x-app-layout>
