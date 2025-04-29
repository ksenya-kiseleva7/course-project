<?php

namespace App\Models;

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['role', 'name', 'email', 'password'];

    public function properties()
    {
        return $this->hasMany(Property::class, 'agent_id');
    }

    public function investments()
    {
        return $this->hasMany(Investment::class, 'user_id');
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function consultationRequests()
    {
        return $this->hasMany(ConsultationRequest::class, 'user_id');
    }
}
