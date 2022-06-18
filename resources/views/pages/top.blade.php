@extends('layout.base')

@section('title', '足立区　便利屋クリーン　トップ')

@section('content')
<div class="center">
	<div class="resizeimage">
		<img src="/images/lisence.png">
	</div>
	<div class="resizeimage">
		<img src="/images/koe-bnr.png">
	</div>
	<div>
		<p class="font1">期間限定10％還元キャンペーン</p>
		<p class="font1">「ホームページを見た」と言うだけで料金を割引！！</p>
	</div>
	<div class="resizeimage">
		<img src="/images/price-service.png">
		<p class="font1">ご相談から作業完了までの流れ</p>
		<p id="callphone" class="font1"></p>
		<img src="/images/step.png">
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var ua = navigator.userAgent;
		var phone = document.getElementById('callphone')
		if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
			phone.innerHTML = 'まずは　☎️ <a href="tel:08043466004">０１２０ー０６５ー９５５</a>　までお電話ください'
		}else if (ua.indexOf("iPad") > 0 || ua.indexOf("Android") > 0) {
			phone.innerHTML = 'まずは　☎️ <a href="tel:08043466004">０１２０ー０６５ー９５５</a>　までお電話ください'
		} else {
			phone.innerHTML = 'まずは　☎️ ０１２０ー０６５ー９５５　までお電話ください'
		}
	})
</script>
@endsection
