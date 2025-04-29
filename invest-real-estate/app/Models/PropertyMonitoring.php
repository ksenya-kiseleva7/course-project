<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyMonitoring extends Model
{
    use HasFactory;

    protected $fillable = ['property_id', 'status_report', 'report_date'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
