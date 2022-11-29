<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\ServiceDepartment;
use LivewireUI\Modal\ModalComponent;

class ServiceDepartmentsModal extends ModalComponent
{
    // Set Values
    public $service_department_id;
    //Model Values
    public $title;

    protected $rules = [
        'title' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        if (!empty($this->service_department_id)) {
            ServiceDepartment::where('id', $this->service_department_id)->update($validatedData);
        } else {
            ServiceDepartment::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function mount()
    {
        if (!empty($this->service_department_id)) {
            $data = ServiceDepartment::findOrFail($this->service_department_id);
            $this->title = $data->title;
        }
    }

    public function render()
    {
        return view('livewire.backend.modals.service-departments-modal');
    }
}
