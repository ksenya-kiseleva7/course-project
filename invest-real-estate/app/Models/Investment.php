<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Investment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'property_id', 'amount', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
