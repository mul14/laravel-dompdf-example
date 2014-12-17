<?php

class Client extends Eloquent {

	public function invoices()
	{
		return $this->hasMany('Invoice');
	}

}
