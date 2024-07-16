<?php

namespace App\Filament\Pages\Stores;

use App\Enums\Platforms;
use App\Models\Platform;
use Filament\Actions\Action;
use Filament\Forms\Components;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Contact extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Contact Page';
    protected static ?string $navigationGroup = 'Pages';
    protected static string $view = 'filament.pages.stores.contact';

    public ?array $data = [];
    public Platform $platform;

    function mount(){     
        $this->platform = request()->platform()->model();   
        $this->form->fill($this->platform->content['contact'] ?? []);
    }

    public static function canAccess(): bool {
        return request()->platform() == Platforms::STORES;
    }

    protected function getHeaderActions(): array {
        return [
            Action::make('visit_page')
                ->icon('heroicon-o-computer-desktop')
                ->url(route('stores.home')),
        ];
    }

    function form(Form $form) : Form{
        return $form
            ->schema([
                // TextInput::make('title'),
                // TextInput::make('tags'),
                // Textarea::make('description'),
                Builder::make('sections')
                    ->label('Edit Page Sections')
                    ->blocks([
                        Block::make('contact_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('caption'),
                                TextInput::make('badge')
                            ]),
                        Block::make('faq_section')
                            ->schema([
                                TextInput::make('title'),
                                Textarea::make('caption')
                            ]),
                    ])
                    ->addable(false)
                    ->reorderable(false)
                    ->deletable(false)
                    ->collapsible()
                    ->collapsed()
                    ->deleteAction(fn (Components\Actions\Action $action) => $action->requiresConfirmation(),)
            ])
            ->statePath('data');
    }

    public function submit(): void {
        $this->platform['content->contact'] = $this->form->getState();
        $this->platform->save();
       
        Notification::make()->success()->title('Page Updated Successfully')->send();
    }
}
