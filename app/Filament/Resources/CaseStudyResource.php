<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaseStudyResource\Pages;
use App\Models\CaseStudy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Basic Information')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                                Forms\Components\Select::make('category')
                                    ->options([
                                        'AI & Machine Learning' => 'AI & Machine Learning',
                                        'Web Development' => 'Web Development',
                                        'Process Automation' => 'Process Automation',
                                        'Digital Marketing' => 'Digital Marketing',
                                    ])
                                    ->required(),
                                Forms\Components\TextInput::make('timeframe')
                                    ->required(),
                                Forms\Components\TextInput::make('roi')
                                    ->label('ROI')
                                    ->required(),
                                Forms\Components\TextInput::make('team_size')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\DatePicker::make('completion_date')
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Content')
                            ->schema([
                                Forms\Components\RichEditor::make('overview')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('client_description')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('challenge')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('solution')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('detailed_results')
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Section::make('Technologies')
                            ->schema([
                                Forms\Components\Repeater::make('technologies')
                                    ->relationship()
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->required(),
                                        Forms\Components\FileUpload::make('icon')
                                            ->image()
                                            ->directory('technology-icons')
                                            ->required(),
                                        Forms\Components\TextInput::make('purpose')
                                            ->required(),
                                    ])
                                    ->columns(3),
                            ]),

                        Forms\Components\Section::make('Process Steps')
                            ->schema([
                                Forms\Components\Repeater::make('processSteps')
                                    ->relationship()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required(),
                                        Forms\Components\RichEditor::make('description')
                                            ->required(),
                                        Forms\Components\TextInput::make('order')
                                            ->numeric()
                                            ->required(),
                                    ])
                                    ->orderColumn('order')
                                    ->defaultItems(1),
                            ]),

                        Forms\Components\Section::make('Key Metrics')
                            ->schema([
                                Forms\Components\Repeater::make('keyMetrics')
                                    ->relationship()
                                    ->schema([
                                        Forms\Components\TextInput::make('value')
                                            ->required(),
                                        Forms\Components\TextInput::make('label')
                                            ->required(),
                                    ])
                                    ->columns(2),
                            ]),

                        Forms\Components\Section::make('Client Testimonial')
                            ->schema([
                                Forms\Components\TextInput::make('testimonial.name')
                                    ->required(),
                                Forms\Components\TextInput::make('testimonial.position')
                                    ->required(),
                                Forms\Components\FileUpload::make('testimonial.avatar')
                                    ->image()
                                    ->directory('testimonial-avatars'),
                                Forms\Components\Textarea::make('testimonial.quote')
                                    ->required()
                                    ->rows(3),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Status')
                            ->schema([
                                Forms\Components\Toggle::make('is_published')
                                    ->label('Published')
                                    ->default(false),
                                Forms\Components\DateTimePicker::make('published_at')
                                    ->label('Publish Date')
                                    ->default(now()),
                            ]),

                        Forms\Components\Section::make('Related Projects')
                            ->schema([
                                Forms\Components\Select::make('related_projects')
                                    ->relationship('relatedProjects', 'title')
                                    ->multiple()
                                    ->preload(),
                            ]),

                        Forms\Components\Section::make('Featured Image')
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->image()
                                    ->directory('case-studies')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Image')
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'AI & Machine Learning' => 'AI & Machine Learning',
                        'Web Development' => 'Web Development',
                        'Process Automation' => 'Process Automation',
                        'Digital Marketing' => 'Digital Marketing',
                    ]),
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCaseStudies::route('/'),
            'create' => Pages\CreateCaseStudy::route('/create'),
            'edit' => Pages\EditCaseStudy::route('/{record}/edit'),
        ];
    }
} 