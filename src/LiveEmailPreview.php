<?php

namespace GhadeerHamed\LiveEmailPreview;

use Illuminate\Support\Facades\View;
use Illuminate\Mail\Mailable;
use ReflectionException;

class LiveEmailPreview
{
    /**
     * @throws ReflectionException
     */
    public static function render(Mailable $mailable)
    {
        return View::make('live-email-preview::preview', [
            'html' => $mailable->render(),
        ]);
    }
}