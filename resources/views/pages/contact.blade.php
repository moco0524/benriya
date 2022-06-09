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
	<form action="/mail/send" method="post">
	@csrf
		<ul style="width:600px">
			<li>
				<span class="contact_title">お名前（カナ）<span class="red">（必須）</span></span>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="name" value size="40" style="font-size: 25px"></span>
			</li>

			<li>
				<span class="contact_title">お電話番号<span class="red">（必須）</span></span>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="telno" value size="40" style="font-size: 25px"></span>
			</li>

			<li>
				<span class="contact_title">郵便番号</span>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="zipno" value size="40" style="font-size: 25px"></span>
			</li>

			<li>
				<span class="contact_title">ご住所</span>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="address" value size="40" style="font-size: 25px"></span>
			</li>
				
			<li>
				<span class="contact_title">メールアドレス<span class="red">（必須）</span></span>
			</li>
			<li>
				<span class="contact_area"><input type="text" name="mailadd" value size="40" style="font-size: 25px"></span>
			</li>

			<li>
				<span class="contact_title">緊急またはお急ぎの場合はチェックを入れてください。</span>
			</li>
			<li>
				<span class="contact_area"><input type="checkbox" name="kinkyu" value="今すぐ解決してほしい">今すぐ解決してほしい</span>
			</li>

			<li>
				<span class="contact_title">メッセージ本文<span class="red">（必須）</span></span>
			</li>
			<li>
				<span class="contact_area"><textarea name="message" cols="40" rows="10" style="font-size: 25px"></textarea></span>
			</li>

			<li>
				<span class="contact_title"><input type="checkbox" name="accept" value="1"></span>
			</li>
			<li>
				<span class="contact_title">内容をご確認の上チェックを入れてください<span class="red">（必須）</span></span>
			</li>
		</ul>
		<div>
			<input type="submit" value="送信">
		</div>
	</form>
</div>
@endsection
