<?php

namespace App\Filament\Pages;

use App\Models\Platform;
use Dotswan\FilamentCodeEditor\Fields\CodeEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page implements HasForms {
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];
    public Platform $platform;

    function mount(){
        $this->platform = request()->platform()->model();        
        $this->form->fill($this->platform->settings);
    }

    function form(Form $form) : Form{
        return $form
            ->schema([
                Tabs::make('Settings')
                    ->tabs([
                        Tab::make('Site')
                            ->columns([
                                'md' => 12,
                            ])
                            ->schema([
                                TextInput::make('company_name')
                                    ->columnSpanFull(),
                                TextInput::make('site_email')
                                    ->columnSpan([
                                        'md' => 6
                                    ])
                                    ->email(),
                                TextInput::make('contact_phone')
                                    ->columnSpan([
                                        'md' => 6
                                    ])
                                    ->tel(),
                                TextInput::make('contact_address')
                                    ->columnSpanFull(),
                                Textarea::make('site_description')
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Social Media')
                            ->schema([
                                TextInput::make('twitter_link')
                                    ->url(),
                                TextInput::make('instagram_link')
                                    ->url(),
                                TextInput::make('linkedin_link')
                                    ->url(),
                                TextInput::make('facebook_link')
                                ->url(),
                            ]),
                        Tab::make('SEO')
                            ->schema([
                                TextInput::make('site_title'),
                                TextInput::make('seo_tags'),
                                Textarea::make('seo_description')
                            ]),
                        Tab::make('Configuration')
                            ->schema([
                                CodeEditor::make('header_scripts')
                                    ->showCopyButton(true)
                                    ->darkModeTheme('gruvbox-dark')
                                    ->lightModeTheme('basic-light'),
                                CodeEditor::make('footer_scripts')
                                    ->showCopyButton(true)
                                    ->darkModeTheme('gruvbox-dark')
                                    ->lightModeTheme('basic-light')
                            ]),
                    ])
                    ->persistTabInQueryString()
            ])
            ->statePath('data');
    }

    public function submit(): void {
        $this->platform->settings = $this->form->getState();
        $this->platform->save();

        Notification::make()
            ->success()
            ->title('Update Successful')
            ->send();
    }
    
}
