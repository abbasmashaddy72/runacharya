<?php

namespace App\Http\Livewire\Frontend;

use App\Models\ContactForm as ModelsContactForm;
use Livewire\Component;

class ContactForm extends Component
{
    //Custom Values
    public $message, $submitted = false;
    //Model Values
    public $name, $phone_no, $question, $comment;

    protected $rules = [
        'name' => 'required',
        'phone_no' => 'required',
        'question' => 'required',
        'comment' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        ModelsContactForm::create($validatedData);
        $this->reset();
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.frontend.contact-form');
    }
}
