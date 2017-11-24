<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['judul', 'deskripsi'];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function category() {
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
