<?php

namespace App\Filament\Resources\Conferences\Schemas;

use App\Enums\Region;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;

class ConferenceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                DateTimePicker::make('start_date')
                    ->required(),
                DateTimePicker::make('end_date')
                    ->required(),
                TextInput::make('status')
                    ->required(),
                Select::make('region')
                    ->required()
                    ->live()
                    ->enum(Region::class)
                    ->options(Region::class),
                Select::make('venue_id')
                    ->searchable()
                    ->preload()
                    ->relationship('venue', 'name', modifyQueryUsing: fn(Builder $query, Get $get): Builder => $query->where('region', $get('region'))),
            ]);
    }
}
