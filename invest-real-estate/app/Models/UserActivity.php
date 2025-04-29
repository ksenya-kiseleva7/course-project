<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserActivity extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'activity_type', 'activity_date', 'details'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
