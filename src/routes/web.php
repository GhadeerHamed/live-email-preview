<?php


use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Route;

Route::get('live-email-preview/{mailable}', function ($mailable) {
    $mailableClass = 'App\\Mail\\' . $mailable;
    if (class_exists($mailableClass)) {
        $mailableInstance = new $mailableClass();
        return GhadeerHamed\LiveEmailPreview\LiveEmailPreview::render($mailableInstance);
    }

    throw new FileNotFoundException();
});