<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BangGiaKhoaHocResource\Pages;
use App\Filament\Resources\BangGiaKhoaHocResource\RelationManagers;
use App\Models\BangGiaKhoaHoc;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BangGiaKhoaHocResource extends Resource
{
    protected static ?string $model = BangGiaKhoaHoc::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Quản lý';
    protected static ?string $navigationLabel = 'Bảng giá khóa học';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ten')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gia')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('loai_xe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('xe_hoc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('mo_ta')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ten')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('loai_xe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('xe_hoc')
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
            'index' => Pages\ListBangGiaKhoaHocs::route('/'),
            'create' => Pages\CreateBangGiaKhoaHoc::route('/create'),
            'edit' => Pages\EditBangGiaKhoaHoc::route('/{record}/edit'),
        ];
    }
}
