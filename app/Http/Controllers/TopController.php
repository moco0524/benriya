<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class TopController extends Controller
{
    public function index ( Request $request, string $page='no', string $place='no' ) {
    	
    	if ( $page != 'no' && $place != 'no' ) {
        	// 当日日時取得
            date_default_timezone_set('Asia/Tokyo');
            $today = date("Y-m-d H:i:s");
        
            // リクエストIPアドレス取得
            $ipAddress = $request->ip();
        
            // リクエストURL取得
            $url = url()->full();
        
            // セッションID取得
            $sessionId = $request->session()->getId();
        
            // ログ作成
            $log =  '"' . $today . '","' . $ipAddress . '","' . $sessionId . '","' . $url . '","' . $place . '","' . $page . '"';
        
            // ローカル領域へのログ出力
            $disk = Storage::disk('local');
            Storage::append('accesslog.csv', $log);
            
            // 指定のページへジャンプ
            if ($page != "no") {
                return view ( 'pages.campaign', compact( 'page' , 'place' ) );
            } else {
                return view ( 'pages.top' );
            }
        } else {
            // トップページを表示
            return view ( 'pages.top', [ 'page' => $page] );
        }
    }

    public function contact ( Request $request ) {
        return view ( 'pages.contact' );
    }

    public function about () {
        return view ( 'pages.about' );
    }

    public function area () {
        return view ( 'pages.area' );
    }

    public function campaign ( string $page='no', string $place='no') {
        return view ( 'pages.campaign', compact( 'page', 'place' ) );
    }

}
