<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    protected $table    = 'sk';
    protected $fillable = ['id','user_id','no_sk','judul','keterangan','file','tanggal_sah'];
    protected $dates    = ['tanggal_sah'];
    
    public function user()
	{
		return $this->belongsTo(user::class);
	}
}
