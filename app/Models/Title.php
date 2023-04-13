<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{

    protected $table='title';
    protected $fillable =[
        'name',
        'icon',
        'status',

    ];
    use HasFactory;
    public function Newspaper(){

        return $this->hasMany(Newspaper::class);
    }
}
