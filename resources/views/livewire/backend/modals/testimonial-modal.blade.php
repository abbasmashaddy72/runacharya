<x-backend.modal form-action="save">
    <x-slot name="title">
        @if ($doctor_id)
            Update
        @else
            Add
        @endif
        {{ __(' Testimonial') }}
    </x-slot>

    <x-slot name="content">
        <div class="grid">
            <x-label>Select Department
                <x-select wire:model='doctor_id' name="doctor_id" label="Select Doctor" :options="getKeyValues('Doctor', 'name', 'id')" />
            </x-label>

            <x-label>Name
                <x-input wire:model='name' name="name" label="Name" type="text" />
            </x-label>

            <x-label>Rating
                <x-input wire:model='rating' name="name" label="Rating" type="number" min="1" max="5" />
            </x-label>

            <x-label>Message
                <x-textarea wire:model="message" name="message" label="Message" rows="5" />
            </x-label>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal>
