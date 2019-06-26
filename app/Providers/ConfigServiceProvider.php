<?php

namespace App\Providers;

use App\Configuration;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $conf = Configuration::with('fotos')->find(1);
        if ($lp = $conf->fotos->firstWhere('espacio', 'principal')) {
            $logoPrincipal = 'img/' . $lp->url;
        }
        if ($la = $conf->fotos->firstWhere('espacio', 'alternativo')) {
            $logoAlternativo = 'img/' . $la->url;
        }
        if ($lr = $conf->fotos->firstWhere('espacio', 'redes')) {
            $logoRedes = env('APP_URL') . 'img/' . $lr->url;
        }

        define("EMAIL_NOTIFICATION", $conf->email_notification ?? '');
        define("EMAIL_SENDER", $conf->email_sender ?? '');
        define("APP_DISPLAY", $conf->app_name ?? '');
        define("LOGO", $logoPrincipal ?? 'img/rivara/logo.png');
        define("LOGO_ALTERNATIVO", $logoAlternativo ?? 'img/rivara/logo_blanco.png');
        define("LOGO_REDES", $logoRedes ?? 'img/rivara/logo.png');

        if (env('APP_ENV') === 'production') {
            define("ADMIN_TAGMANAGER", "<!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','" . $conf->admin_tagmanager . "');</script>
            <!-- End Google Tag Manager -->");
            define("ADMIN_TAGMANAGER_NOSCRIPT", '<!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . $conf->admin_tagmanager . '"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->');
        } else {
            define("ADMIN_TAGMANAGER", "<!-- Google Tag Manager (noscript) -->");
            define("ADMIN_TAGMANAGER_NOSCRIPT", "<!-- Google Tag Manager (noscript) -->");
        }

        define("FACEBOOK", $conf->facebook ?? '');
        define("TWITTER", $conf->twitter ?? '');
        define("INSTAGRAM", $conf->instagram ?? '');
        define("YOUTUBE", $conf->youtube ?? '');
        define("LINKEDIN", $conf->linkedin ?? '');

        Config::set('mail.from.address', 'no-reply@dvs360.com');
        Config::set('mail.from.name', 'DVS360 Desarrollo Web');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
