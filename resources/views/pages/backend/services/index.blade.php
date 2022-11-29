<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('services.index') !!}</x-slot>

    <x-backend.content>

        <x-slot name="title">Service Department</x-slot>
        <x-slot name="top_right_button">
            <button onclick="Livewire.emit('openModal', 'backend.modals.service-departments-modal')"
                class="mr-2 shadow-md btn btn-primary">{{ __('Add') }}</button>
        </x-slot>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Service-departments') }}
            </h2>
        </x-slot>

        <div class="py-12">
            @livewire('backend.tables.service-departments-table')
        </div>
    </x-backend.content>

    <x-backend.content>

        <x-slot name="title">Service List</x-slot>
        <x-slot name="top_right_button">
            <button onclick="Livewire.emit('openModal', 'backend.modals.services-modal')"
                class="mr-2 shadow-md btn btn-primary">{{ __('Add') }}</button>
        </x-slot>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Services') }}
            </h2>
        </x-slot>

        <div class="py-12">
            @livewire('backend.tables.services-table')
        </div>
    </x-backend.content>
</x-app-layout>
