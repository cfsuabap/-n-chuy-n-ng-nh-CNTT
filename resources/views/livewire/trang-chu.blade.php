<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Driving School</title>
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        @livewire('inc.header')

        <section class="banner-slider">
            <div class="banner-container">
                <div class="banner">
                    <div class="banner-image">
                        <img src="/assets/image/banner1.jpg" alt="Banner 1">
                    </div>
                    <div class="banner-content">
                        <div class="banner-text">
                            <h1>DẠY LÁI XE</h1>
                            <h2>SÂN MỚI - XE MỚI VIOS 2023</h2>
                            <p class="slogan">TỶ LỆ ĐẬU CAO NHẤT BÌNH DƯƠNG</p>
                            <div class="cta-buttons">
                                <a href="#" class="cta-btn">Đặt lịch học mọi lúc mọi nơi</a>
                                <a href="#" class="cta-btn">Đăng ký ngay để nhận ưu đãi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="banner-image">
                        <img src="/assets/image/banner2.jpg" alt="Banner 2">
                    </div>
                    <div class="banner-content">
                        <div class="banner-text">
                            <h1>DẠY LÁI XE</h1>
                            <h2>SÂN MỚI - XE MỚI VIOS 2023</h2>
                            <p class="slogan">TỶ LỆ ĐẬU CAO NHẤT TP.HỒ CHÍ MINH</p>
                            <div class="cta-buttons">
                                <a href="#" class="cta-btn">Đặt lịch học mọi lúc mọi nơi</a>
                                <a href="#" class="cta-btn">Đăng ký ngay để nhận ưu đãi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="banner-image">
                        <img src="/assets/image/banner3.jpg" alt="Banner 3">
                    </div>
                    <div class="banner-content">
                        <div class="banner-text">
                            <h1>DẠY LÁI XE</h1>
                            <h2>SÂN MỚI - XE MỚI VIOS 2023</h2>
                            <p class="slogan">TỶ LỆ ĐẬU CAO NHẤT CẦN THƠ</p>
                            <div class="cta-buttons">
                                <a href="#" class="cta-btn">Đặt lịch học mọi lúc mọi nơi</a>
                                <a href="#" class="cta-btn">Đăng ký ngay để nhận ưu đãi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slider-btn prev-btn">&lt;</button>
            <button class="slider-btn next-btn">&gt;</button>
        </section>

        <section class="features">
            <h2 class="main-title">VÌ SAO LẠI CHỌN CHÚNG TÔI</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Chủ Động Lịch Học</h3>
                    <p class="feature-description">Chủ động đặt lịch học mọi lúc mọi nơi với trung tâm lái xe.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="feature-title">Học Ngay Khi Đăng Ký</h3>
                    <p class="feature-description">Ở Trung tâm Học viên sẽ được học ngay sau khi đăng ký.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="feature-title">Rõ Ràng, Minh Bạch</h3>
                    <p class="feature-description">Quá trình học và thi có thể đánh giá, xếp hạng giáo viên.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="feature-title">Tận Tâm, Nhiệt Tình</h3>
                    <p class="feature-description">Giáo viên luôn nhiệt tình giúp hiểu kiến thức nhanh.</p>
                </div>
            </div>
        </section>

        <section class="license-types">
            <h2 class="license-title">LĨNH VỰC TUYỂN SINH</h2>
            <div class="license-container">
                @foreach($linhVucTuyenSinhs as $linhVuc)
                    <div class="license-card">
                        <a href="{{ url('khoahoc/' . $linhVuc->slug) }}">
                            <div class="license-image">
                                <img src="{{ Storage::url($linhVuc->anh) }}" alt="{{ $linhVuc->ten }}">
                            </div>
                            <h3 class="license-name">{{ $linhVuc->ten }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>


        <section class="pricing">
            <h2 class="pricing-title">BẢNG GIÁ KHÓA HỌC</h2>
            <div class="pricing-container">
                @foreach ($bangGiaKhoaHocs as $khoaHoc)
                    <div class="pricing-card">
                        <h3 class="license-type">{{ $khoaHoc->ten }}</h3>
                        <p class="vehicle-type">{{ $khoaHoc->loai_xe }}</p>
                        <p class="price">{{ number_format($khoaHoc->gia, 0, ',', '.') }} VNĐ</p>
                        <ul class="services">
                            <li>Hồ sơ trọn gói</li>
                            <li>Khai giảng đúng khóa</li>
                            <li>Học ngay sau khi đăng ký</li>
                            <li>Học gần nhà</li>
                            <li>Thời gian học linh hoạt</li>
                            <li>Xe học: {{ $khoaHoc->xe_hoc }}</li>
                        </ul>
                        <a  wire:click="openModal({{ $khoaHoc->id }})" class="register-btn">Đăng ký</a>
                        <p class="voucher">Voucher giảm 500k khi đăng ký online</p>
                    </div>
                @endforeach
            </div>
        </section>
        @if($showModal)
        <div class="modal-overlay" style="display: block;">
            <div class="modal-container">
                <span class="modal-close" wire:click="closeModal">&times;</span>
                <h3 class="modal-title">Đăng ký Khóa Học</h3>
                <form id="registration-form" wire:submit.prevent="submitRegistration">
                    <div class="form-group">
                        <label for="name">Họ và tên:</label>
                        <input type="text" id="name" wire:model="name" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" wire:model="email" placeholder="Nhập email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" id="phone" wire:model="phone" placeholder="Nhập số điện thoại" required>
                    </div>
                    <button type="submit" class="submit-btn">Đăng ký</button>
                </form>
            </div>
        </div>
        <style>
            /* Modal Overlay */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Modal Container */
.modal-container {
    background-color: #fff;
    border-radius: 10px;
    width: 100%;
    max-width: 500px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    animation: fadeIn 0.3s ease-in-out;

    position: fixed; /* Thay thế 'absolute' bằng 'fixed' để modal ở trên màn hình */
    top: 50%;  /* Căn giữa theo chiều dọc */
    left: 50%; /* Căn giữa theo chiều ngang */
    transform: translate(-50%, -50%); /* Dịch chuyển modal về chính giữa */
}

/* Modal Title */
.modal-title {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Close Button */
.modal-close {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 30px;
    color: #333;
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: #ff3b3f;
}

/* Form Group */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: 500;
    color: #555;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-group input:focus {
    border-color: #007bff;
    outline: none;
}

/* Submit Button */
.submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}

