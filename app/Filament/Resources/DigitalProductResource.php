<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DigitalProductResource\Pages;
use App\Models\DigitalProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class DigitalProductResource extends Resource
{
    protected static ?string $model = DigitalProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $state, Forms\Set $set) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('short_description')
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('original_price')
                            ->required()
                            ->numeric()
                            ->prefix('₹'),
                        Forms\Components\TextInput::make('sale_price')
                            ->required()
                            ->numeric()
                            ->prefix('₹'),
                        Forms\Components\DateTimePicker::make('sale_ends_at'),
                        Forms\Components\FileUpload::make('file_path')
                            ->required()
                            ->directory('products/files')
                            ->visibility('private'),
                        Forms\Components\FileUpload::make('thumbnail_path')
                            ->image()
                            ->directory('products/thumbnails')
                            ->visibility('public')
                            ->imageResizeMode('contain')
                            ->maxSize(5120)
                            ->imageResizeTargetWidth('800')
                            ->imageResizeTargetHeight('600'),
                        Forms\Components\FileUpload::make('images')
                            ->multiple()
                            ->directory('products/images')
                            ->image(),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_path')
                    ->label('Thumbnail'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('original_price')
                    ->money('INR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_price')
                    ->money('INR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_ends_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order');
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
            'index' => Pages\ListDigitalProducts::route('/'),
            'create' => Pages\CreateDigitalProduct::route('/create'),
            'edit' => Pages\EditDigitalProduct::route('/{record}/edit'),
        ];
    }
} 