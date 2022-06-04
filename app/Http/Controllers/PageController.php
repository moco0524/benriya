<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function regist ( Request $request, string $place='', string $page='' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.about', compact( 'val1', 'val2' ) );
    }

    public function about ( Request $request, string $place='', string $page='' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.about', compact( 'val1', 'val2' ) );
    }

    public function area ( Request $request, string $place='', string $page='' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.area', compact( 'val1', 'val2' ) );
    }

    public function campaign ( Request $request, string $place='', string $page='' ) {
        $val1 = $place;
        $val2 = $page;
        return view ( 'pages.campaign', compact( 'val1', 'val2' ) );
    }

}
