<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Doctor;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class DoctorsModal extends ModalComponent
{
    use WithFileUploads;
    // Set Values
    public $doctor_id, $isUploaded = false;
    //Model Values
    public $name, $degree, $specialty, $reg_no, $image;

    protected $rules = [
        'name' => 'required',
        'degree' => 'required',
        'specialty' => 'required',
        'reg_no' => 'required',
        'image' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function save()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('doctors', 'public');
        }

        if (!empty($this->doctor_id)) {
            Doctor::where('id', $this->doctor_id)->update($validatedData);
        } else {
            Doctor::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function mount()
    {
        if (!empty($this->doctor_id)) {
            $data = Doctor::findOrFail($this->doctor_id);
            $this->name = $data->name;
            $this->degree = $data->degree;
            $this->specialty = $data->specialty;
            $this->reg_no = $data->reg_no;
            $this->image = $data->image;
        }
    }

    public function render()
    {
        return view('livewire.backend.modals.doctors-modal');
    }
}
