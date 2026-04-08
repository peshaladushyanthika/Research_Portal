<?php

namespace App\Filament\Resources\Meetings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MeetingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('group_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('meeting_date')
                    ->required(),
                Textarea::make('discussion_notes')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('next_actions')
                    ->default(null)
                    ->columnSpanFull(),
                DatePicker::make('next_meeting_date'),
            ]);
    }
}
