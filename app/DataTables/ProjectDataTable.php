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
                $button = '';
                if (!empty($data->images)) {
                    $allImages = explode(',', $data->images);
                    $button .= '<div class="gallery">';
                    foreach ($allImages as $image) {
                        $image = trim($image);
                        if ($image) {
                            $url = asset('storage/images/projects/' . $image);
                            $button .= '<img src="' . $url . '" alt="Project Image" width="100" style="margin:5px;border:1px solid #ddd;" />';
                        }
                    }
                    $button .= '</div>';
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
