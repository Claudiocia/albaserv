<?php

namespace App\Tables;

use App\Models\ResultEleit;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\DestroyRowAction;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\Table;

class DepEstTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(ResultEleit::class)
            ->query(fn(Builder $query) => $query->select('nm_urna_candidato', DB::raw('SUM(qt_votos_nominais_validos) as qt_votos_nominais_validos'))
                ->where('cd_cargo', '=', 7)
                ->groupBy('nm_urna_candidato')
                ->orderBy('qt_votos_nominais_validos', 'desc')
                ->paginate()
            );
    }

    protected function columns(): array
    {
        return [
            Column::make('nm_urna_candidato')->title('Nome')->sortable(),
            Column::make('qt_votos_nominais_validos')->title('Total de votos')->sortByDefault('desc'),
        ];
    }

    protected function results(): array
    {
        return [
            // The table results configuration.
            // As results are optional on tables, you may delete this method if you do not use it.
        ];
    }
}
