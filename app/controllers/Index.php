<?php

namespace app\controllers;

use mako\http\routing\Controller;
use package\blade\Blade;

/**
 * Welcome controller.
 */
class Index extends Controller
{
	/**
	 * Welcome route.
	 * @param  \package\blade\Blade $blade
	 * @return string
	 */
	public function welcome(Blade $blade): string
	{
		return $blade->render('welcome', ['title' => 'Mako / Blade / Mix']);
	}

}
