<?php

// 写真ダウンロード
Route::get('/photos/{photo}/download', 'PhotoController@download');

Route::get('/{any?}', fn() => view('index'))->where('any', '.+');
