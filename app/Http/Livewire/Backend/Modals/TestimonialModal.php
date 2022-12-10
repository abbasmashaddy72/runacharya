<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Testimonial;
use LivewireUI\Modal\ModalComponent;

class TestimonialModal extends ModalComponent
{
    // Set Values
    public $testimonial_id;
    //Model Values
    public $doctor_id, $name, $rating, $message;

    protected $rules = [
        'doctor_id' => 'required',
        'name' => 'required',
        'rating' => 'required',
        'message' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        if (!empty($this->testimonial_id)) {
            Testimonial::where('id', $this->testimonial_id)->update($validatedData);
        } else {
            Testimonial::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function mount()
    {
        if (!empty($this->testimonial_id)) {
            $data = Testimonial::findOrFail($this->testimonial_id);
            $this->doctor_id = $data->doctor_id;
            $this->name = $data->name;
            $this->rating = $data->rating;
            $this->message = $data->message;
        }
    }

    public function render()
    {
        return view('livewire.backend.modals.testimonial-modal');
    }
}
