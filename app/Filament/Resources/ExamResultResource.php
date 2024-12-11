<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamResultResource\Pages;
use App\Filament\Resources\ExamResultResource\RelationManagers;
use App\Models\ExamResult;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamResultResource extends Resource
{
    protected static ?string $model = ExamResult::class;

    protected static ?string $navigationLabel = 'Kết Quả Thi';
    protected static ?string $pluralLabel = 'Danh Sách Kết Quả';
    protected static ?string $navigationGroup = 'Quản Lý Thi';
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('completion_time')
                        ->label('Thời Gian Hoàn Thành (phút)')
                        ->required(),

                    Forms\Components\TextInput::make('correct_answers')
                        ->label('Số Câu Đúng')
                        ->required(),

                    Forms\Components\TextInput::make('score')
                        ->label('Điểm')
                        ->required(),

                    Forms\Components\Select::make('exam_paper_id')
                        ->label('Mã Đề Thi')
                        ->relationship('examPaper', 'code')
                        ->required(),

                    Forms\Components\Select::make('user_id')
                        ->label('Người Dùng')
                        ->relationship('user', 'name')
                        ->required(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('examPaper.code')->label('Mã Đề Thi'),
            Tables\Columns\TextColumn::make('user.name')->label('Người Dùng'),
            Tables\Columns\TextColumn::make('completion_time')->label('Thời Gian Hoàn Thành'),
            Tables\Columns\TextColumn::make('correct_answers')->label('Số Câu Đúng'),
            Tables\Columns\TextColumn::make('score')->label('Điểm'),
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
            'index' => Pages\ListExamResults::route('/'),
            'create' => Pages\CreateExamResult::route('/create'),
            'edit' => Pages\EditExamResult::route('/{record}/edit'),
        ];
    }
}
