<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function topik()
    {
        return $this->belongsToMany(Topik::class);
    }
}
