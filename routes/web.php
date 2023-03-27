<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('listings', [
		'heading' => "Latest Listings",
		'listings' => [
			[
				'id' => 1,
				'title' => 'gig 1',
				'description' => 'best opportunity ever'
			],
			[
				'id' => 2,
				'title' => 'gig 2',
				'description' => 'also best opportunity ever'
			],
		]
	]);
});
