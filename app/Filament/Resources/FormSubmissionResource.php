<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormSubmissionResource\Pages;
use App\Models\FormSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FormSubmissionResource extends Resource
{
    protected static ?string $model = FormSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    protected static ?string $navigationGroup = 'Communications';

    protected static ?string $recordTitleAttribute = 'email';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('form_type')
                            ->options(FormSubmission::getFormTypes())
                            ->required()
                            ->disabled(),
                        Forms\Components\TextInput::make('name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('company')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('service')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('budget')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('timeline')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('message')
                            ->rows(4)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('project_type')
                            ->maxLength(255),
                        Forms\Components\Toggle::make('newsletter_subscription')
                            ->default(false),
                        Forms\Components\KeyValue::make('additional_data')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('form_type')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => FormSubmission::getFormTypes()[$state] ?? $state),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service')
                    ->searchable(),
                Tables\Columns\IconColumn::make('newsletter_subscription')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('form_type')
                    ->options(FormSubmission::getFormTypes()),
                Tables\Filters\Filter::make('newsletter_subscription')
                    ->query(fn (Builder $query): Builder => $query->where('newsletter_subscription', true))
                    ->label('Newsletter Subscribers'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormSubmissions::route('/'),
            'view' => Pages\ViewFormSubmission::route('/{record}'),
        ];
    }
} 