<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{

    protected $table = 'newspaper';
    protected $fillable = [

        'name',
        'content',
        'image',
        'user_id',
        'title_id',
        'publish_date',
        'views_count',
        'status',


    ];
    use HasFactory;



    public function scopeSearch($query,$search){
        if ($search && $search !=""){

            return $query -> where("name","like","%$search%");
        }
        return  $query;

    }

    public function scopeTitleFiler($query,$title_id){
        if ($title_id && $title_id !=0){
            return $query->where("title_id",$title_id);

        }
        return $query;
    }


    public function Title(){
        return $this->belongsTo(Title::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
