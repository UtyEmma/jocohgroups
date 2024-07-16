<?php

namespace App\Filament\Pages\Groups;

use App\Enums\Platforms;
use App\Models\Platform;
use Filament\Forms\Components;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Home extends Page implements HasForms {
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Home Page';

    protected static ?string $navigationGroup = 'Pages';

    protected static string $view = 'filament.pages.groups.home';

    public ?array $data = [];
    public Platform $platform;

    function mount(){     
        $this->platform = request()->platform()->model();   
        $this->form->fill($this->platform->content['home'] ?? []);
    }

    public static function canAccess(): bool {
        return request()->platform() == Platforms::GROUP;
    }

    protected function getHeaderActions(): array {
        return [
            Action::make('visit_page')
                ->icon('heroicon-o-computer-desktop')
                ->url(route('group.home')),
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
                        Block::make('hero_section')
                            ->schema([
                                FileUpload::make('image')
                                    ->columnSpan(2),
                                TextInput::make('title'),
                                Textarea::make('caption')
                                    ->columnSpanFull()
                            ]),
                        Block::make('about_section')
                            ->schema([
                                FileUpload::make('image_1')
                                    ->image(),
                                FileUpload::make('image_2')
                                    ->image(),
                                TextInput::make('title'),
                                Textarea::make('description'),
                            ]),
                        Block::make('impact_section')
                            ->schema([
                                TextInput::make('title'),
                                KeyValue::make('impact'),
                            ]),
                        Block::make('ventures_section')
                            ->schema([
                                Repeater::make('ventures')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image(),
                                        FileUpload::make('logo')
                                            ->image(),
                                        TextInput::make('title'),
                                        TextInput::make('link')
                                            ->url(),
                                        Textarea::make('caption')
                                    ])
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
