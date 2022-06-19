@extends('layout.base')

@section('title', '足立区　便利屋クリーン　会社概要')

@section('content')
<div class="table">
	<div class="table_line">
		<div class="title_block">会社名</div>
		<div class="detail_block"><span class="red">便利屋クリーン</span></div>
	</div>
	<div class="under_line"></div>
	<div class="table_line">
		<div class="title_block">住所</div>
		<div class="detail_block">東京都足立区梅島2-17-1A-402</div>
	</div>
	<div class="under_line"></div>
	<div class="table_line">
		<div class="title_block">TEL</div>
		<div id="callphone" class="detail_block"></div>
	</div>
	<div class="under_line"></div>
	<div class="table_line">
		<div class="title_block">代表者</div>
		<div class="detail_block">鈴木 一郎</div>
	</div>
	<div class="under_line"></div>
	<div class="table_line">
		<div class="title_block">営業時間</div>
		<div class="detail_block"><span class="red">24</span>時間</div>
	</div>
	<div class="under_line"></div>
	<div class="table_line">
		<div class="title_block">定休日</div>
		<div class="detail_block">年中<span class="red">無休</span></div>
	</div>
	<div class="under_line"></div>
	<div><p></p></div>
</div>

<script type="text/javascript">
	$(function(){
		var ua = navigator.userAgent;
		var phone = document.getElementById('callphone')
		if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
			phone.innerHTML = '<a href="tel:0120065955">0120-065-955</a>'
		}else if (ua.indexOf("iPad") > 0 || ua.indexOf("Android") > 0) {
			phone.innerHTML = '<a href="tel:0120065955">0120-065-955</a>'
		} else {
			phone.innerHTML = '0120-065-955'
		}
	})
</script>
@endsection
