<?php

namespace App\Filament\Pages\Farms;

use App\Enums\Platforms;
use App\Forms\Components\SelectRoute;
use App\Models\Platform;
use Filament\Actions\Action;
use Filament\Forms\Components;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class FarmsHomePage extends Page implements HasForms {
    use InteractsWithForms;
    
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Pages';
    protected static string $view = 'filament.pages.farms.home';

    public ?array $data = [];
    public Platform $platform;

    function mount(){     
        $this->platform = request()->platform()->model();   
        $this->form->fill($this->platform->content['home'] ?? []);
    }

    public static function canAccess(): bool {
        return request()->platform() == Platforms::FARMS;
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
                                Repeater::make('sliders')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image(),
                                        TextInput::make('title'),
                                        Textarea::make('caption'),
                                        Grid::make()
                                            ->schema([
                                                TextInput::make('button_text'),
                                                SelectRoute::make('button_link')
                                            ])
                                    ])
                            ]),
                        Block::make('about_section')
                            ->schema([
                                TextInput::make('caption'),
                                TextInput::make('title'),
                            ]),
                        Block::make('mission_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('heading'),
                                Textarea::make('caption'),
                                FileUpload::make('image'),
                                Section::make('mission')
                                    ->heading('Mission Section')
                                    ->schema([
                                        TextInput::make('mission_title'),
                                        TextInput::make('mission_caption'),
                                    ]),
                                Section::make('vision')
                                    ->heading('Vision Section')
                                    ->schema([
                                        TextInput::make('vision_title'),
                                        TextInput::make('vision_caption'),
                                    ])
                            ]),
                        Block::make('product_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('heading'),
                                Textarea::make('caption')
                            ]),
                        Block::make('process_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('heading'),
                                Textarea::make('caption'),
                                Grid::make()
                                    ->schema([
                                        TextInput::make('button_text'),
                                        SelectRoute::make('button_link')
                                    ])
                            ]),
                        Block::make('partners_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('heading'),
                                Textarea::make('caption')
                            ]),
                        Block::make('client_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('heading'),
                                Textarea::make('caption')
                            ]),
                        Block::make('faq_section')
                            ->schema([
                                TextInput::make('title'),
                                TextInput::make('heading'),
                                Textarea::make('caption')
                            ]),
                    ])
                    ->addable(true)
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
