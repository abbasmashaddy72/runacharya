<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\ServiceDepartment;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ServiceDepartmentsTable extends LivewireDatatable
{
    public $model = ServiceDepartment::class;
    public $exportable = true;

    public function builder()
    {
        return ServiceDepartment::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            Column::index($this)
                ->unsortable(),

            Column::name('title')
                ->searchable()
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.services.department-actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
