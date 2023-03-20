<?php

namespace App\Http\Livewire\Backend\Modals;

use App\Models\Blog;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class BlogsModal extends ModalComponent
{
    use WithFileUploads;
    // Set Values
    public $blog_id, $isUploaded = false;
    //Model Values
    public $title, $tags, $excerpt, $description, $image;

    protected $rules = [
        'title' => 'required',
        'tags' => 'required',
        'excerpt' => 'required',
        'description' => 'required',
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
            $validatedData['image'] = $this->image->store('blogs', 'public');
        }

        if (!empty($this->blog_id)) {
            Blog::where('id', $this->blog_id)->update($validatedData);
        } else {
            Blog::create($validatedData);
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function mount()
    {
        if (!empty($this->blog_id)) {
            $data = Blog::findOrFail($this->blog_id);
            $this->title = $data->title;
            $this->tags = $data->tags;
            $this->excerpt = $data->excerpt;
            $this->description = $data->description;
            $this->image = $data->image;
        }
    }

    public function render()
    {
        return view('livewire.backend.modals.blogs-modal');
    }
}
