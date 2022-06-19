@extends('layout.base')

@section('title', '足立区　便利屋クリーン　割引キャンペーン')

@section('content')
<div class="campaign">
	<span class="campaign_title">家具・家電の高価買取</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/furniture.webp">
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-kaitori-price.png">
			<p class="detail2">家具はご購入から10年以内</p>
			<p class="detail2">家電は製造年式10年以内まで</p>
			<p class="detail2">
				<span class="red">高価買取</span>
			</p>
		</div>
	</div>

	<span class="campaign_title">遺品整理</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/waste.webp">
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price1.png">
			<p class="detail2">例）軽トラ 9,800円！</p>
			<p class="detail2">1部屋〜1軒丸ごとまで最安値対応をお約束します。</p>
			<p class="detail2">※他社見積もり
				<span class="red">2割引き</span>もOKです！
			</p>
		</div>
	</div>

	<span class="campaign_title">不用品処分</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/organizing_relics.webp" />
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price1.png">
			<p class="detail2">例）軽トラ 9,800円！</p>
			<p class="detail2">全部コミコミでこの価格は間違いなく最安値。</p>
			<p class="detail2">※少量〜大量なんでも激安対応します！</p>
		</div>
	</div>

	<span class="campaign_title">引越しサポート</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/movement.webp" />
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price1.png">
			<p class="detail2">例）軽トラ引越し 14,800円！</p>
			<p class="detail2">業者のほぼ半額、レンタカーよりお得。</p>
			<p class="detail2">※距離・荷物量で多少変動します！</p>
		</div>
	</div>

	<span class="campaign_title">家電・家具移動</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/moving.webp" />
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price2.png">
			<p class="detail2">スタッフ2名以上で作業します。</p>
			<p class="detail2">吊り上げ対応可！</p>
			<p class="detail2">他社見積からの割引OK！</p>
			<p class="detail2">※作業内容により金額が異なります</p>
		</div>
	</div>

	<span class="campaign_title">日曜大工</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/DoItYourself.png" >
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price2.png">
			<p class="detail2">初級DIY〜上級DIYリフォーム何でも！</p>
			<p class="detail2">他社見積からの割引OK。</p>
			<p class="detail2">※作業内容により金額が異なります</p>
		</div>
	</div>

	<span class="campaign_title">庭掃除</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/garden_cleaning.webp" />
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price1.png">
			<p class="detail2">剪定・伐採・抜根・草刈り他社相場から2割引！</p>
			<p class="detail2">他社見積からの割引OK。</p>
			<p class="detail2">※作業内容により金額が異なります</p>
		</div>
	</div>

	<span class="campaign_title">各種代行</span>
	<div class="campaign_style">
		<div class="block item4 resizeimage">
			<img class="campaign_detail" src="/images/various_agency.webp" />
		</div>
		<div class="item4">
			<img class="detail1" src="/images/service-other-price2.png">
			<p class="detail2">代理・代行・同行・手伝い何でも！</p>
			<p class="detail2">長時間依頼の料金打ち止めご相談下さい。</p>
			<p class="detail2">※作業内容により金額が異なります</p>
		</div>
	</div>
</div>
@endsection
