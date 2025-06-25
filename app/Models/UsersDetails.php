<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersDetails extends Model
{
    protected $table = "tbl_users_details";

    public function users(){
        return $this->belongsTo(User::class, 'id', 'users_id');
    }

    public function users_attributes(){
        return $this->belongsTo(UsersAttributes::class,'id','users_attributes_id');
    }
}
