<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Property extends Model
{
    use HasFactory;

    protected $fillable = ['agent_id', 'title', 'description', 'price', 'location', 'status'];

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function investments()
    {
        return $this->hasMany(Investment::class, 'property_id');
    }

    public function monitoringReports()
    {
        return $this->hasMany(PropertyMonitoring::class, 'property_id');
    }
}
