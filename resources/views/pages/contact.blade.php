@extends('layout.base')

@section('title', '足立区　便利屋クリーン　連絡用')

@section('content')
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHV22V6"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="scroll-navOut" class="pc">
            <div id="scroll-nav" style="display: block;">
	            <div id="fixed-header" class="#FF69B4">
	                <div class="container head">
		                <div class="logo_fixedheader">
		                    <a href="contact.html">
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
		                    <a href="/contact">メール相談・お問合せ</a>
		                </div>
	                </div>
                </div>
            </div>
        </div>

        <div id="contact" class="container-fild contact-area">
            <div class="container contact-step" align="center">
                <h3>24時間 年中無休で受付中！<br>
                    <span class="h3-color tokyo-txcolor">お見積り・お問合せフォーム</span>
                </h3>
                <p><img src="/images//contact-step-1.png"></p>
            </div>
            <div class="container contact-step">
                <div class="form-area tokyo-border">
                    <div role="form" class="wpcf7" id="wpcf7-f99-p9-o1" lang="ja" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form name="mailsend" id="mailsend" action="/mail/send" method="post" class="wpcf7-form init" novalidate="novalidate">
                            @csrf
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="99">
                                <input type="hidden" name="_wpcf7_version" value="5.2.2">
                                <input type="hidden" name="_wpcf7_locale" value="ja">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f99-p9-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="9">
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
                                                <span class="wpcf7-list-item-label">内容をご確認の上チェックを入れてください 
                                                    <span class="red">(必須)</span>
                                                </span>
                                            </label>
                                        </span>
                                    </span>
                                </span>
                            </p>
                            <!-- 移動用パラメータ設定 -->
                            <input type="hidden" id="page" name="page" value="{{ $page }}" />
                            <div class="send-btn">
                                <input type="submit" id="mail_send" value="送信" class="wpcf7-form-control wpcf7-submit" disabled>
                                <span class="ajax-loader"></span>
                            </div>
                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

		<script type="text/javascript">
		    var clickEventType = ( ( window.ontouchstart === null )? 'touchstart' : 'click' );
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
