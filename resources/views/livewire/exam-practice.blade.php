<div>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đề 1 - Thi thử bằng lái A1</title>
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/thi-thu.css') }}">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <!-- Header và Navigation giữ nguyên -->

        <div class="exam-container">
            <div class="exam-header">
                <h1>ĐỀ THI THỬ: {{$examPapers[0]->name}} - {{ $exam->name }}</h1>
                <div class="exam-info">
                    <p>Thời gian: <span id="timer">{{ $exam->time }} Phút</span></p>
                    <p>Số câu : <span id="score">{{ $exam->question_count }}</span></p>
                </div>

            </div>

            <div class="question-container">
                <!-- Mẫu cho một câu hỏi -->
                <div class="exam-practice">

                    <!-- Hiển thị câu hỏi và đáp án -->
                    @foreach($questions as $index => $question)
                    <div class="question" id="q{{ $index + 1 }}">
                        <p class="question-text">
                            <span class="question-number">Câu {{ $index + 1 }}:</span>
                            {{ $question->name }}
                        </p>
                        <div class="options">
                            @foreach($question->answers as $answer)
                                <label class="option">
                                    <!-- Chỉ disable khi bài thi đã nộp -->
                                    <input type="radio"
                                           name="q{{ $index + 1 }}"
                                           wire:model="selectedAnswers.{{ $question->id }}"
                                           value="{{ $answer->id }}"
                                           @if($isSubmitted) disabled @endif>
                                    <span class="option-text
                                        {{ $isSubmitted && $selectedAnswers[$question->id] == $answer->id ?
                                           ($answer->is_correct ? 'correct-answer' : 'wrong-answer') : '' }}">
                                        {{ $answer->name }}
                                    </span>
                                </label>
                            @endforeach
                        </div>

                        @if($isSubmitted)
                            <div class="explanation">
                                <p class="correct-answer">
                                    Đáp án đúng:
                                    @foreach($question->answers as $answer)
                                        @if($answer->is_correct)
                                            {{ $answer->name }}
                                        @endif
                                    @endforeach
                                </p>
                                <p class="explanation-text">Giải thích: {{ $question->explanation ?? 'Chưa có giải thích.' }}</p>
                            </div>
                        @endif
                    </div>
                @endforeach




                </div>



                <!-- Thêm các câu hỏi khác tương tự -->
            </div>

            <div class="exam-footer">
                @if($isSubmitted)
                    <button id="show-result">Xem đáp án</button>
                @else
                    <button wire:click="submitExam" id="submit-btn">Nộp bài</button>
                @endif
            </div>
        </div>

        <!-- Footer giữ nguyên -->


        <script src="{{ asset('assets/js/exam.js') }}"></script>

    </body>
    </html>










</div>
