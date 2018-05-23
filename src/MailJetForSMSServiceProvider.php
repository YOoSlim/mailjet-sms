<?php

namespace YOo\MailJetForSMS;

use Illuminate\Support\ServiceProvider;
use YOo\MailJetForSMS\Helpers\MailJetForSMSRequest;

class MailJetForSMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mailjet_for_sms', function()
        {
            return new MailJetForSMSRequest();
        });

        $this->publishes([
            __DIR__ . '/config.php' => config_path('mailjetsms.php'),
        ], 'config');
    }
}
