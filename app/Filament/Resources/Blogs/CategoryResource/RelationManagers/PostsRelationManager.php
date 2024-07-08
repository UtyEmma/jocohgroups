<?php

namespace App\Filament\Resources\Blogs\CategoryResource\RelationManagers;

use App\Forms\Components\SelectStatus;
use App\Models\User;
use App\Tables\Columns\StatusColumn;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Featured Image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', str($state)->slug())),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->columnSpanFull()
                    ->unique(column: 'slug', ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\Select::make('author_id')
                    ->label('Author')
                    ->options(User::canPublish()->pluck('name', 'id'))
                    ->native(false)
                    ->required(),
                TextInput::make('read_time')
                    ->placeholder('eg. 5 mins')
                    ->required(),
                Forms\Components\DatePicker::make('published_at')
                    ->default(now()),
                SelectStatus::make('status')
                    ->native(false)
                    ->required(),
                Forms\Components\Textarea::make('excerpt')
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TagsInput::make('tags')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('category_id')
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('author.name'),
                TextColumn::make('category.name'),
                TextColumn::make('published_at'),
                StatusColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
