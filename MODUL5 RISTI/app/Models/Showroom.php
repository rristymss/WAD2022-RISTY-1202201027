<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'owner',
        'brand',
        'purchase_date',
        'description',
        'image',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
