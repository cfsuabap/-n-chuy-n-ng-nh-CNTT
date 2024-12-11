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
            <li class="breadcrumb-item active" aria-current="page">
         Liên hệ    </li>
        </ol>
    </div>

    <div class="main-content" style="
    background: white;
    padding: 2rem;
    border-radius: 1rem;
">
     <div class="container">
        <h2>Liên Hệ</h2>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submitForm" class="contact-form">
            <div class="form-group">
                <label for="full_name">Họ và tên:</label>
                <input type="text" id="full_name" wire:model="full_name" class="form-control" placeholder="Nhập họ và tên" required>
                @error('full_name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" wire:model="email" class="form-control" placeholder="Nhập email" required>
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="subject">Tiêu đề:</label>
                <input type="text" id="subject" wire:model="subject" class="form-control" placeholder="Nhập tiêu đề" required>
                @error('subject') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="message">Tin nhắn:</label>
                <textarea id="message" wire:model="message" class="form-control" placeholder="Nhập tin nhắn" required></textarea>
                @error('message') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>

    <style>
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form .form-group {
            margin-bottom: 15px;
        }

        .contact-form label {
            font-weight: bold;
            color: #333;
        }

        .contact-form .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .contact-form .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .contact-form .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .error {
            font-size: 0.875rem;
            color: #e74a3b;
        }
    </style>

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
