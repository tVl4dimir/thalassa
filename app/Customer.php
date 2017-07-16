<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'surname', 'telephone', 'mobile', 'email', 'city', 'location', 'road', 'roadNumber', 'postalCode', 'infos'];

    public function order()
    {
    	return $this->hasMany(Order::class);
    }
}
