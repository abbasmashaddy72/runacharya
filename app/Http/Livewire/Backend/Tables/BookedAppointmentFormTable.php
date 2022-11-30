<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\BookAppointmentForm;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\TimeColumn;

class BookedAppointmentFormTable extends LivewireDatatable
{
    public $model = BookAppointmentForm::class;
    public $exportable = true;

    public function builder()
    {
        return BookAppointmentForm::query();
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

            Column::name('area')
                ->searchable()
                ->filterable(),

            DateColumn::name('appointment_date')
                ->searchable()
                ->filterable(),

            TimeColumn::name('appointment_time')
                ->searchable()
                ->filterable(),


            Column::name('comment')
                ->searchable()
                ->truncate(50)
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),
        ];
    }
}
