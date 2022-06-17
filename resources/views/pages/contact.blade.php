@extends('layout.base')

@section('title', '足立区　便利屋クリーン　連絡用')

@section('content')
<div class="contact-area">
	<div class="area" align="center">
		<span class="tokyo-txcolor" style="display: flex;">まずは何でもお気軽にご相談ください</span>
		<p class="resizeimage">
			<img src="/images/contact-step.png" alt="お問合せ手順">
		</p>
	</div>
</div>
<div align="center" class="form">
	<form name="mailsend" action="/mail/send/{{$val1}}/{{$val2}}" method="post">
	@csrf
		<p class="item" style="width: 70%">
			<label>
				<input size="20" type="text" name="name" required placeholder="カナで入力して下さい" style="font-size: 20px;" />
				<span style="text-align: left; font-size: 20px;">お名前（カナ）<span class="notice">必須</span></span>
			</label>
		</p>
		<p class="item" style="width: 70%">
			<label>
				<input size="20" type="tel" name="telno" required style="font-size: 20px;" />
				<span style="text-align: left; font-size: 20px;">お電話番号<span class="notice">必須</span></span>
			</label>
		</p>
		<p class="item" style="width: 70%">
			<label>
				<input size="20" type="text" name="zipno" style="font-size: 20px;" />
				<span style="text-align: left; font-size: 20px;">郵便番号</span>
			</label>
		</p>
		<p class="item" style="width: 70%">
			<label>
				<input size="20" type="text" name="address" style="font-size: 20px;" />
				<span style="text-align: left; font-size: 20px;">ご住所</span>
			</label>
		</p>
		<p class="item" style="width: 70%">
			<label>
				<input size="20" type="email" name="mail" required style="font-size: 20px;" />
				<span style="text-align: left; font-size: 20px;">メールアドレス<span class="notice">必須</span></span>
			</label>
		</p>
		<p class="item" style="width: 70%">
			<label>
				<span style="text-align: left; font-size: 20px;">メール本文<span class="notice">必須</span></span>
			</label>
			<textarea placeholder="ご依頼内容またはご質問を入力してください" name="message" rows="5" style="font-size: 20px; display: flex;" required ></textarea>
		</p>
		<p class="item" style="width: 70%; align: center;">
			<label style="font-size: 20px;">緊急またはお急ぎの場合はチェックを入れてください。</label>
			<span style="align: left; font-size: 20px;">
				<input type="checkbox" name="kinkyu" value="今すぐ解決してほしい">
				<span class="red">今すぐ</span>解決してほしい</span>
			</span>
		</p>
		<p class="item" style="width: 70%;">
				<input type="checkbox" id="accept" value="1" style="align: left;">
				<span style="font-size: 20px;">　内容をご確認の上チェックを入れてください
					<span class="red">（必須）</span>
				</span>
		</p>
		<div style="height: 100px; table-layout: fixed;">
			<div class="button05">
				<a id="mail_send" href="javascript:mailsend.submit();">送信</a>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	// 送信ボタンを非表示
	$(document).ready( function () {
		$("#mail_send").hide();
	})
		
	// 確認用チェックボックスの処理
	$("#accept").click( function () {
		if ($("#accept").prop("checked") == true) {
			$("#mail_send").show();
		} else {
			$("#mail_send").hide();
		}
	})
</script>
@endsection
