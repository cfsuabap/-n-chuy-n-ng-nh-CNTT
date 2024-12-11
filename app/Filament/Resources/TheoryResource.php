<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TheoryResource\Pages;
use App\Filament\Resources\TheoryResource\RelationManagers;
use App\Models\Theory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class TheoryResource extends Resource
{
    protected static ?string $model = Theory::class;

    protected static ?string $navigationLabel = 'Lý Thuyết';
    protected static ?string $pluralLabel = 'Danh Sách Lý Thuyết';
    protected static ?string $navigationGroup = 'Quản Lý Học Tập';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                    ->label('Tên Bài')
                    ->required()
                    ->live()
                    ->reactive()
                    ->maxLength(255)
                    ->afterStateUpdated(function ($state, $set) {
                        // Tạo slug từ name, chuyển thành chữ thường và thay thế khoảng trắng bằng dấu gạch ngang
                        $slug = Str::slug($state);
                        $set('slug', $slug); // Gán giá trị slug tự động vào trường slug
                    }),

                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->live()
                    ->reactive()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->unique('theories', 'slug'),

                    Forms\Components\RichEditor::make('content')
                        ->label('Nội Dung')
                        ->nullable(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Bài')->searchable(),
            Tables\Columns\TextColumn::make('slug')->label('Slug')->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Ngày Tạo')
                ->dateTime(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTheories::route('/'),
            'create' => Pages\CreateTheory::route('/create'),
            'edit' => Pages\EditTheory::route('/{record}/edit'),
        ];
    }
}
