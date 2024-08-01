<?php

namespace App\Filament\Resources;

use App\Enums\Platforms;
use App\Enums\Roles;
use App\Enums\Status;
use App\Filament\Resources\AdminResource\Pages;
use App\Filament\Resources\AdminResource\RelationManagers;
use App\Models\Admin;
use App\Models\User;
use App\Tables\Columns\RoleColumn;
use App\Tables\Columns\StatusColumn;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class AdminResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Admins';
    protected static ?string $label = 'Admin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('avatar')
                    ->image(),
                TextInput::make('name')
                    ->placeholder('Name')
                    ->columnSpanFull()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email Address')
                    ->placeholder('Email Address')
                    ->email()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->label('Phone Number')
                    ->placeholder('Phone Number')
                    ->maxLength(255),
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    ->placeholder('Password')
                    ->autocomplete(false)
                    ->visibleOn('create')
                    ->nullable()
                    ->columnSpanFull(),
                Select::make('status')
                    ->native(false)
                    ->options(Status::options()),
                Select::make('role')
                    ->native(false)
                    ->options(Roles::options()),
                CheckboxList::make('platforms')
                    ->options(Platforms::options())
                    ->columns(3)
                    ->nestedRecursiveRules([
                        new Enum(Platforms::class)
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('name')
                    ->description(fn(User $user) => $user->email),
                RoleColumn::make('role'),
                StatusColumn::make('status'),
                // TextColumn::make('platforms')
                //     ->options,
                TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
                ActionGroup::make([
                    Action::make('Update Status')
                            ->icon('heroicon-s-shield-check')
                            ->requiresConfirmation()
                            ->visible(fn() => auth()->user()->role->isSuperAdmin())
                            ->form(function(){
                                return [
                                    Select::make('status')
                                        ->native(false)
                                        ->options([
                                            Status::ACTIVE->value => Status::ACTIVE->label(),
                                            Status::INACTIVE->value => Status::INACTIVE->label(),
                                        ])->required(),
                                ];
                            })
                            ->action(function(array $data, User $user) {
                                $user->status = $data['status'];
                                $user->save();
                                
                                return Notification::make()->title("Admin Status Updated Successfully")->success()->send();
                            }),
                    Action::make('update_password')
                        ->icon('heroicon-s-finger-print')
                        ->requiresConfirmation()
                        ->visible(fn() => auth()->user()->role->isSuperAdmin())
                        ->form(function() {
                            return [
                                TextInput::make('password')
                                    ->confirmed()
                                    ->required()
                                    ->password()
                                    ->revealable(),
                                TextInput::make('password_confirmation')
                                    ->required()
                                    ->password()
                                    ->revealable()
                            ];
                        })
                        ->action(function(array $data, User $user){
                            $user->update([
                                'password' => Hash::make($data['password'])
                            ]);
                            
                            return Notification::make()->title("Admin Password updated")->success()->send();
                        }),
                ])
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
            'index' => Pages\ListAdmins::route('/'),
            'create' => Pages\CreateAdmin::route('/create'),
            'edit' => Pages\EditAdmin::route('/{record}/edit'),
        ];
    }
}
