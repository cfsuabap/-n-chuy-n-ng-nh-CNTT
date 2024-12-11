<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamResource\Pages;
use App\Filament\Resources\ExamResource\RelationManagers;
use App\Models\Exam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;

    protected static ?string $navigationLabel = 'Bài Thi';
    protected static ?string $pluralLabel = 'Danh Sách Bài Thi';
    protected static ?string $navigationGroup = 'Quản Lý Thi';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên Bài Thi')
                            ->required(),

                        Forms\Components\FileUpload::make('image')
                            ->label('Hình Ảnh')
                            ->directory('exam_images'),
                    ]),
                    Forms\Components\RichEditor::make('description')
                        ->label('Mô Tả')
                        ->nullable(),

                    Forms\Components\Textarea::make('short_description')
                        ->label('Mô Tả Ngắn'),

                    Forms\Components\TextInput::make('question_count')
                        ->label('Số Câu Hỏi')
                        ->numeric()
                        ->required(),

                    Forms\Components\TextInput::make('pass_requirement')
                        ->label('Điểm Yêu Cầu')
                        ->numeric()
                        ->required(),

                    Forms\Components\TextInput::make('time')
                        ->label('Thời Gian (phút)')
                        ->numeric()
                        ->required(),

                    Forms\Components\RichEditor::make('notes')
                        ->label('Lưu Ý'),

                    Forms\Components\RichEditor::make('references')
                        ->label('Tham Khảo'),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Bài Thi'),
            Tables\Columns\ImageColumn::make('image')->label('Hình Ảnh'),
            Tables\Columns\TextColumn::make('question_count')->label('Số Câu Hỏi'),
            Tables\Columns\TextColumn::make('time')->label('Thời Gian'),
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
            'index' => Pages\ListExams::route('/'),
            'create' => Pages\CreateExam::route('/create'),
            'edit' => Pages\EditExam::route('/{record}/edit'),
        ];
    }
}
