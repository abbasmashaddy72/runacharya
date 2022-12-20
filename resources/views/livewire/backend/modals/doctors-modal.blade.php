<x-backend.modal form-action="save">
    <x-slot name="title">
        @if ($doctor_id)
            Update
        @else
            Add
        @endif
        {{ __(' Doctor') }}
    </x-slot>

    <x-slot name="content">
        <div class="grid-cols-3 gap-2 sm:grid">
            <x-label>Name
                <x-input wire:model='name' name="name" label="Name" type="text" />
            </x-label>

            <x-label>Degree
                <x-input wire:model='degree' name="degree" label="Degree" type="text" />
            </x-label>

            <x-label>Specialty
                <x-input wire:model='specialty' name="specialty" label="Specialty" type="text" />
            </x-label>

            <x-label>Reg. No.
                <x-input wire:model='reg_no' name="reg_no" label="Reg. No." type="text" />
            </x-label>

            <x-file-upload wire:model='image' name="image" label="Image" :display-upload-progress="true">
                <div>
                    @if ($image)
                        <span class="block w-20 h-20">
                            <img class="w-full rounded-full"
                                src="{{ $isUploaded ? $image->temporaryUrl() : asset('storage/' . $image) }}" />
                        </span>
                    @endif
                </div>
            </x-file-upload>
            {{-- <x-toggle wire:model="status" label="Status" /> --}}
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal>
