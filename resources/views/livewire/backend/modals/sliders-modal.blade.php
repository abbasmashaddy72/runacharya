<x-backend.modal form-action="save">
    <x-slot name="title">
        {{ __('Add Slider Image') }}
    </x-slot>

    <x-slot name="content">
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
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal>
