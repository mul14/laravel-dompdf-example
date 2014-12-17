<?php

class Invoice extends Eloquent {

	public function client()
	{
		return $this->belongsTo('Client');
	}

}
