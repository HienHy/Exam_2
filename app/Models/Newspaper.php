<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{

    protected $table = 'newspaper';
    protected $fillable = [

        'title',
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

            return $query -> where("title","like","%$search%");
        }
        return  $query;

    }


    public function Title(){
        return $this->belongsTo(Title::class);
    }
}
