<x-backend.modal form-action="save">
    <x-slot name="title">
        @if ($service_department_id)
            Update
        @else
            Add
        @endif
        {{ __(' Services Department') }}
    </x-slot>

    <x-slot name="content">
        <div class="grid">
            <x-label>Title
                <x-input wire:model='title' name="title" label="Title" type="text" />
            </x-label>
            {{-- <x-toggle wire:model="status" label="Status" /> --}}
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal>
