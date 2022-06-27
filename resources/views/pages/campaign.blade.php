@extends('layout.base')

@section('title', 'お得な割引パック | 便利屋クリーン')

@section('content')
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHV22V6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="scroll-navOut" class="pc">
            <div id="scroll-nav" style="display: none;">
	            <div id="fixed-header" class="#FF69B4">
	                <div class="container head">
		                <div class="logo_fixedheader">
		                    <a href="https://benriya-clean.com/%E5%89%B2%E5%BC%95/index.php">
		                        <img src="/images//logo-scroll.png" alt="便利屋クリーンは24時間受付・年中無休で対応！">
		                    </a>
		                </div>
		                <div class="tel_fixedheader">
		                    <img src="/images//scroll-tel-1.png" alt="24時間受付！年中無休緊急対応！インターネット専用ダイヤル">
		                </div>
		                <div class="Webwari_fixedheader">
		                    <img src="/images//scroll-webwari.png" alt="Web割で10%還元">
		                </div>
		                <div class="mail_fixedheader ">
<!--		                    <a href="https://benriya-clean.com/contact">メール相談・お問合せ</a>-->
		                    <a href="/contact">メール相談・お問合せ</a>
		                </div>
	                </div>
                </div>
            </div>
        </div>

        <div class="container-fild top-service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title kaitori-top">
                                <h4>家具・家電の高価買取</h4>
                            </div>
                            <p>            <img src="/images//service-kaitori.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-kaitori-price.png"><p></p>
                                <div class="service-tx">家具はご購入から10年以内、家電は製造年式10年以内まで高価買取。※WEB見たで買取金額10%UP</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title huyou-top">
                                <h4>不用品処分</h4>
                            </div>
                            <p>            <img src="/images//service-huyou.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-other-price.png"><p></p>
                                <div class="service-tx">例）軽トラ9,800円！全部コミコミでこの価格は間違いなく最安値。※少量～大量なんでも激安対応！</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title ihin-top">
                                <h4>遺品整理</h4>
                            </div>
                            <p>            <img src="/images//service-ihin.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-other-price.png"><p></p>
                                <div class="service-tx">例）軽トラ9,800円！1部屋～1軒丸ごとまで最安値対応をお約束します。※他社見積り2割引きもOK！</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title kagu-top">
                                <h4>家具家電移動</h4>
                            </div>
                            <p>            <img src="/images//service-kagu.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-other-price2.png"><p></p>
                                <div class="service-tx">スタッフ2名以上で作業します。吊り上げ対応可！他社見積からの割引OK。※作業内容により金額が異なります</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title hikkoshi-top">
                                <h4>引越し</h4>
                            </div>
                            <p>            <img src="/images//service-hikkoshi.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-other-price.png"><p></p>
                                <div class="service-tx">例）軽トラ引越し14,800円！業者のほぼ半額、レンタカーよりお得。※距離・荷物量で多少変動します</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title daiku-top">
                                <h4>日曜大工</h4>
                            </div>
                            <p>            <img src="/images//service-daiku.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-other-price2.png"><p></p>
                                <div class="service-tx">初級DIY～上級DIYリフォーム何でも！他社見積からの割引OK。※作業内容により金額が異なります</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title niwa-top">
                                <h4>庭掃除</h4>
                            </div>
                            <p>            <img src="/images//service-kusakari.png" class="img-responsive"></p>
                            <div class="service-tx-area">
                                <img src="/images//service-other-price.png"><p></p>
                                <div class="service-tx">剪定・伐採・伐根・草刈り他社相場から2割引！他社見積からの割引OK。※作業内容により金額が異なります</div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="service-area">
                            <div class="srvice-title daikou-top">
                                <h4>各種代行</h4>
                            </div>
                                <p>            <img src="/images//service-daikou.png" class="img-responsive"></p>
                                <div class="service-tx-area">
                                    <img src="/images//service-other-price2.png"><p></p>
                                    <div class="service-tx">代理・代行・同行・手伝い何でも！長時間依頼の料金打ち止めご相談下さい。※作業内容により金額が異なります</div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--/div-->
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
			$(document).ready( function () {
				var page = $("#page").val();
				var place = $("#place").val();
				if ( place != "no") {
					var p = $("#" + page).offset().top - 170;
					$('html,body').animate({scrollTop: p}, 'slow');
					return false;
				} 
			})
		</script>
@endsection
