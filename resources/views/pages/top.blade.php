@extends('layout.base')

@section('title', '足立区　便利屋クリーン　トップ')

@section('content')
<div class="center">
	<div>
		<div class="resizeimage" style="width: 60%; margin: 0 auto;">
			<img src="/images/lisence.png">
		</div>
	</div>
	<div>
	<div class="resizeimage" style="width: 60%; margin: 0 auto;">
		<img src="/images/koe-bnr.png">
	</div>
	</div>
	<div>
		<p class="font-family size5" style="text-align: center;">期間限定<span class="red">10％</span>還元キャンペーン</p>
		<p class="font-family size5" style="text-align: center;">「ホームページを見た」と言うだけで料金を<span class="red">割引</span>！！</p>
	</div>
		<div class="resizeimage" style="width: 70%; margin: 0 auto;">
			<img src="/images/price-service.png">
			<p class="font-family size4">ご相談から作業完了までの流れ</p>
			<p id="callphone" class="font-family size3"></p>
		</div>
		<div class="resizeimage" style="width: 90%; margin: 0 auto;">
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
