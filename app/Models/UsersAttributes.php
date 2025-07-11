<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersAttributes extends Model
{
    protected $table = 'tbl_users_attributes';

    public function category(){
        return $this->belongsTo(AttributesCategory::class,'id', 'category_id');
    }

    public function users_details(){
        return $this->hasOne(UsersDetails::class,'users_attributes_id','id');
    }

    public function get_personal_info_attributes(){
        $usersProfileCondition = [['category_id', '=', '1'], ['id', '!=', '7']];
        $response = self::where($usersProfileCondition)->get();
        return $response;
    }

    public function get_required_personal_info_attributes(){
        $usersProfileCondition = [['category_id', '=', '1'], ['id', '!=', '7'], ['required', '=', '1']];
        $response = self::where($usersProfileCondition)->get();
        return $response;
    }

    public function get_editable_personal_info(){
        $editableAttributes = [1,2,3,4,6];
        $usersProfileCondition = [[]];
        $response = self::where('category_id', '=', '1')
                        ->whereIn('id', $editableAttributes)
                        ->get();
        return $response;
    }
}
