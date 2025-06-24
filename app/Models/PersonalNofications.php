<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalNofications extends Model
{
    use HasFactory;
    protected $fillable = [];

    protected $table = "tbl_personal_notifications";

    public function users(){
        return $this->belongsTo(User::class,'id', 'users_id');
    }

    public function notifications(){
        return $this->hasMany(Notifications::class,'id','notifications_id');
    }

    public function get_users_notifications($usersId){
        $response = self::where([['users_id','=', $usersId], ['notifications_status','=', 'unread']])->get();
        return $response;
    }
}
