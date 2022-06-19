@extends('layout.base')

@section('title', '足立区　便利屋クリーン　連絡用')

@section('content')
<div class="contact-area">
	<div class="area" align="center">
		<span style="display: flex;">まずは何でもお気軽にご相談ください</span>
		<p class="resizeimage">
			<img src="/images/contact-step.png" alt="お問合せ手順">
		</p>
	</div>
</div>
<div align="center" class="form">
	<form name="mailsend" action="/mail/send/{{$val1}}/{{$val2}}" method="post">
	@csrf
		<div class="item contact">
			<label>
				<input size="20" type="text" name="name" required placeholder="カナで入力して下さい" style="font-size: 20px;" />
				<span class="contacttitle size1">お名前（カナ）<span class="notice">必須</span></span>
			</label>
		</div>
		<div class="item contact">
			<label>
				<input size="20" type="tel" name="telno" required style="font-size: 20px;" />
				<span class="contacttitle size1">お電話番号<span class="notice">必須</span></span>
			</label>
		</div>
		<div class="item contact">
			<label>
				<input size="20" type="text" name="zipno" style="font-size: 20px;" />
				<span class="contacttitle size1">郵便番号</span>
			</label>
		</div>
		<div class="item contact">
			<label>
				<input size="20" type="text" name="address" style="font-size: 20px;" />
				<span class="contacttitle size1">ご住所</span>
			</label>
		</div>
		<div class="item contact">
			<label>
				<input size="20" type="email" name="mail" required style="font-size: 20px;" />
				<span class="contacttitle size1">メールアドレス<span class="notice">必須</span></span>
			</label>
		</div>
		<div class="item2 contact">
			<label>
				<span class="contacttitle size1">メール本文<span class="notice">必須</span></span>
			</label>
			<textarea placeholder="ご依頼内容またはご質問を入力してください" name="message" rows="5" style="font-size: 20px; display: flex;" required ></textarea>
		</div>
		<div class="item3 contact" style="align: center;">
			<label class="size2">緊急またはお急ぎの場合はチェックを入れてください。</label>
			<div style="align: left; font-size: 20px;">
				<input type="checkbox" name="kinkyu" value="今すぐ解決してほしい">
				<span class="red">今すぐ</span>解決してほしい</span>
			</div>
		</div>
		<div class="item contact">
				<input type="checkbox" id="accept" value="1" style="align: left;">
				<span class="size2">　内容をご確認の上チェックを入れてください
					<span class="red">（必須）</span>
				</span>
		</div>
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
