<?php

Route::get("demo/model", function () {
    dd(\voidnoble\Logs\Models\Log::get());
});

Route::resource('logs', 'voidnoble\Logs\LogController');
