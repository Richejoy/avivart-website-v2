<?php
use Illuminate\Support\Facades\Route;

if (!function_exists('pageTitle')) {
	function pageTitle(string $title): string
	{
		return $title ?? config('app.name');
	}
}

if (!function_exists('fullPageTitle')) {
	function fullPageTitle(string $title, string $name): string
	{
		return pageTitle($title) . " - {$name} - " . config('app.name');
	}
}