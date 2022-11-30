<x-app-layout>
    <x-slot name="breadcrumb">{!! Breadcrumbs::render('contacted-form.index') !!}</x-slot>

    <x-backend.content>

        <x-slot name="title">Contacted Form Data</x-slot>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Contacted Form Data') }}
            </h2>
        </x-slot>

        <div class="py-12">
            @livewire('backend.tables.contacted-form-table')
        </div>
    </x-backend.content>
</x-app-layout>
