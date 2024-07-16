<?php

namespace App\Filament\Pages\Groups;

use App\Enums\Platforms;
use App\Forms\Components\SelectRoute;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use App\Models\Platform;
use Filament\Forms\Components;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Business extends Page implements HasForms {
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    protected static ?string $navigationGroup = 'Pages';

    protected static string $view = 'filament.pages.groups.business';

    public ?array $data = [];
    public Platform $platform;

    function mount(){     
        $this->platform = request()->platform()->model(); 
        $this->form->fill($this->platform->content['about'] ?? []);
    }

    public static function canAccess(): bool {
        return request()->platform() == Platforms::GROUP;
    }

    function form(Form $form) : Form{
        return $form
            ->schema([
                Builder::make('sections')
                    ->label('Edit Page Sections')
                    ->blocks([
                        Block::make('banner_section')
                            ->schema([
                                FileUpload::make('image')
                                    ->columnSpan(2),
                                TextInput::make('title'),
                                Textarea::make('caption')
                                    ->columnSpanFull(),
                                Grid::make()
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('button_text'),
                                        SelectRoute::make('button_link')
                                            ->searchable()
                                    ]),
                            ]),
                        Block::make('about_section')
                            ->schema([
                                TextInput::make('title'),
                                Textarea::make('description'),
                            ]),
                        Block::make('uniqueness_section')
                            ->schema([
                                TextInput::make('title'),
                                Repeater::make('uniqueness')
                                    ->schema([
                                        TextInput::make('title'),
                                        Textarea::make('caption')
                                    ]),
                            ]),
                        Block::make('career_section')
                            ->schema([
                                TextInput::make('title')
                            ])
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
        $this->platform['content->about'] = $this->form->getState();
        $this->platform->save();
        Notification::make()->success()->title('Page Updated Successfully')->send();
    }
}
