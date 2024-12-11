<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamPaperResource\Pages;
use App\Filament\Resources\ExamPaperResource\RelationManagers;
use App\Models\ExamPaper;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamPaperResource extends Resource
{
    protected static ?string $model = ExamPaper::class;

    protected static ?string $navigationLabel = 'Đề Thi';
    protected static ?string $pluralLabel = 'Danh Sách Đề Thi';
    protected static ?string $navigationGroup = 'Quản Lý Thi';
    protected static ?string $navigationIcon = 'heroicon-o-document';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Select::make('exam_id')
                    ->label('Bài Thi')
                    ->options(\App\Models\Exam::pluck('name', 'id')) // Lấy danh sách các bài thi
                    ->searchable() // Cho phép tìm kiếm
                    ->required(),

                    Forms\Components\TextInput::make('code')
                        ->label('Mã code')
                        ->required(),
                    Forms\Components\TextInput::make('video_link')
                        ->label('Link bài giảng')
                        ->required(),

                    Forms\Components\TextInput::make('name')
                        ->label('Tên Đề Thi')
                        ->required(),

                    Forms\Components\Select::make('type')
                        ->label('Loại Đề Thi')
                        ->options([
                            'main' => 'Chính',
                            'sub' => 'Phụ',
                        ])
                        ->required(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('code')->label('Mã Đề Thi'),
            Tables\Columns\TextColumn::make('name')->label('Tên Đề Thi'),
            Tables\Columns\TextColumn::make('video_link')->label('Link video giải đề'),
            Tables\Columns\TextColumn::make('type')
            ->label('Loại Đề Thi')
            ->formatStateUsing(fn (string $state): string => $state === 'main' ? 'Chính' : 'Phụ'),

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
            'index' => Pages\ListExamPapers::route('/'),
            'create' => Pages\CreateExamPaper::route('/create'),
            'edit' => Pages\EditExamPaper::route('/{record}/edit'),
        ];
    }
}
