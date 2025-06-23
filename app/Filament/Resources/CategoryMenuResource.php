<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryMenuResource\Pages;
use App\Filament\Resources\CategoryMenuResource\RelationManagers;
use App\Models\CategoryMenu;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryMenuResource extends Resource
{
    protected static ?string $model = CategoryMenu::class;

    protected static ?string $navigationLabel = "Категории меню";

    protected static ?string $modelLabel = 'Категории меню';
    
    protected static ?string $pluralModelLabel = 'Категории меню';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()->schema([
                        TextInput::make('name')
                            ->label('Название категории')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create')
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Отображать на сайте')
                            ->default(true),
                    ])
                ])
            ]);
    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Название категории')
                    ->searchable(),
                    TextColumn::make('created_at')
                    ->sortable()
                    ->date()
                    ->toggleable(isToggledHiddenByDefault:true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListCategoryMenus::route('/'),
            'create' => Pages\CreateCategoryMenu::route('/create'),
            'edit' => Pages\EditCategoryMenu::route('/{record}/edit'),
        ];
    }
}
