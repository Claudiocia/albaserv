<?php

namespace App\Tables;

use App\Models\Ambiente;
use Illuminate\Database\Eloquent\Builder;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Console\Commands\MakeFilter;
use Okipa\LaravelTable\Filters\ValueFilter;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\DestroyRowAction;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\RowActions\ShowRowAction;
use Okipa\LaravelTable\Table;

class AmbientesTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(Ambiente::class)
            ->filters([
                new ValueFilter('Tipo', 'tipo', Ambiente::pluck('tipo', 'tipo')->toArray()),
            ])
            ->rowActions(fn(Ambiente $ambiente) => [
                new ShowRowAction(route('pesq.ambientes.show', $ambiente)),
                new EditRowAction(route('pesq.ambientes.edit', $ambiente)),
            ]);
    }

    protected function columns(): array
    {
        return [
            Column::make('nome')->title('Nome')->searchable()->sortable()->sortByDefault(),
            Column::make('tipo')->title('Tipo')->searchable()->sortable(),
            Column::make('predio')->title('Predio')
                ->format(fn(Ambiente $ambiente)=> $ambiente->andar->ala->predio->nome)
                ->searchable(fn(Builder $query, string $searchBy)=> $query->where(
                    'tag', 'LIKE', '%'.$searchBy.'%')),
            Column::make('andar')->title('Andar')->format(fn(Ambiente $ambiente)=> $ambiente->andar->nome),
            Column::make('num')->title('Numero'),
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
