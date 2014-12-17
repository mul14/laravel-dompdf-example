<?php

Route::get('/', function()
{
	$pdf = PDF::loadView('hello');

	return $pdf->stream();
});
