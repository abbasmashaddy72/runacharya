<?php

namespace App\Http\Livewire\Backend\Tables;

use App\Models\Blog;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class BlogsTable extends LivewireDatatable
{
    public $model = Blog::class;
    public $exportable = true;

    public function builder()
    {
        return Blog::query();
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

            Column::name('tags')
                ->searchable()
                ->truncate(50)
                ->filterable(),

            Column::name('excerpt')
                ->searchable()
                ->truncate(50)
                ->filterable(),

            BooleanColumn::name('image')
                ->label('Image')
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.blogs.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
