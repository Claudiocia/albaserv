<?php

namespace App\Tables;

use App\Models\Alebra;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\DestroyRowAction;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\RowActions\ShowRowAction;
use Okipa\LaravelTable\Table;

class AlebrasTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(Alebra::class)
            ->rowActions(fn(Alebra $alebra) => [
                new ShowRowAction(route('pesq.alebras.show', $alebra)),
                new EditRowAction(route('pesq.alebras.edit', $alebra)),
            ]);
    }

    protected function columns(): array
    {
        return [
            Column::make('uf')->title('UF')->searchable()->sortable()->sortByDefault(),
            Column::make('sigla')->title('Sigla'),
            Column::make('nome')->title('Nome')->searchable()->sortable(),
            Column::make('presid')->title('Presidente')->searchable()->sortable(),
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
