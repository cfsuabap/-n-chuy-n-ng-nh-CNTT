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
        <link rel="stylesheet" href="/assets/css/dangky.css" />
        <link rel="stylesheet" href="/assets/css/reset.css" />

    </head>

    <body>

        @livewire('inc.header')
        <div class="dn-signup">
            <div class="signup">
                <h1 class="signup-heading">Đăng ký</h1>
                <button class="signup-social">
                    <i class="fa fa-google signup-social-icon"></i>
                    <span class="signup-social-text">Đăng ký với Google</span>
                </button>
                <div class="signup-or"><span>Hoặc</span></div>
                <form wire:submit.prevent="register" class="signup-form" autocomplete="off">
                    <label for="fullname" class="signup-label">Họ và tên</label>
                    <input type="text" id="fullname" wire:model="fullname" class="signup-input" placeholder="VD: Nguyễn Văn A">
                    @error('fullname') <span class="text-red-500">{{ $message }}</span> @enderror
                
                    <label for="email" class="signup-label">Email</label>
                    <input type="email" id="email" wire:model="email" class="signup-input" placeholder="VD: nva11@gmail.com">
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                
                    <label for="password" class="signup-label">Mật khẩu</label>
                    <input type="password" id="password" wire:model="password" class="signup-input" placeholder="*********">
                    @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                
                    <label for="password_confirmation" class="signup-label">Nhập lại mật khẩu</label>
                    <input type="password" id="password_confirmation" wire:model="password_confirmation" class="signup-input" placeholder="*********">
                    @error('password_confirmation') <span class="text-red-500">{{ $message }}</span> @enderror
                
                    <button type="submit" class="signup-submit">Đăng ký</button>
                </form>
                
                <p class="signup-already">
                    <span>Bạn đã có tài khoản ?</span>
                    <a href="dangnhap.html" class="signup-login-link">Đăng nhập</a>
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