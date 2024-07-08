<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Filament\Resources\CareerResource\RelationManagers;
use App\Forms\Components\SelectStatus;
use App\Models\Career;
use App\Tables\Columns\StatusColumn;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Jobs';
    protected static ?string $label = 'Job';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('role')
                    ->label('Job Title')
                    ->placeholder('Job title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                TextInput::make('type')
                    ->label('Job Type')
                    ->placeholder('Full Time, Part time, etc'),
                TextInput::make('workplace')
                    ->placeholder('Remote, Hybrid, Physical etc'),
                TextInput::make('location')
                    ->nullable()
                    ->placeholder('eg. Lagos Nigeria'),
                TextInput::make('salary')
                    ->prefix('NGN')
                    ->placeholder('0.00'),
                TextInput::make('deadline')
                    ->type('date')
                    ->label('Application Deadline'),
                TextInput::make('application_link')
                    ->url()->placeholder('https://')
                    ->nullable(),
                RichEditor::make('description')
                    ->columnSpanFull(),
                SelectStatus::make('status')
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role'),
                TextColumn::make('salary')
                    ->money('NGN'),
                TextColumn::make('deadline')
                    ->dateTime(),
                StatusColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'view' => Pages\ViewCareer::route('/{record}'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