.submit-btn:active {
    background-color: #004080;
}

/* Animation for Modal */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

        </style>
@endif

        <section class="registration-benefits">
            <h1 class="main-title">YÊN TÂM KHI ĐĂNG KÝ</h1>
            <div class="benefits-container">
                <div class="benefits-image">
                    <img src="/assets/image/register-section-img.svg" alt="Registration Benefits">
                </div>
                <div class="benefits-content">
                    <div class="benefit-card">
                        <h3>Đăng ký học lái xe Online</h3>
                        <p>Đăng ký học lái xe Ô tô ngay tại nhà với đăng ký học lái xe Ô tô Online tại Website Thi Bằng
                            Lái để được học ngay trong ngày</p>
                    </div>
                    <div class="benefit-card">
                        <h3>Nghe tư vấn và hoàn tất hồ sơ</h3>
                        <p>Sau khi đăng ký, ban Tư vấn tuyển sinh Đào tạo lái xe của Trung tâm sẽ trực tiếp liên hệ với
                            bạn để giải đáp thắc mắc & giúp bạn hoàn tất việc đăng ký học lái xe.</p>
                    </div>
                    <div class="benefit-card">
                        <h3>Đi học ngay</h3>
                        <p>Sau khi đăng ký, bạn sẽ được sắp xếp lịch học lý thuyết và đi học lái buổi đầu tiên ngay tại
                            sân tập của trung tâm</p>
                    </div>
                    <a href="#" class="register-btn">Đăng ký ngay</a>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <h2 class="testimonial-title">NHẬN XÉT CỦA HỌC VIÊN</h2>
            <div class="testimonial-slider">
                <div class="testimonial-container">
                    <div class="testimonial">
                        <img src="/assets/image/feedback-1.png" alt="Testimonial 1">
                    </div>
                    <div class="testimonial">
                        <img src="/assets/image/feedback-2.png" alt="Testimonial 2">
                    </div>
                    <div class="testimonial">
                        <img src="/assets/image/feedback-3.png" alt="Testimonial 3">
                    </div>
                    <div class="testimonial">
                        <img src="/assets/image/feedback-4.png" alt="Testimonial 4">
                    </div>
                    <div class="testimonial">
                        <img src="/assets/image/feedback-5.png" alt="Testimonial 5">
                    </div>
                </div>
                <button class="slider-btn prev-btn">&lt;</button>
                <button class="slider-btn next-btn">&gt;</button>
            </div>
        </section>

    @livewire('inc.footer')

        <button class="scroll-to-top" id="scrollToTop">
            <i class="fas fa-chevron-up"></i>
        </button>

        <script src="/assets/js/scroll.js"></script>

        <script src="/assets/js/script.js"></script>
        <!-- Code injected by live-server -->
        <script>
            // <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
        </script>
        <style>
            .modal {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}

.submit-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #45a049;
}

        </style>
    </body>

</div>
