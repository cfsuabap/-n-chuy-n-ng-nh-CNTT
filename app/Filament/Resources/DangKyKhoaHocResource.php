<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DangKyKhoaHocResource\Pages;
use App\Filament\Resources\DangKyKhoaHocResource\RelationManagers;
use App\Models\DangKyKhoaHoc;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DangKyKhoaHocResource extends Resource
{
    protected static ?string $model = DangKyKhoaHoc::class;
    protected static ?string $navigationGroup = 'Đơn hàng';
    protected static ?string $navigationLabel = 'Khóa học đã đăng ký';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('khoa_hoc_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ten')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sdt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('dia_chi')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('khoa_hoc_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ten')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sdt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dia_chi')
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
            'index' => Pages\ListDangKyKhoaHocs::route('/'),
            'create' => Pages\CreateDangKyKhoaHoc::route('/create'),
            'edit' => Pages\EditDangKyKhoaHoc::route('/{record}/edit'),
        ];
    }
}
