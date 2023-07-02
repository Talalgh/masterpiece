<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['experiences', 'description', 'education'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subcribtions()
    {
        return $this->hasMany(Subcribtion::class);
    }
    public function subscribs()
    {
        return $this->hasMany(Subscrib::class);
    }

}
