<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\Doctor;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class DoctorsTable extends LivewireDatatable
{
    public $model = Doctor::class;
    public $exportable = true;

    public function builder()
    {
        return Doctor::query();
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

            Column::name('degree')
                ->searchable()
                ->filterable(),

            Column::name('specialty')
                ->searchable()
                ->filterable(),

            Column::name('reg_no')
                ->searchable()
                ->filterable(),

            BooleanColumn::name('image')
                ->label('Image')
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.doctors.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
