<?php

namespace App\Filament\Resources\Submissions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('group_id')
                    ->required()
                    ->numeric(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('version')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('file_path')
                    ->default(null),
                TextInput::make('marks')
                    ->numeric()
                    ->default(null),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'accepted' => 'Accepted', 'rejected' => 'Rejected'])
                    ->default('pending')
                    ->required(),
                Textarea::make('feedback')
                    ->default(null)
                    ->columnSpanFull(),
                DateTimePicker::make('submitted_at'),
            ]);
    }
}
