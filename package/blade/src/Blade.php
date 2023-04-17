<?php

namespace package\blade;

use mako\syringe\Container;
use package\blade\bladeone\BladeOne;

class Blade extends BladeOne
{
    /**
     * Blade options
     *
     * @var array
     */
    protected $options = [
        'views'    => MAKO_APPLICATION_PATH .'/resources/views',
        'compiled' => MAKO_APPLICATION_PATH .'/storage/compiled',
    ];

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(
            $this->options['views'],
            $this->options['compiled']
        );
    }

    /**
     * Run the blade engine
     *
     * @param  string $view
     * @param  array  $variables
     * @return string
     */
    public function render(string $view, $variables = []): string
    {
        if (strpos($view, '::') !== false)
        {
            $view = $this->viewFromPackage($view);
        }

        return $this->run($view, $variables);
    }

    /**
     * {@inheritdoc}
     */
    public function runChild($view, $variables = []): string
    {
        if (strpos($view, '::') !== false)
        {
            $view = $this->viewFromPackage($view);
        }

        return parent::runChild($view, $variables);
    }

    /**
     * Get the view from package
     *
     * @param  string $view
     * @return string
     */
    protected function viewFromPackage(string $view): string
    {
        list($package, $view) = explode('::', $view);

        $subPath = 'vendor/package/'. $package;

        $templatePath = str_replace(
            DIRECTORY_SEPARATOR .'app', 
            DIRECTORY_SEPARATOR . $subPath, 
            $this->options['views']
        );

        $this->templatePath = [$templatePath];

        return $view;
    }

}
