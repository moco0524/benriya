<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class TopController extends Controller
{
    public function index ( Request $request, string $place='no', string $page='no', string $flg='' ) {
        // ルートパラメータ取得
    	$val1 = $place;
    	$val2 = $page;
//    	$val3 = $flg;
    	
    	if ( $flg == '' ) {
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
            $log =  '"' . $today . '","' . $ipAddress . '","' . $sessionId . '","' . $url . '","' . $val1 . '","' . $val2 . '"';
        
            // ローカル領域へのログ出力
            $disk = Storage::disk('local');
            Storage::append('accesslog.csv', $log);
        }

        // トップページを表示
        return view ( 'pages.top', compact ( 'val1', 'val2', 1 ) );
    }

    public function contact ( Request $request, string $place='no', string $page='no' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.contact', compact( 'val1', 'val2' ) );
    }

    public function about ( Request $request, string $place='no', string $page='no' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.about', compact( 'val1', 'val2' ) );
    }

    public function area ( Request $request, string $place='no', string $page='no' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.area', compact( 'val1', 'val2' ) );
    }

    public function campaign ( Request $request, string $place='no', string $page='no' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.campaign', compact( 'val1', 'val2' ) );
    }

}
