<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class TopController extends Controller
{
    public function index ( Request $request, string $page='no', string $place='no' ) {
    	
    	if ( $page != 'no' || $place != 'no' ) {
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
            switch ($page) {
            case 'fuyohin':
                $jump_page = '不用品処分';
                break;
            case 'souji':
                $jump_page = '庭掃除';
                break;
            case 'ihin':
                $jump_page = '遺品整理';
                break;
            case 'support':
                $jump_page = '引越し';
                break;
            case 'moving':
                $jump_page = '家具移動';
                break;
            case 'daiku':
                $jump_page = '日曜大工';
                break;
            case 'kaitori':
                $jump_page = '家電買取';
                break;
            case 'daikou':
                $jump_page = '各種代行';
                break;
            default:
                $jump_page = 'その他';
            }
            $log =  '"' . $today . '","' . $ipAddress . '","' . $sessionId . '","' . $jump_page . '","' . $place . '"';
        
            // ローカル領域へのログ出力
            $disk = Storage::disk('local');
            $yymm = date("Ym");
            Storage::append($yymm . '_accesslog.csv', $log);
        }
            // トップページを表示
        return view ( 'pages.top', [ 'page' => $page ] );
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

    public function campaign () {
        return view ( 'pages.campaign' );
    }

}
