<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Driving School</title>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="stylesheet" href="/assets/css/bang-lai-b1b2c.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        @livewire('inc.header')
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/assets/index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Khóa học</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $khoaHoc->ten }}</li> <!-- Hiển thị tên khóa học -->
                </ol>
            </nav>
        </div>
        
        <main>
            <section class="main-content">
                <div class="intro-text">
                    <h2>{{ $khoaHoc->ten }}</h2> <!-- Hiển thị tên khóa học -->
                    <p>{{ $khoaHoc->mo_ta }}</p> <!-- Hiển thị mô tả khóa học -->
                </div>
                <div class="intro-image">
                    <img src="{{ Storage::url($khoaHoc->banner) }}" alt="{{ $khoaHoc->ten }}"> <!-- Hiển thị banner hoặc hình ảnh khóa học -->
                </div>
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
        </main>
        



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
                        <li><i class="fas fa-motorcycle"></i> <a href="/assets/khoahoc/bang-a1-a2.html">Học lái xe máy
                                A1,
                                A2</a></li>
                        <li><i class="fas fa-car"></i> <a href="/assets/khoahoc/bang-b1.html">Học lái xe Oto Bằng B1</a>
                        </li>
                        <li><i class="fas fa-car-side"></i> <a href="/assets/khoahoc/bang-b2.html">Học lái xe Oto bằng
                                B2</a>
                        </li>
                        <li><i class="fas fa-truck"></i> <a href="/assets/khoahoc/bang-c.html">Học bằng lái xe Oto hạng
                                C</a>
                        </li>

                    </ul>
                </div>
                <div class="footer-section">
                    <h3 class="footer-title">KHÁCH HÀNG CẦN BIẾT</h3>
                    <ul class="info-list">
                        <li><i class="fas fa-chevron-right"></i> <a href="/assets/about/ve-trung-tam.html">Giới
                                thiệu</a>
                        </li>
                        <li><i class="fas fa-chevron-right"></i> <a href="/assets/lienhe.html">Liên hệ</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="/assets/about/kinh-nghiem.html">Kinh nghiệm
                                lái
                                xe</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Quy định sử dụng</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Chính sách bảo mật</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p></p>
            </div>
        </footer>

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
    </body>
</div>