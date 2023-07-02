<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcribtion extends Model
{
    use HasFactory;
    protected $table = 'subscriptions'; // Replace with your table name

    protected $fillable = ['description', 'date', 'total_price','coach_id'];
    public function coachs()
    {
        return $this->belongsTo(Coach::class);
    }
}
