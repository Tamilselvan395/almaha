<?php

namespace App\Filament\Resources\ProductPages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Grid;
use Illuminate\Support\Str;

class ProductPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Product Page Sections')
                    ->tabs([
                        // Tab 1: General & SEO
                        Tabs\Tab::make('General & SEO')
                            ->icon('heroicon-o-globe-alt')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Page Name')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn($state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        TextInput::make('slug')
                                            ->label('URL Slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->helperText('URL path (e.g. porcelain, swimming-pool-tiles)')
                                            ->dehydrated(),
                                    ]),

                                Toggle::make('status')
                                    ->label('Active Status')
                                    ->default(true),

                                TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->columnSpanFull()
                                    ->helperText('Recommended 50-60 characters for best Google search display.'),

                                Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->helperText('Recommended 150-160 characters for search snippets.'),

                                Textarea::make('schema')
                                    ->label('Schema Markup (JSON-LD)')
                                    ->columnSpanFull()
                                    ->rows(12)
                                    ->helperText('Paste valid JSON-LD schema with or without <script> tags.'),
                            ]),

                        // Tab 2: Section 1 - Intro / Overview
                        Tabs\Tab::make('1. Intro / Overview')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Grid::make(3)
                                    ->schema([
                                        TextInput::make('subtitle')
                                            ->label('Section Tagline / Badge')
                                            ->placeholder('e.g. PREMIUM TILES'),
                                        TextInput::make('heading')
                                            ->label('Main Heading (H2)')
                                            ->placeholder('e.g. Porcelain Tiles Dubai'),
                                        TextInput::make('subheading')
                                            ->label('Subheading / Intro Title (H3)')
                                            ->placeholder('e.g. What are Porcelain Tiles?'),
                                    ]),

                                FileUpload::make('intro_image')
                                    ->label('Intro Section Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('product-pages')
                                    ->preserveFilenames()
                                    ->helperText('Leave empty to use the default product template image.'),

                                RichEditor::make('content')
                                    ->label('Intro Body / Paragraph Content')
                                    ->columnSpanFull()
                                    ->helperText('Body paragraphs and introductory description.')
                                    ->extraInputAttributes([
                                        'style' => 'max-height: 400px; overflow-y: auto;',
                                    ]),
                            ]),

                        // Tab 3: Section 2 - Benefits
                        Tabs\Tab::make('2. Benefits')
                            ->icon('heroicon-o-sparkles')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('benefits_data.badge')
                                            ->label('Badge / Subtitle')
                                            ->default('BENEFITS'),
                                        TextInput::make('benefits_data.heading')
                                            ->label('Section Heading')
                                            ->default('Benefits of This Product'),
                                    ]),

                                Textarea::make('benefits_data.description')
                                    ->label('Section Subtitle / Description')
                                    ->rows(2)
                                    ->columnSpanFull(),

                                Repeater::make('benefits_data.items')
                                    ->label('Benefit Cards')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Benefit Title')
                                                    ->required(),
                                                TextInput::make('icon')
                                                    ->label('Icon Class (FontAwesome)')
                                                    ->placeholder('e.g. fas fa-shield-alt')
                                                    ->default('fas fa-check-circle'),
                                            ]),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2)
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->cloneable()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? 'Benefit Item')
                                    ->columnSpanFull(),
                            ]),

                        // Tab 4: Section 3 - Specifications
                        Tabs\Tab::make('3. Specifications')
                            ->icon('heroicon-o-clipboard-document-list')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('specs_data.badge')
                                            ->label('Badge / Subtitle')
                                            ->default('SPECIFICATIONS'),
                                        TextInput::make('specs_data.heading')
                                            ->label('Section Heading')
                                            ->default('Product Specifications'),
                                    ]),

                                Textarea::make('specs_data.description')
                                    ->label('Section Subtitle / Description')
                                    ->rows(2)
                                    ->columnSpanFull(),

                                FileUpload::make('specs_data.image')
                                    ->label('Specifications Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('product-pages')
                                    ->preserveFilenames(),

                                Repeater::make('specs_data.items')
                                    ->label('Specification Highlights')
                                    ->schema([
                                        Grid::make(3)
                                            ->schema([
                                                TextInput::make('label')
                                                    ->label('Specification Attribute (e.g. Sizes, Thickness)')
                                                    ->required(),
                                                TextInput::make('icon')
                                                    ->label('Icon Class')
                                                    ->placeholder('e.g. fas fa-expand')
                                                    ->default('fas fa-layer-group'),
                                                TextInput::make('value')
                                                    ->label('Specification Details / Values')
                                                    ->required(),
                                            ]),
                                    ])
                                    ->collapsible()
                                    ->cloneable()
                                    ->itemLabel(fn(array $state): ?string => $state['label'] ?? 'Spec Item')
                                    ->columnSpanFull(),
                            ]),

                        // Tab 5: Section 4 - Applications
                        Tabs\Tab::make('4. Applications')
                            ->icon('heroicon-o-building-office-2')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('apps_data.badge')
                                            ->label('Badge / Subtitle')
                                            ->default('APPLICATIONS'),
                                        TextInput::make('apps_data.heading')
                                            ->label('Section Heading')
                                            ->default('Applications & Use Cases'),
                                    ]),

                                Textarea::make('apps_data.description')
                                    ->label('Section Subtitle / Description')
                                    ->rows(2)
                                    ->columnSpanFull(),

                                Repeater::make('apps_data.items')
                                    ->label('Application Category Cards (e.g. Residential, Commercial, Specialist)')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Category Title')
                                                    ->required(),
                                                TextInput::make('icon')
                                                    ->label('Icon Class')
                                                    ->placeholder('e.g. fas fa-home')
                                                    ->default('fas fa-building'),
                                            ]),
                                        Textarea::make('points')
                                            ->label('Bullet Points (One item per line)')
                                            ->rows(4)
                                            ->helperText('Type each bullet point on a separate new line.')
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->cloneable()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? 'Application Card')
                                    ->columnSpanFull(),
                            ]),

                        // Tab 6: Section 5 - Feature Spotlight
                        Tabs\Tab::make('5. Feature Spotlight')
                            ->icon('heroicon-o-star')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('spotlight_data.badge')
                                            ->label('Spotlight Badge')
                                            ->placeholder('e.g. OUTDOOR PORCELAIN / ANTI-SLIP'),
                                        TextInput::make('spotlight_data.heading')
                                            ->label('Spotlight Heading')
                                            ->placeholder('e.g. Outdoor Porcelain Tiles in Dubai'),
                                    ]),

                                FileUpload::make('spotlight_data.image')
                                    ->label('Spotlight Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('product-pages')
                                    ->preserveFilenames(),

                                RichEditor::make('spotlight_data.content')
                                    ->label('Spotlight Body Content & Sub-sections')
                                    ->columnSpanFull()
                                    ->helperText('Detailed paragraphs, sub-headings, bullets, and highlights.')
                                    ->extraInputAttributes([
                                        'style' => 'max-height: 400px; overflow-y: auto;',
                                    ]),
                            ]),

                        // Tab 7: Section 6 - Why Choose Us
                        Tabs\Tab::make('6. Why Choose Us')
                            ->icon('heroicon-o-check-badge')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('why_data.badge')
                                            ->label('Badge / Subtitle')
                                            ->default('WHY CHOOSE US'),
                                        TextInput::make('why_data.heading')
                                            ->label('Section Heading')
                                            ->default('Why Choose Al Maha?'),
                                    ]),

                                Textarea::make('why_data.description')
                                    ->label('Introductory Text')
                                    ->rows(3)
                                    ->columnSpanFull(),

                                FileUpload::make('why_data.image')
                                    ->label('Why Choose Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('product-pages')
                                    ->preserveFilenames(),

                                Repeater::make('why_data.items')
                                    ->label('Reasons / Strengths List')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Strength Title (e.g. Competitive Pricing, 15+ Years Experience)')
                                            ->required(),
                                        Textarea::make('description')
                                            ->label('Description')
                                            ->rows(2)
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->cloneable()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? 'Reason Item')
                                    ->columnSpanFull(),
                            ]),

                        // Tab 8: Section 7 - FAQs
                        Tabs\Tab::make('7. FAQs')
                            ->icon('heroicon-o-question-mark-circle')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('faq_data.badge')
                                            ->label('Badge / Subtitle')
                                            ->default('FAQ'),
                                        TextInput::make('faq_data.heading')
                                            ->label('Section Heading')
                                            ->default('Frequently Asked Questions'),
                                    ]),

                                Textarea::make('faq_data.description')
                                    ->label('Section Subtitle / Description')
                                    ->rows(2)
                                    ->columnSpanFull(),

                                Repeater::make('faq_data.items')
                                    ->label('FAQ List')
                                    ->schema([
                                        TextInput::make('question')
                                            ->label('Question')
                                            ->required(),
                                        Textarea::make('answer')
                                            ->label('Answer')
                                            ->rows(3)
                                            ->required(),
                                    ])
                                    ->collapsible()
                                    ->cloneable()
                                    ->itemLabel(fn(array $state): ?string => $state['question'] ?? 'FAQ Question')
                                    ->columnSpanFull(),
                            ]),

                        // Tab 9: Section 8 - CTA Banner
                        Tabs\Tab::make('8. CTA Banner')
                            ->icon('heroicon-o-megaphone')
                            ->schema([
                                TextInput::make('cta_data.heading')
                                    ->label('CTA Title / Heading')
                                    ->placeholder('e.g. Ready to upgrade with premium materials?'),

                                Textarea::make('cta_data.description')
                                    ->label('CTA Subtext / Description')
                                    ->rows(2),

                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('cta_data.button_text')
                                            ->label('Button Text')
                                            ->default('GET A QUOTE'),
                                        TextInput::make('cta_data.button_url')
                                            ->label('Button URL / Route')
                                            ->default('/contact-us'),
                                    ]),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
