<?php

namespace App\Http\Livewire\Frontend;

use App\Models\BookAppointmentForm;
use Livewire\Component;

class BookForm extends Component
{
    //Custom Values
    public $submitted = false;
    //Model Values
    public $name, $phone_no, $area, $appointment_date, $appointment_time, $comment;

    protected $rules = [
        'name' => 'required',
        'phone_no' => 'required',
        'area' => 'required',
        'appointment_date' => 'required',
        'appointment_time' => 'required',
        'comment' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        BookAppointmentForm::create($validatedData);
        $this->submitted = true;
        $this->reset();
    }

    public function render()
    {
        return view('livewire.frontend.book-form');
    }
}
