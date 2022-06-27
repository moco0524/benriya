@extends('layout.base')

@section('title', '会社概要 | 便利屋クリーン')

@section('content')
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHV22V6"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="scroll-navOut" class="pc">
            <div id="scroll-nav" style="display: none;">
	            <div id="fixed-header" class="#FF69B4">
	                <div class="container head">
		                <div class="logo_fixedheader">
		                    <a href="https://benriya-clean.com/%E4%BC%9A%E7%A4%BE%E6%A6%82%E8%A6%81/index.php"><img src="/images/logo-scroll.png" alt="便利屋クリーンは24時間受付・年中無休で対応！"></a>
                        </div>
		                <div class="tel_fixedheader">
		                    <img src="/images/scroll-tel-1.png" alt="24時間受付！年中無休緊急対応！インターネット専用ダイヤル">
		                </div>
		                <div class="Webwari_fixedheader"><img src="/images/scroll-webwari.png" alt="Web割で10%還元"></div>
		                <div class="mail_fixedheader ">
<!--		                    <a href="https://benriya-clean.com/contact">メール相談・お問合せ</a>-->
		                    <a href="/contact">メール相談・お問合せ</a>
		                </div>
	                </div>
                </div>
            </div>
        </div>

        <h2 align="center" style="margin:30px 0;line-height:1.5;">会社概要<br></h2>
        <div style="text-align:center;font-size:18px;font-weight:bold;margin-bottom:30px;">
            屋号：便利屋クリーン<br>
            代表者名：鈴木一郎<br>
            住所：東京都足立区梅島2-17-1A-402
        </div>
        <div class="main-v pc" align="center">
            <h2><img src="/images/area-gaiyou.png" alt="対応エリア"></h2>
        </div>
        <div class="sp-main-v sp" align="center">
<!--            <h2><img src="/images/areasp-gaiyou.png" alt="対応エリア"></h2>-->
            <h2><img src="/images/area-gaiyou.png" alt="対応エリア"></h2>
        </div>

        <script type="text/javascript">
            /* <![CDATA[ */
            var wpcf7 = {"apiSettings":{"root":"https:\/\/benriya-clean.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
            /* ]]> */
        </script>
        <script type="text/javascript" src="./js/scripts.js"></script>
        <script type="text/javascript" src="./js/wp-embed.min.js"></script>

        <script type="text/javascript" id="">
            (function(){var b=void 0;document.addEventListener("click",function(a){a.target&&a.target.href&&0==a.target.href.indexOf("tel:")&&(b={timestamp:(new Date).getTime(),element:a.target})});callListener=function(){if(b){var a=(new Date).getTime()-b.timestamp;dataLayer.push({event:"Call","gtm.element":b.element,duration:Math.floor(a/1E3)});b=void 0}};document.addEventListener("touchstart",callListener);document.addEventListener("mousemove",callListener)})();
        </script>

		<script type="text/javascript">
			$(function(){
				var ua = navigator.userAgent;
				var phone = document.getElementById('callphone')
				if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
					phone.innerHTML = '<a href="tel:0120065955">0120-065-955</a>'
				}else if (ua.indexOf("iPad") > 0 || ua.indexOf("Android") > 0) {
					phone.innerHTML = '<a href="tel:0120065955">0120-065-955</a>'
				} else {
					phone.innerHTML = '0120-065-955'
				}
			})
		</script>
@endsection
