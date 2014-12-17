<?php

Route::get('/', function()
{
	return link_to('hello') . ' - ' . link_to('invoice');
});

// Contoh basic
Route::get('/hello', function()
{
	$pdf = PDF::loadView('hello');

	return $pdf->stream();
});

// Contoh passing variable ke view
Route::get('/invoice', function()
{
	$data = [
		'id'     => '1234',
		'client' => 'PT Kumis Kucing',
		'amount' => 1404500,
		'created_at' => Carbon\Carbon::parse('2014-12-20'),
	];

	// Ceritanya ini Eloquent
	$invoice = (object) $data;

	$pdf = PDF::loadView('invoice', compact('invoice'));

	return $pdf->stream();
});
