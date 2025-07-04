<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reactions extends Model
{
    use HasFactory;

    protected $fillable = [
       'code','name','icon'
    ];
    protected $table = 'tbl_reactions';

    public function posts_reactions() {
        return $this->hasMany(PostsReactions::class,'reactions_id','id');
    }
}
