<x-backend.modal form-action="save">
    <x-slot name="title">
        Add Patient
    </x-slot>

    <x-slot name="content">
        <div class="grid-cols-3 gap-2 sm:grid">
            <x-label>Name
                <x-input wire:model='name' name="name" label="Name" type="text" />
            </x-label>

            <x-label>Email
                <x-input wire:model='email' name="email" label="Email" type="email" />
            </x-label>

            <x-label>Password
                <x-input wire:model='password' name="password" label="Password" type="password" />
            </x-label>

            {{-- <x-toggle wire:model="status" label="Status" /> --}}
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal>
