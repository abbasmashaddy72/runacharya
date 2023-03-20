<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\Testimonial;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class TestimonialTable extends LivewireDatatable
{
    public $model = Testimonial::class;
    public $exportable = true;

    public function builder()
    {
        return Testimonial::query();
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

            NumberColumn::name('rating')
                ->searchable()
                ->filterable(),

            BooleanColumn::name('message')
                ->label('Message')
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.testimonials.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
