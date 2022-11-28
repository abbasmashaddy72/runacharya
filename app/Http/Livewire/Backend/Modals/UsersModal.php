<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class UsersModal extends ModalComponent
{
    // Set Values
    public $user_id;
    //Model Values
    public $name, $email, $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        if (!empty($this->user_id)) {
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::where('id', $this->user_id)->update($validatedData);
        } else {
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function mount()
    {
        if (!empty($this->user_id)) {
            $data = User::findOrFail($this->user_id);
            $this->name = $data->name;
            $this->email = $data->email;
            $this->password = $data->password;
        }
    }

    public function render()
    {
        return view('livewire.backend.modals.users-modal');
    }
}
