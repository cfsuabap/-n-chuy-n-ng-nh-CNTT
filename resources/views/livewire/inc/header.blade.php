<div>
    <header>
        <div class="top-bar">
            <div class="location">
                <i class="fas fa-map-marker-alt"></i>
                <span>18A Cộng Hoà, Quận Tân Bình, Thành phố HCM</span>
            </div>
            <div class="right-section">
                @if (Auth::check())
                <!-- Hiển thị tên người dùng và nút đăng xuất -->
                <div class="user-info">
                    <span>Xin chào, {{ Auth::user()->name }}</span>
                    <a style="text-decoration: turquoise; color: white;" href="{{ route('logout') }}" class="btn btn-danger logout-btn">Đăng xuất</a>
                </div>
            @else
                <!-- Hiển thị nút đăng nhập -->
                <a href="{{ route('dang-nhap') }}">
                    <button class="login-btn">Đăng nhập</button>
                </a>
            @endif

                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="far fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="/assets/image/logo.png" alt="Driving School Logo"></a>
            </div>
            <ul class="menu">
                <li class="dropdown">
                    <a href="#">Giới thiệu <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('introduce-center') }}">Về trung tâm</a></li>
                        <li><a href="{{ route('experience-page') }}">Kinh nghiệm</a></li>
                    </ul>

                </li>
                <li class="dropdown">
                    <a href="#">Khoá học <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        @foreach($courses as $course)
                            <li><a href="{{ route('khoahoc', ['slug' => $course->slug]) }}">{{ $course->ten }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Thi thử trực tuyến <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu" style="    text-align: left;
    width: 22rem;">
                        @foreach($exams as $exam)
                            <li><a href="{{ route('exam.detail', $exam->id) }}">{{ $exam->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Học lý thuyết trực tuyến <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu" style="text-align: left; width: 22rem;">
                        @foreach($theories as $theory)
                            <li><a href="{{ route('theory-list', $theory->slug) }}">{{ $theory->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>

            </ul>
        </div>
    </nav>
</div>
