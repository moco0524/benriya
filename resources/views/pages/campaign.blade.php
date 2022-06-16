@extends('layout.base')

@section('title', '足立区　便利屋クリーン　割引キャンペーン')

@section('content')
<p class="area">キャンペーン画面</p>
<div class="campaign">
	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">家具・家電の高価買取</span>
			<img class="campaign_detail" src="/images/furniture.webp">
		</div>
		<div>
			<img class="detail1" src="/images/service-kaitori-price.png">
			<span class="detail2">家具はご購入から10年以内、家電は製造年式10年以内まで高価買取</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">遺品整理</span>
			<img class="campaign_detail" src="/images/waste.webp">
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price1.png">
			<span class="detail2">例）軽トラ 9,800円！<br/>1部屋〜1軒丸ごとまで最安値対応をお約束します。<br/>※他社見積もり2割引きもOKです！</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">不用品処分</span>
			<img src="/images/organizing_relics.webp" class="campaign_detail" />
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price1.png">
			<span class="detail2">例）軽トラ 9,800円！<br/>全部コミコミでこの価格は間違いなく最安値。<br/>※少量〜大量なんでも激安対応します！</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">引越しサポート</span>
			<img src="/images/movement.webp" class="campaign_detail" />
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price1.png">
			<span class="detail2">例）軽トラ引越し 14,800円！<br/>業者のほぼ半額、レンタカーよりお得。<br/>※距離・荷物量で多少変動します！</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">家電・家具移動</span>
			<img src="/images/moving.webp" class="campaign_detail" />
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price2.png">
			<span class="detail2">スタッフ2名以上で作業します。<br/>吊り上げ対応可！<br/>他社見積からの割引OK！<br/>※作業内容により金額が異なります</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">日曜大工</span>
			<img src="/images/do_it_yourself.webp" class="campaign_detail">
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price2.png">
			<span class="detail2">初級DIY〜上級DIYリフォーム何でも！<br/>他社見積からの割引OK。<br/>※作業内容により金額が異なります</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">庭掃除</span>
			<img src="/images/garden_cleaning.webp" class="campaign_detail" />
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price1.png">
			<span class="detail2">剪定・伐採・抜根・草刈り他社相場から2割引！<br/>他社見積からの割引OK。<br/>※作業内容により金額が異なります</span>
		</div>
	</div>

	<div class="campaign_block resizeimage">
		<div class="block">
			<span class="campaign_title">各種代行</span>
			<img src="/images/various_agency.webp" class="campaign_detail" />
		</div>
		<div>
			<img class="detail1" src="/images/service-other-price2.png">
			<span class="detail2">代理・代行・同行・手伝い何でも！<br/>長時間依頼の料金打ち止めご相談下さい。<br/>※作業内容により金額が異なります</span>
		</div>
	</div>
</div>
@endsection
