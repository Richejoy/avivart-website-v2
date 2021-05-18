<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Route;
/**
 * 
 */
class Helper
{
	const EMAIL_INFO = 'info@avivart.net';

	const EMAIL_CONTACT = 'contact@avivart.net';

	public static function activeMenuItem(string $routeName)
	{
		return (Route::currentRouteName() == $routeName) ? 'active' : '';
	}

	public static function activeMenuItemStyle(string $routeName)
	{
		return (Route::currentRouteName() == $routeName) ? 'text-primary font-weight-bold' : '';
	}
}