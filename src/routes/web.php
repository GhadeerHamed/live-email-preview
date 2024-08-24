<?php


use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/../../vendor/laravel/framework/src/Illuminate/Foundation/helpers.php';

Route::get('live-email-preview/{mailable}', function ($mailable) {
    $mailableClass = 'App\\Mail\\' . $mailable;
    if (class_exists($mailableClass)) {
        $mailableInstance = new $mailableClass();
        return GhadeerHamed\LiveEmailPreview\LiveEmailPreview::render($mailableInstance);
    }

    throw new \Illuminate\Contracts\Filesystem\FileNotFoundException();
});