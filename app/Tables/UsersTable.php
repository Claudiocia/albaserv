<?php

namespace App\Tables;

use App\Models\Role;
use App\Models\User;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Filters\RelationshipFilter;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\RowActions\ShowRowAction;
use Okipa\LaravelTable\Table;

class UsersTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(User::class)
            ->filters([
                new RelationshipFilter('Permissões', 'roles', Role::pluck('system', 'id')->toArray()),
            ])
            ->rowActions(fn(User $user) => [
                new ShowRowAction(route('admin.users.show', $user)),
                new EditRowAction(route('admin.users.edit', $user)),
            ]);
    }

    protected function columns(): array
    {
        return [
            Column::make('cadastro')->title('Cad.')->searchable()->sortable(),
            Column::make('name')->title('Nome')->searchable()->sortable()->sortByDefault('asc'),
            Column::make('lotacao')->title('Setor')->searchable()->sortable(),
            Column::make('ramal')->title('Ramal'),
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
