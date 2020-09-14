<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// LP獲得用
Route::get('job', function () {
    // return view('fb.check'); //確認用LP
    return view('fb.job'); //獲得LP(2)
    
    // return view('fb.money'); //女性稼げる訴求
    // return view('fb.liveJob'); //ライブチャット女性求人
    // return view('fb.job'); //獲得LP(2)
    // 男性向け裏ライブ配信訴求(アダルト訴求)
    // return view('fb.uraLive'); //獲得LP(1)
});

// LP確認用
Route::get('cccheck', function () {
    return view('fb.job'); //獲得LP(2)
    
    // return view('fb.money'); //女性稼げる訴求
    // return view('fb.liveJob'); //ライブチャット女性求人
    // 男性向け裏ライブ配信訴求(アダルト訴求)
    // return view('fb.uraLive'); //獲得LP(1)
    // return view('fb.submit'); //提出用LP
});

// LP確認用2
Route::get('cccheck2', function () {
    // 男性向け裏ライブ配信訴求(アダルト訴求)
    // return view('fb.uraLive'); //獲得LP(1)
    // return view('fb.liveJob'); //ライブチャット女性求人
});
