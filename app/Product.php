<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	public function order_item()
	{
		return $this->belongsTo(Order_Item::class);
	}

}
