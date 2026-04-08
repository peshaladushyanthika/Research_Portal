<?php

namespace App\Filament\Resources\Groups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class GroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('group_name')
                    ->label('Group Name')
                    ->required(),
                TextInput::make('r_title')
                    ->label('Research Title')
                    ->required(),
                Select::make('supervisor_id')
                    ->label('Main Supervisor')
                    ->relationship('supervisor', 'name')
                    ->required(),
                Select::make('co_supervisor_id')
                    ->label('Co-Supervisor')
                    ->relationship('coSupervisor', 'name')
                    ->nullable()
                    ->rule('different:supervisor_id'),
            ]);
    }
}
