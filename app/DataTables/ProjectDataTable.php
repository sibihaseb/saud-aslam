<?php

namespace App\DataTables;

use App\Models\Project;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ProjectDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($data) {
                $button = null;
                $button = '<a href="' . route('projects.edit', $data->id) . '" role="button" class="edit ri-pencil-line text-info m-2"></a>';
                $button .= '<i id="' . $data->id . '" class="deleteRecord ri-delete-bin-line text-danger m-2" role="button"></i>';
                return $button;
            })
            ->addColumn('images', function ($data) {
                $button = null;
                $allImages = explode(',', $data->images);
                if ($allImages && count($allImages) > 1) {
                    $button .= '<div class="gallery">';
                    foreach ($allImages as $key => $image) {
                        $url = asset('storage/' . $image);
                        $button .= '<img src="' . $url . '" alt="' . $key . '" />';
                    }
                    $button .= '</div>';
                } elseif ($allImages[0]) {
                    $url = asset('storage/' . $allImages[0]);
                    $button .= '<img src="' . $url . '" />';
                } else {
                    $button = '';
                }
                return $button;
            })
            ->addColumn('Project_ended_date', fn($record) => $record->ended_on->diffForHumans())
            ->escapeColumns([]);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Project $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('project-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('description'),
            Column::make('images')->width("200px"),
            Column::make('Project_ended_date'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Project_' . date('YmdHis');
    }
}
