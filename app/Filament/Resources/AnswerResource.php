<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswerResource\Pages;
use App\Filament\Resources\AnswerResource\RelationManagers;
use App\Models\Answer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnswerResource extends Resource
{
    protected static ?string $model = Answer::class;

    protected static ?string $navigationLabel = 'Đáp Án';
    protected static ?string $pluralLabel = 'Danh Sách Đáp Án';
    protected static ?string $navigationGroup = 'Quản Lý Thi';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Tên Đáp Án')
                        ->required(),

                    Forms\Components\Select::make('question_id')
                        ->label('Câu Hỏi')
                        ->relationship('question', 'name')
                        ->required(),

                    Forms\Components\Toggle::make('is_correct')
                        ->label('Đáp Án Đúng')
                        ->default(false),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Đáp Án'),
            Tables\Columns\TextColumn::make('question.name')->label('Tên Câu Hỏi'),
            Tables\Columns\BooleanColumn::make('is_correct')->label('Đáp Án Đúng'),
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
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswer::route('/create'),
            'edit' => Pages\EditAnswer::route('/{record}/edit'),
        ];
    }
}
