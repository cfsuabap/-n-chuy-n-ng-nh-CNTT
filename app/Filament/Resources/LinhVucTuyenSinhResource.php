<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinhVucTuyenSinhResource\Pages;
use App\Filament\Resources\LinhVucTuyenSinhResource\RelationManagers;
use App\Models\LinhVucTuyenSinh;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LinhVucTuyenSinhResource extends Resource
{
    protected static ?string $model = LinhVucTuyenSinh::class;
    protected static ?string $navigationGroup = 'Quản lý';
    protected static ?string $navigationLabel = 'Lĩnh vực tuyển sinh';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ten')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('tieu_de')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\RichEditor::make('mo_ta')
                    ->columnSpanFull()
                    ,
                Forms\Components\FileUpload::make('banner')
                    ->default(null),
                Forms\Components\FileUpload::make('anh')
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ten')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tieu_de')
                    ->searchable(),
                Tables\Columns\TextColumn::make('banner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListLinhVucTuyenSinhs::route('/'),
            'create' => Pages\CreateLinhVucTuyenSinh::route('/create'),
            'edit' => Pages\EditLinhVucTuyenSinh::route('/{record}/edit'),
        ];
    }
}
