<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function users(){
        return $this->belongsTo(User::class, 'id', 'users_id');
    }

    public function sources(){
        return $this->belongsTo(NotificationsSources::class, 'id', 'notifications_sources_id');
    }
}
