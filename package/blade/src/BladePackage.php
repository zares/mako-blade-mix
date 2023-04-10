<?php

namespace package\blade;

use mako\application\Package;

class BladePackage extends Package
{
    /**
     * Package name.
     *
     * @var string
     */
    protected $packageName = 'package/blade';

    /**
     * Package namespace.
     *
     * @var string
     */
    protected $fileNamespace = 'blade';

    /**
     * {@inheritdoc}
     */
    protected function bootstrap(): void
    {
        $this->container->registerSingleton([Blade::class, 'blade'], function ()
        {
            return new Blade();
        });
    }

}
