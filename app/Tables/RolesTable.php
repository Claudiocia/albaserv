<?php

namespace App\Tables;

use App\Models\Role;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\DestroyRowAction;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\RowActions\ShowRowAction;
use Okipa\LaravelTable\Table;

class RolesTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(Role::class)
            ->rowActions(fn(Role $role) => [
                new ShowRowAction(route('admin.roles.show', $role)),
                new EditRowAction(route('admin.roles.edit', $role)),
            ]);
    }

    protected function columns(): array
    {
        return [
            Column::make('nome')->title('Nome')->sortable()->searchable(),
            Column::make('system')->title('Sigla')->sortable()->searchable()->sortByDefault('asc'),
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
