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
	<form name="mailsend" action="/mail/send/{{$val1}}/{{$val2}}" method="post">
	@csrf
		<ul style="width:600px">
			<li>
				<div class="box table">
					<span class="box1 cell">お名前（カナ）<span class="red">（必須）</span></span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" id="name" name="name" value size="40" style="font-size: 25px;" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC]*" title="全角カタカナで入力してください" required></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">お電話番号<span class="red">（必須）</span></span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="telno" value size="40" style="font-size: 25px;" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" required></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">郵便番号</span>
				</div>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="zipno" value size="40" style="font-size: 25px" pattern="\d{3}-?\d{4}"></span>
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
				<span class="contact_area"><input type="text" name="email" value size="40" style="font-size: 25px" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z{2,}$" required></span>
			</li>

			<li>
				<div class="box table">
					<span class="box1 cell">メッセージ本文<span class="red">（必須）</span></span>
				</div>
			</li>
			<li>
				<span class="box1 cell"><textarea name="message" cols="40" rows="10" style="font-size: 25px" required></textarea></span>
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
				<a id="mail_send" href="javascript:mailsend.submit();">送信</a>
			</div>
		</div>
	</form>
</div>

@endsection
