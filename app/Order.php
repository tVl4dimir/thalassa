<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
	public function order_items()
	{
		return $this->hasMany(Order_Items::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

}
