<?php

namespace YOo\MailJetForSMS\Facades;

use Illuminate\Support\Facades\Facade;

class MailJetForSMS extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mailjet_for_sms';
    }
}