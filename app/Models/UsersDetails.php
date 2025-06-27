<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Termwind\Components\Raw;

class UsersDetails extends Model
{
    protected $fillable = ['users_attributes_id', 'value'];
    protected $table = "tbl_users_details";

    public function users(){
        return $this->belongsTo(User::class, 'id', 'users_id');
    }

    public function users_attributes(){
        return $this->belongsTo(UsersAttributes::class,'id','users_attributes_id');
    }

    public function save_users_details($attributes, $data, $usersId){
        $response = "";
        try{
            $submitData = array();
            foreach($attributes as $attr){
                $fieldName = $attr->input_code."_".$attr->code;
                
                $rawData = array(
                    "users_id" => $usersId, 
                    "users_attributes_id" => $attr->id, 
                    "value" => $data->get($fieldName), 
                    "created_by" => $usersId, 
                    "created_at" => date("Y-m-d H:i:s"),
                );
                $usersAttrCondition = [['users_id','=',$usersId],['users_attributes_id', '=', $attr->id]];
                $checkIfAttrExists = self::where($usersAttrCondition)->exists();
                //echo "qwe".$checkIfAttrExists;
                if($checkIfAttrExists){
                    
                    $rawData["updated_by"] = $usersId;
                    $rawData["updated_at"] = date("Y-m-d H:i:s");
                }
                $submitData[] = $rawData;
            }
            $insert = DB::table('tbl_users_details')
                ->upsert($submitData, ['users_id', 'users_attributes_id'], ['value', 'updated_by', 'updated_at']);
            $response = 1;
        }
        catch(\Illuminate\Database\QueryException $e){
            $response = $e->getMessage();
        }
        
        return $response;
    }

    public function get_users_age($usersId){
        $condition = [['users_id','=', $usersId], ['users_attributes_id','=','6']];
        $response = self::where($condition)
                    ->select(DB::raw('year(now())-year(`value`) as `age`'))
                    ->first();
        return $response;
    }
}
