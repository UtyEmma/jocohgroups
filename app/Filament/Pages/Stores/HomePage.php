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
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class HomePage extends Page implements HasForms {
    use InteractsWithForms;
    
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Pages';
    protected static string $view = 'filament.pages.stores.home-page';

    public ?array $data = [];
    public Platform $platform;

    function mount(){     
        $this->platform = request()->platform()->model();   
        $this->form->fill($this->platform->content);
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
                TextInput::make('title'),
                TextInput::make('tags'),
                Textarea::make('description'),
                Builder::make('sections')
                    ->label('Edit Page Sections')
                    ->blocks([
                        Block::make('hero_section')
                            ->schema([
                                TextInput::make('title'),
                                FileUpload::make('image')
                                    ->image(),
                            ]),
                        Block::make('about_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('caption'),
                                Repeater::make('steps')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image(),
                                        TextInput::make('title'),
                                        Textarea::make('caption'),
                                    ])
                            ]),
                        Block::make('wholesale_retail')
                            ->schema([
                                TextInput::make('title'),
                                Textarea::make('caption'),
                                FileUpload::make('left_image'),
                                FileUpload::make('right_image'),
                            ]),
                        Block::make('product_section')
                            ->schema([
                                TextInput::make('title'),
                                Textarea::make('caption')
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
        $this->platform['content->home'] = $this->form->getState();
        $this->platform->save();
       
        Notification::make()->success()->title('Page Updated Successfully')->send();
    }


}
