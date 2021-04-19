<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table    = 'forum';
    protected $fillable = ['id','user_id','topic','created_at'];
    
    public function user()
	{
		return $this->belongsTo(User::class);
	}
}