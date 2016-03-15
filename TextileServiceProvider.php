<?php

namespace CMSilex\ServiceProviders;

use Netcarver\Textile\Parser;
use Silex\Application;
use Silex\ServiceProviderInterface;

class TextileServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['textile'] = $app->share(function () {
            return new Parser();
        });
    }

    public function boot(Application $app)
    {
        // TODO: Implement boot() method.
    }
}