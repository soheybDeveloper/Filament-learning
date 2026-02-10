<?php

namespace App\Filament\Resources\Speakers\Schemas;

use App\Enums\SpeakerQualifications;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Textarea::make('bio')
                    ->columnSpanFull(),
                TextInput::make('twitter_handle'),
                \Filament\Forms\Components\CheckboxList::make('qualifications')
                    ->columnSpanFull()
                    ->columns(3)
                    ->bulkToggleable()
                    ->searchable()
                    ->options(
                        SpeakerQualifications::allLabels()
                    )
                    ->descriptions(
                        SpeakerQualifications::allDescriptions()
                    )
                    ->required(),
            ]);
    }
}
