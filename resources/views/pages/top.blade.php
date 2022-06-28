@extends('layout.top')

@section('title', '便利屋クリーン | 便利屋 なんでも屋 首都圏全域対応')

@section('content')
        <!-- 移動用パラメータ設定 -->
        <input type="hidden" id="page" value="{{ $page }}" />

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
                            <a href="index.html">
                                <img src="/images/logo-scroll.png" alt="便利屋クリーンは24時間受付・年中無休で対応！">
                            </a>
                        </div>
                        <div class="tel_fixedheader">
                            <img src="/images/scroll-tel-1.png" alt="24時間受付！年中無休緊急対応！インターネット専用ダイヤル">
                        </div>
                        <div class="Webwari_fixedheader">
                            <img src="/images/scroll-webwari.png" alt="Web割で10%還元">
                        </div>
                        <div class="mail_fixedheader ">
                            <a href="#contact">メール相談・お問合せ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-v pc tokyo-mv">
            <h2><img src="/images/main_v-8.png" alt="困りごとの解決は便利屋クリーンへ！首都圏全域対応24時間365日対応"></h2>
            <div class="main-tel"><img src="/images/telbar.png"></div>
        </div>
        <div class="sp-main-v sp">
            <h2><img src="/images/sp-main.gif" alt="困りごとの解決は便利屋クリーンへ！首都圏全域対応24時間365日対応"></h2>
            <div class="sp-btn-area clearfix">
                <div class="sp-tel-btn col-xs-6"><a href="tel:0120065955"><img src="/images/sp-tel-btn.png"></a></div>
                <div class="sp-mail-btn col-xs-6"><a href="#contact"><img src="/images/sp-mail.png"></a></div>
            </div>
            <div class="sp-tel"><img src="/images/sp-tel-1.png"></div>
        </div>

        <div class="container">
            <div class="bnr-area-top">
                <div class="bnr-top"><img src="/images/lisence.png"></div>
                <div class="bnr-top"><img src="/images/koe-bnr.png"></div>
                <div id="price" class="price-top">
                    <h3><span class="h3-color tokyo-txcolor">期間限定10%還元</span>キャンペーン</h3>
                </div>
                <div class="mita">「ホームページを見た」と言うだけで料金を割引！</div>
                <div class=""><img src="/images/price-service-2.png"></div>
            </div>
        </div>
        <div class="container-fild top-service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12" id="fuyohin">
                        <div class="service-area">
                            <div class="srvice-title huyou-top">
                                <h4>不用品処分</h4>
                            </div>
                            <div class="imgtx-area">
                                <img class="img-responsive" src="/images/571523_s.jpg"><p></p>
                                <div class="service-tx-area"><img class="so-img" src="/images/service-other-price.png"><p></p>
                                    <div class="service-tx">例）軽トラ9,800円！全部コミコミでこの価格は間違いなく最安値。※少量～大量なんでも激安対応！</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12" id="souji">
                        <div class="service-area">
                            <div class="srvice-title niwa-top">
                                <h4>庭掃除</h4>
                            </div>
                            <div class="imgtx-area">
                                <img class="img-responsive" src="/images/kusakari.jpg"><p></p>
                                <div class="service-tx-area"><img class="so-img" src="/images/service-other-price.png"><p></p>
                                    <div class="service-tx">剪定・伐採・伐根・草刈り他社相場から2割引！他社見積からの割引OK。※作業内容により金額が異なります</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-12" id="ihin">
                        <div class="service-area">
                            <div class="srvice-title ihin-top">
                                <h4>遺品整理</h4>
                            </div>
                            <div class="imgtx-area">
                                <img class="img-responsive" src="/images/ihin.jpg"><p></p>
                                <div class="service-tx-area"><img class="so-img" src="/images/service-other-price.png"><p></p>
                                    <div class="service-tx">例）軽トラ9,800円！1部屋～1軒丸ごとまで最安値対応をお約束します。※他社見積り2割引きもOK！</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12" id="support">
                        <div class="service-area">
                            <div class="srvice-title hikkoshi-top">
                                <h4>引越しサポート</h4>
                            </div>
                            <div class="imgtx-area">
                                <img class="img-responsive" src="/images/1245427_s.jpg"><p></p>
                                <div class="service-tx-area"><img class="so-img" src="/images/service-other-price.png"><p></p>
                                    <div class="service-tx">例）軽トラ引越し14,800円！業者のほぼ半額、レンタカーよりお得。※距離・荷物量で多少変動します</div>
                                </div>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 sp-column" id="moving">
                        <div class="service-area">
                            <div class="srvice-title kagu-top">
                                <h4>家具家電移動</h4>
                            </div>
                            <div class="imgtx-area">
                                <img class="img-responsive" src="/images/kagu.jpg"><p></p>
                                <div class="service-tx-area"><img src="/images/service-other-price2.png"><p></p>
                                    <div class="service-tx">スタッフ2名以上で作業します。吊り上げ対応可！他社見積からの割引OK。※作業内容により金額が異なります</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 sp-column2" id="daiku">
                        <div class="service-area">
                            <div class="srvice-title daiku-top">
                                <h4>日曜大工</h4>
                            </div>
                            <div class="imgtx-area">
                                <img class="img-responsive" src="/images/daiku.jpg"><p></p>
                                <div class="service-tx-area"><img src="/images/service-other-price2.png"><p></p>
                                    <div class="service-tx">初級DIY～上級DIYリフォーム何でも！他社見積からの割引OK。※作業内容により金額が異なります</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div id="step" class="container step">
            <div>
                <h3>ご相談から<span class="h3-color tokyo-txcolor">作業完了</span>までの流れ</h3>
            </div>
            <div class="tel-text">まずは<span class="red"><a href="tel:0120065955">0120-065-955</a></span>までお電話ください</div>
            <div class="step-img"><img src="/images/step.png"></div>
        </div>
        <div class="container-fild">
            <div class="container contact-mid"><a href="tel:0120065955"><img src="/images/telbar-mid.png"></a></div>
            <div class=" contact-mid-back"></div>
        </div>
        <div id="contact" class="container-fild contact-area">
            <div class="container contact-step" align="center">
                <h3><span class="h3-color tokyo-txcolor">まずはお気軽にご相談下さい!!</span></h3>
                <p><img src="/images/contact-step-1.png"></p>
            </div>
            <div class="container contact-step">
                <div class="form-area tokyo-border">
                    <div role="form" class="wpcf7" id="wpcf7-f99-p7-o1" lang="ja" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form name="mailsend" id="mailsend" action="/mail/send" method="post" class="wpcf7-form init" novalidate="novalidate">
                            @csrf
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="99">
                                <input type="hidden" name="_wpcf7_version" value="5.2.2">
                                <input type="hidden" name="_wpcf7_locale" value="ja">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f99-p7-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="7">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                            </div>
                            <p>
                                <label> お名前(カナ) <span class="red">(必須)</span><br>
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="your-name" id="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    </span> 
                                </label>
                            </p>
                            <p>
                                <label> お電話番号 <span class="red">(必須)</span><br>
                                    <span class="wpcf7-form-control-wrap tel-492">
                                        <input type="tel" name="tel-492" id="tel-492" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false">
                                    </span>　
                                </label>
                            </p>
                            <p>
                                <label> 郵便番号<br>
                                    <span class="wpcf7-form-control-wrap add-num">
                                        <input type="text" name="add-num" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label> ご住所<br>
                                    <span class="wpcf7-form-control-wrap address">
                                        <input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
                                    </span> 
                                </label>
                            </p>
                            <p>
                                <label> メールアドレス <span class="red">(必須)</span><br>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="your-email" id="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label> 緊急性　お急ぎの場合はチェックをしてください。<br>
                                    <span class="wpcf7-form-control-wrap kinkyu">
                                        <span class="wpcf7-form-control wpcf7-checkbox">
                                            <span class="wpcf7-list-item first last">
                                                <input type="checkbox" name="kinkyu" value="今すぐ解決してほしい">
                                                <span class="wpcf7-list-item-label">今すぐ解決してほしい</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label> メッセージ本文 <span class="red">(必須)</span><br>
                                    <span class="wpcf7-form-control-wrap your-massage">
                                        <textarea name="your-message" id="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea>
                                    </span> 
                                </label>
                            </p>
                            <p style="margin-top:25px;">
                                <span class="wpcf7-form-control-wrap acceptance-450">
                                    <span class="wpcf7-form-control wpcf7-acceptance">
                                        <span class="wpcf7-list-item">
                                            <label>
                                                <input type="checkbox" name="acceptance-450" id="acceptance-450" value="1" aria-invalid="false">
                                                <span class="wpcf7-list-item-label">内容をご確認の上チェックを入れてください <span class="red">(必須)</span></span>
                                            </label>
                                        </span>
                                    </span>
                                </span>
                            </p>
                            <div class="send-btn">
                                <input type="submit" id="mail_send" value="送信" class="wpcf7-form-control wpcf7-submit" >
                                <span class="ajax-loader"></span>
                            </div>
                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/wp-embed.min.js') }}"></script>

        <script type="text/javascript" id="">
            (function(){var b=void 0;document.addEventListener("click",function(a){a.target&&a.target.href&&0==a.target.href.indexOf("tel:")&&(b={timestamp:(new Date).getTime(),element:a.target})});callListener=function(){if(b){var a=(new Date).getTime()-b.timestamp;dataLayer.push({event:"Call","gtm.element":b.element,duration:Math.floor(a/1E3)});b=void 0}};document.addEventListener("touchstart",callListener);document.addEventListener("mousemove",callListener)})();
        </script>

		<script type="text/javascript">
		    var clickEventType = ( ( window.ontouchstart === null )? ''touchstart' : 'click' );
		    // ページ表示時の移動
	        $(document).ready( function () {
		        var page = $("#page").val();
		        if ( page != "no") {
			        var p = $("#" + page).offset().top - 70;
			        $('html,body').animate({scrollTop: p}, 'slow');
			        return false;
		        }
	        })
		    
		    // 送信ボタン
		    $("#acceptance-450").on( clickEventType, function() {
		        if ($("#acceptance-450").prop("checked")) {
		            $("#mail_send").prop("disabled", false);
		        } else {
		            $("#mail_send").prop("disabled", true);
					$("#your-name").css("background-color","#ffffff");
					$("#tel-492").css("background-color","#ffffff");
					$("#your-email").css("background-color","#ffffff");
					$("#your-message").css("background-color","#ffffff");
		        }
		    })

			// ヴァリデーションチェック
			$('#mail_send').on( clickEventType, function() {
				ErrFlag = true;
				// 名前のバリデーション
				if ($("#your-name").val() == "") {
					$("#your-name").css("background-color","#ff97c2");
					ErrFlag = false;
				} else if ($("#your-name").val().match(/^[ァ-ンヴーｧ-ﾝﾞﾟ\-]*$/)) {
					$("#your-name").css("background-color","#ffffff");
				} else {
					$("#your-name").css("background-color","#ff97c2");
					ErrFlag = false;
				}

				// 電話番号のバリデーション
				if ($("#tel-492").val() == "") {
					$("#tel-492").css("background-color","#ff97c2");
					ErrFlag = false;
				} else if ($("#tel-492").val().match(/^0\d{9,10}$/)) {
					$("#tel-492").css("background-color","#ffffff");
				} else {
					$("#tel-492").css("background-color","#ff97c2");
					ErrFlag = false;
				}

				// メールアドレスのバリデーション
				if ($("#your-email").val() == "") {
					$("#your-email").css("background-color","#ff97c2");
					ErrFlag = false;
				} else if ($("#your-email").val().match(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/)) {
					$("#your-email").css("background-color","#ffffff");
				} else {
					$("#your-email").css("background-color","#ff97c2");
					ErrFlag = false;
				}
		
				// メール本文のバリデーション
				if ($("#your-message").val() == "") {
					$("#your-message").css("background-color","#ff97c2");
					ErrFlag = false;
				} else {
					$("#your-message").css("background-color","#ffffff");
				}
		
				// エラー判定
				if (ErrFlag) {
					$('#mailsend').submit();
				} else {
					return ErrFlag;
				}
			})
        </script>
@endsection
