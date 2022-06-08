@extends('layout.base')

@section('title', '足立区　便利屋クリーン　連絡用')

@section('content')
<div class="contact-area">
	<div class="container contact-step" align="center">
		<span class="h3-size tokyo-txcolor">まずは何でもお気軽にご相談ください</span>
		<p>
			<img src="/images/contact-step.png" alt="お問合せ手順">
		</p>
	</div>
</div>
<div class="contact-area">
	<div class="container contact-step" align="center">
		<form action="/mail/send" method="post">
		@csrf
			<p>
				<label>お名前（カナ）<span class="red">（必須）</span></label>
				<span>
					<input type="text" name="name" value size="40">
				</span>
			</p>
			<p>
				<label style="width: 200px">お電話番号<span class="red">（必須）</span></label>
				<span>
					<input type="text" name="telno" value size="40">
				</span>
			</p>
			<p>
				<label style="width: 200px">郵便番号（ハイフン無し）</label>
				<span>
					<input type="text" name="zipno" value size="40">
				</span>
			</p>
			<p>
				<label style="width: 200px">ご住所</label>
				<span>
					<input type="text" name="address" value size="40">
				</span>
			</p>
			<p>
				<label style="width: 200px">メールアドレス<span class="red">（必須）</span></label>
				<span>
					<input type="text" name="mailadd" value size="40">
				</span>
			</p>
			<p>
				<label>緊急またはお急ぎの場合はチェックを入れてください。</label>
				<br />
				<span>
					<input type="checkbox" name="kinkyu" value="今すぐ解決してほしい">
					今すぐ解決してほしい
				</span>
			</p>
			<p>
				<label>メッセージ本文<span class="red">（必須）</span></label>
				<br />
				<span>
					<textarea name="message" cols="40" rows="10"></textarea>
				</span>
			</p>
			<p>
				<input type="checkbox" name="accept" value="1">
				<label>内容をご確認の上チェックを入れてください<span class="red">（必須）</span></label>
			</p>
			<div>
				<input type="submit" value="送信">
			</div>
		</form>
	</div>
</div>
@endsection
