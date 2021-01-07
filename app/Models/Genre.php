<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
//    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }

}
