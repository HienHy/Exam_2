<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable=[

        'content',
        'user_id',
        'newspaper_id',
        'role',
        'status',
        'parent_id'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function newspaper(){

        return $this->belongsTo(Newspaper::class);
    }


    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }



    use HasFactory;
}
