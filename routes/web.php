<?php

Route::get('/{any?}', fn() => view('index'))->where('any', '.+');
