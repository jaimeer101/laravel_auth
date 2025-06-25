<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributesCategory extends Model
{
    protected $table = 'tbl_attributes_category';

    public function users_attributes() {
        return $this->hasMany(UsersAttributes::class, 'category_id', 'id');
    }

    public function get_pages_category($pagesId){
        $response = self::where('pages_id','=', $pagesId)->get();
        return $response;
    }
}
