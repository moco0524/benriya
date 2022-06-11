@extends('layout.base')

@section('title', '足立区　便利屋クリーン　連絡用')

@section('content')
<div class="contact-area">
	<div class="area" align="center">
		<span class="h3-size tokyo-txcolor">まずは何でもお気軽にご相談ください</span>
		<p>
			<img src="/images/contact-step.png" alt="お問合せ手順">
		</p>
	</div>
</div>
<div align="center">
	<form name="mailsend" action="/mail/send" method="post">
	@csrf
		<ul style="width:600px">
			<li>
				<div class="box table">
					<span class="box1 cell">お名前（カナ）<span class="red">（必須）</span></span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" id="name" name="name" value size="40" style="font-size: 25px;"></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">お電話番号<span class="red">（必須）</span></span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="telno" value size="40" style="font-size: 25px;"></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">郵便番号</span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="zipno" value size="40" style="font-size: 25px"></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">ご住所</span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="address" value size="40" style="font-size: 25px"></span>
			</li>
				
			<li>
				<div class="box table">
					<span class="box1 cell">メールアドレス<span class="red">（必須）</span></span>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="mailadd" value size="40" style="font-size: 25px"></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">メッセージ本文<span class="red">（必須）</span></span>
				</div>
			</li>
			<li>
				<span class="box1 cell"><textarea name="message" cols="40" rows="10" style="font-size: 25px"></textarea></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">緊急またはお急ぎの場合はチェックを入れてください。</span>
				</div>
			</li>
			<li>
				<span class="box cell"><input type="checkbox" name="kinkyu" value="今すぐ解決してほしい">　<span class="red">今すぐ</span>解決してほしい</span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">
						<input type="checkbox" id="accept" value="1">
					</span>
					<span class="box1 cell">　内容をご確認の上チェックを入れてください<span class="red">（必須）</span></span>
				</div>
			</li>
		</ul>
		<div style="height: 100px; table-layout: fixed;">
			<div class="button05">
				<a id="mail_send" href="">送信</a>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		// 送信ボタンを非表示
		$("#mail_send").hide();

		// 確認用チェックボックスの処理
		$("#accept").click(function () {
			if ($("#accept").prop("checked") == true) {
				$("#mail_send").show();
			} else {
				$("#mail_send").hide();
			}
		})

		// 送信ボタン押下
		$("#mail_send").click(function () {
			// メッセージ設定
			let msg = "";

			// 名前のチェック
			let nameVal = $('input[name="name"]').val();
			if (nameVal == null || nameVal == '' ) {
				$("#name").css("background-color","#FF0000");
				msg = "お名前を入力してください";
			}
			// 電話番号のチェック
			let telnoVal = $('input[name="telno"]').val();
			if (telnoVal == null || telnoVal == '' ) {
				$("#telno").css("background-color","#FF0000");
				msg = msg + "\nお電話番号を入力してください";
			}

			// メールアドレスのチェック
			let mailaddVal = $('input[name="mailadd"]').val();
			if (mailaddVal == null || mailaddVal == '' ) {
				$("#mailadd").css("background-color","#FF0000");
				msg = msg + "\nメールアドレスを入力してください";
			}

			// メッセージ本文のチェック
			let messageVal = $('textarea[name="message"]').val();
			if (messageVal == null || messageVal == '' ) {
				$("#message").css("background-color","#FF0000");
				msg = msg + "\nメッセージ本文を入力してください";
			}

			// 必須項目が未入力の場合のアラート			
			if (msg != null && msg != '') {
				alert(msg);
			}
		})
	})
</script>
@endsection
