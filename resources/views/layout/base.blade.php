<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="東京都足立区の便利屋クリーンです。不用品回収･遺品整理などおまかせ下さい。納得の低価格、安心の事前見積もりでサービスいたします。WEB限定10%還元キャンペーン開催中！東京都･神奈川県･千葉県･埼玉県･茨城県･栃木県･群馬県、関東エリア全域対応いたします。0120-065-955">

        <meta property="og:title" content="足立区 | 便利屋クリーン | 不用品回収･遺品整理">
        <meta property="og:description" content="東京都足立区の便利屋クリーンです。不用品回収･遺品整理などおまかせ下さい。納得の低価格、安心の事前見積もりでサービスいたします。WEB限定10%還元キャンペーン開催中！東京都･神奈川県･千葉県･埼玉県･茨城県･栃木県･群馬県、関東エリア全域対応いたします。0120-065-955">
        <meta property="og:url" content="https://www.benriyaclean.info">
        <meta property="og:site_name" content="便利屋クリーン">
        <meta property="og:type" content="website">

        <link rel="alternate" href="https://www.benriyaclean.info/blog-feed.xml" type="application/rss+xml" title="便利屋クリーン - RSS">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="足立区 | 便利屋クリーン | 不用品回収･遺品整理">
        <meta name="twitter:description" content="東京都足立区の便利屋クリーンです。不用品回収･遺品整理などおまかせ下さい。納得の低価格、安心の事前見積もりでサービスいたします。WEB限定10%還元キャンペーン開催中！東京都･神奈川県･千葉県･埼玉県･茨城県･栃木県･群馬県、関東エリア全域対応いたします。0120-065-955">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="/css/style.css">
        <title>@yield('title')</title>
    </head>

    <body>
        <div class="position-ref full-height">
            <header>
                @include('includes.header')
            </header>

            <main style="overflow-x:auto; overflow-y:auto">
                @yield('content')
            </main>
        </div>
    </body>

</html>