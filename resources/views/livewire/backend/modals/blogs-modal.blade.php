<x-backend.modal form-action="save">
    <x-slot name="title">
        @if ($blog_id)
            Update
        @else
            Add
        @endif
        {{ __(' Blog') }}
    </x-slot>

    <x-slot name="content">
        <div class="grid-cols-3 gap-2 sm:grid">
            <x-label>Title
                <x-input wire:model='title' name="title" label="Title" type="text" />
            </x-label>

            <x-label>Tags
                <x-input wire:model='tags' name="tags" label="Tags" type="text" />
            </x-label>

            <x-label>Excerpt
                <x-textarea wire:model='excerpt' name="excerpt" label="Excerpt" type="text" />
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
        </div>
        <div>
            <x-label>Description
                <x-backend.ckeditor id="bodyen" lang="EN" name="description" label="Description"
                    wire:model='description' />
            </x-label>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal>
