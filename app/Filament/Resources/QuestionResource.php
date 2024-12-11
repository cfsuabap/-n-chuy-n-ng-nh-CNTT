<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\ExamPaper;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;


    protected static ?string $navigationLabel = 'Câu Hỏi';
    protected static ?string $pluralLabel = 'Danh Sách Câu Hỏi';
    protected static ?string $navigationGroup = 'Quản Lý Thi';
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Tên Câu Hỏi')
                        ->required(),

                    Forms\Components\Select::make('exam_paper_id')
                        ->label('Đề Thi')
                        ->options(ExamPaper::pluck('name', 'id')) // Sử dụng pluck để lấy danh sách đề thi
                        ->searchable()
                        ->required(),

                    Forms\Components\Repeater::make('answers') // Repeater để quản lý đáp án
                        ->label('Đáp Án')
                        ->relationship('answers') // Liên kết với bảng Answer
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Tên Đáp Án')
                                ->required(),

                            Forms\Components\Toggle::make('is_correct')
                                ->label('Đáp Án Đúng')
                                ->default(false),
                        ])
                        ->collapsible()
                        ->columns(2),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Câu Hỏi'),
            Tables\Columns\TextColumn::make('examPaper.name')->label('Tên Đề Thi'),
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
