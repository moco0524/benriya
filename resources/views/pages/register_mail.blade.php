@extends('layout.mail')

@section('content')
	<p>依頼度合　：　{{ $kinkyu }}</p>
	<p>ご依頼者　：　{{ $name }}様</p>
	<p>連絡先　　：　{{ $telno }}</p>
	<p>郵便番号　：　{{ $zipno }}</p>
	<p>住所　　　：　{{ $address }}</p>
	<p>メアド　　：　{{ $mailadd }}</p>
	<p>依頼内容　：　</p>
	<p style="white-space: pre-wrap;">{{ $body }}</p>
@endsection