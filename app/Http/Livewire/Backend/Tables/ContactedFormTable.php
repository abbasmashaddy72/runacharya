<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\ContactForm;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ContactedFormTable extends LivewireDatatable
{
    public $model = ContactForm::class;
    public $exportable = true;

    public function builder()
    {
        return ContactForm::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('name')
                ->searchable()
                ->filterable(),

            Column::name('phone_no')
                ->searchable()
                ->filterable(),

            Column::name('question')
                ->searchable()
                ->truncate(50)
                ->filterable(),

            Column::name('comment')
                ->searchable()
                ->truncate(100)
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),
        ];
    }
}
