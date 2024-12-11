<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving School</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hoc-ly-thuyet-a1.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @livewire('inc.header')

    <div class="breadcrumb-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Thi thử trực tuyến</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thi thử bằng lái A1</li>
        </ol>
    </div>

    <div class="main-content">
        <div class="container">
            <h1 class="page-title">BỘ ĐỀ {{$exam->name}}</h1>

            <div class="content-grid">
                <!-- Left Column - 30% -->
                <div class="theory-section">
                    <h2>PHẦN MỀM LUYỆN THI LÝ THUYẾT BẰNG A1</h2>
                    <img src="{{ asset('assets/image/hocbanga.jpg') }}" alt="Thi thử bằng lái A1">
                    <div class="theory-description">
                        <p>Phần mềm được phát triển dựa trên cấu trúc bộ đề thi sát hạch lý thuyết lái xe mô tô hạng A1 do Tổng Cục Đường Bộ Việt Nam quy định trong kỳ thi sát hạch chính thức</p>
                        <p>Để tập phần thi lý thuyết bằng lái xe A1 tốt nhất, các học viên có thể sử dụng trực tiếp 8 bộ đề thi này. Bởi chúng tôi đã tổng hợp đầy đủ 200 câu hỏi thi bằng lái xe máy A1 đã đánh dấu sẵn đáp án và câu hỏi điểm liệt.</p>
                        <p>Học viên có thể sử dụng trực tiếp phần mềm luyện ôn thi GPLX A1 online này trực tiếp trên điện thoại iphone & android hoặc máy tính mà không cần phải tải về hay cài đặt. Chỉ yêu cầu có kết nối mạng wifi/4G vô cùng tiện lợi.</p>
                        <p>Khi hoàn thành đủ 8 bộ đề thi bằng lái xe A1 sẽ giúp các bạn có thể nắm rõ được toàn bộ nội dung 200 câu hỏi A1 do Tổng Cục Đường Bộ VN áp dụng trong kỳ thi sát hạch GPLX A1 ở thời điểm hiện tại.</p>
                        <p>Nếu có bất kỳ thắc mắc cần giải đáp về câu hỏi trong đề thi, học viên hãy nhập theo cú pháp "thứ tự câu hỏi + đề số..." để chúng tôi giải đáp trực tiếp!</p>

                    </div>
                </div>

                <!-- Right Column - 70% -->
                <div class="exam-section">
                    <h2>BỘ ĐỀ {{$exam->name}}</h2>

                    <div class="exam-description">
                        <p> {!!     $exam->description !!}</p>
                    </div>

                    <div class="exam-info">
                        <ul>
                            <li>Số lượng câu hỏi: <strong>{{ $exam->question_count }} Câu</strong></li>
                            <li>Yêu cầu làm đúng: <strong>{{ $exam->pass_requirement }} Câu</strong></li>
                            <li>Thời gian: <strong>{{ $exam->time }} Phút</strong></li>
                        </ul>
                    </div>

                    <div class="exam-warning">
                        @if($exam->notes)
                        <div class="exam-warning">
                            <p>  {!! $exam->notes !!}</p>
                        </div>
                    @endif
                                    </div>

                                    <div class="exam-selection">
                                        <h3>Chọn đề thi để luyện:</h3>
                                        <div class="exam-buttons">
                                            @foreach ($mainExams as $exam)
                                                <a href="{{ route('exam.practice', $exam->id) }}" class="exam-btn">{{ $exam->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="additional-practice">
                                        <p>Luyện thêm: </p>
                                        <div class="exam-buttons">
                                            @foreach ($subExams as $exam)
                                                <a href="{{ route('exam.practice', $exam->id) }}" class="exam-btn">{{ $exam->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class="video-section">
                                        <h3>VIDEO GIẢI - ĐẢM BẢO ĐẬU 100%</h3>
                                        <div class="video-buttons">
                                            <!-- Lặp qua tất cả các đề thi và hiển thị các nút video -->
                                            @foreach($exams as $exam_)
                                                <button class="video-btn" onclick="window.location.href='{{ $exam_->code }}'">
                                                    {{ $exam_->name }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>


                    <div class="study-materials">
                        <p class="intro-text">Để quá trình ôn thi GPLX A1 của các bạn trở nên tốt hơn, có thể tham khảo thêm một số thông tin bên dưới nhé:</p>

                        <ul class="materials-list">
                            <li>Tài liệu <a href="#" class="highlight">200 câu hỏi thi bằng lái xe a1 online</a> đã được chúng tôi để sẵn bên dưới. Mỗi phần chúng tôi đã sắp xếp sẵn đáp án.</li>
                            <li>File <a href="https://hoclaixemoto.com/meo-thi-bang-lai-xe-may-a1/" class="highlight" target="_blank">mẹo thi lý thuyết A1 200 câu hỏi</a> dạng file PDF</li>

                        </ul>

                        <p class="material-info">Tài liệu <a href="https://hoclaixemoto.com/200-cau-hoi-thi-bang-lai-xe-may-a1/" class="highlight">200 câu hỏi thi bằng A1</a> được chúng tôi cập nhật dựa theo bản chuẩn của Nhà Xuất Bản Giao Thông Vận Tải, đi kèm đáp án được đánh dấu sẵn để học viên sử dụng thuận lợi hơn.</p>

                        <ul class="material-sections">
                            <li>Phần 1: <a href="https://hoclaixemoto.com/phan-kien-thuc-luat-200-cau-hoi/" class="highlight">101 câu hỏi kiến thức luật</a></li>
                            <li>Phần 2: <a href="https://hoclaixemoto.com/phan-bien-bao-200-cau-hoi/" class="highlight">65 câu hỏi biển báo</a></li>
                            <li>Phần 3: <a href="https://hoclaixemoto.com/phan-sa-hinh-200-cau-hoi/" class="highlight">35 câu hỏi phần sa hình</a></li>
                        </ul>

                        <p class="success-wish">LEARNING DRIVING SCHOOL xin chúc các bạn thành công và đạt kết quả thi tốt nhất trong thời gian tới!!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3 class="footer-title">TRUNG TÂM ĐÀO TẠO LÁI XE</h3>
                <div class="contact-info">
                    <p><i class="fas fa-building"></i> Địa chỉ VP: An Bình - Dĩ An - Bình Dương</p>
                    <p><i class="fas fa-phone"></i> Hotline: 0988 123 xxx</p>
                    <p><i class="fas fa-envelope"></i> Email: webdemo@gmail.com</p>
                </div>
                <div class="social-icons">
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="email"><i class="fas fa-envelope"></i></a>
                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3 class="footer-title">DỊCH VỤ ĐÀO TẠO</h3>
                <ul class="services-list">
                    <li><i class="fas fa-motorcycle"></i> <a href="../khoahoc/bang-a1-a2.html">Học lái xe máy A1, A2</a></li>
                    <li><i class="fas fa-car"></i> <a href="../khoahoc/bang-b1.html">Học lái xe Oto Bằng B1</a></li>
                    <li><i class="fas fa-car-side"></i> <a href="../khoahoc/bang-b2.html">Học lái xe Oto bằng B2</a></li>
                    <li><i class="fas fa-truck"></i> <a href="../khoahoc/bang-c.html">Học bằng lái xe Oto hạng C</a></li>

                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-title">KHÁCH HÀNG CẦN BIẾT</h3>
                <ul class="info-list">
                    <li><i class="fas fa-chevron-right"></i> <a href="../about/ve-trung-tam.html">Giới thiệu</a></li>
                    <li><i class="fas fa-chevron-right"></i> <a href="../lienhe.html">Liên hệ</a></li>
                    <li><i class="fas fa-chevron-right"></i> <a href="../about/kinh-nghiem.html">Kinh nghiệm lái xe</a></li>
                    <li><i class="fas fa-chevron-right"></i> <a href="#">Quy định sử dụng</a></li>
                    <li><i class="fas fa-chevron-right"></i> <a href="#">Chính sách bảo mật</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © WEB DEMO</p>
        </div>
    </footer>

    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script src="../js/scroll.js"></script>

    <script src="../js/script.js"></script>
</body>
</html>

</div>
