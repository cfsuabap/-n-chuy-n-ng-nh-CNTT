<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Driving School</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/assets/css/dangnhap.css" />
        <link rel="stylesheet" href="/assets/css/reset.css" />

    </head>

    <body>

        @livewire('inc.header')
        <div class="dn-login">
            <div class="login">
                <h1 class="login-heading">Đăng nhập</h1>
                <button class="login-social">
                    <i class="fa fa-google login-social-icon"></i>
                    <span class="login-social-text">Đăng nhập với Google</span>
                </button>
                <div class="login-or"><span>Hoặc</span></div>
                    <form wire:submit.prevent="login" class="login-form" autocomplete="off">
                        <label for="email" class="login-label">Email</label>
                        <input type="email" id="email" class="login-input" placeholder="nva11@gmail.com" wire:model="email">
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                
                        <label for="password" class="login-label">Mật khẩu</label>
                        <input type="password" id="password" class="login-input" placeholder="*********" wire:model="password">
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                
                        <button type="submit" class="login-submit">Đăng nhập</button>
                    </form>
                
                    <!-- Bao gồm thông báo -->
                
                <p class="login-not-registered">
                    <span>Bạn chưa có tài khoản ?</span>
                    <a href="{{ route('dang-ky') }}" class="login-signup-link">Đăng ký</a>
                </p>
            </div>
        </div>




        <footer class="site-footer">
            <div class="footer-bottom">
                <p>Copyright © WEB DEMO</p>
            </div>
        </footer>

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