<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'price',
      'users_id'
    ];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }
}