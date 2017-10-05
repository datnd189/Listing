<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
	protected $table = "Listings";
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
