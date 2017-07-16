<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    
	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function product()
	{
		return $this->hasOne(Product::class);
	}

}
