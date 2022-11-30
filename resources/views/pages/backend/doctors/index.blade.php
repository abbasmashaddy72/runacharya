<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('doctors.index') !!}</x-slot>

    <x-backend.content>

        <x-slot name="title">Doctors List</x-slot>
        <x-slot name="top_right_button">
            <button onclick="Livewire.emit('openModal', 'backend.modals.doctors-modal')"
                class="mr-2 shadow-md btn btn-primary">{{ __('Add') }}</button>
        </x-slot>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Doctors') }}
            </h2>
        </x-slot>

        <div class="py-12">
            @livewire('backend.tables.doctors-table')
        </div>
    </x-backend.content>
</x-app-layout>
