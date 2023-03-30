<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected  $table = 'admins';
    protected $fillable = [

        'user_id',
        'role'
    ];


    const ADMIN =   'ADMIN';
    const BTV =   'BTV';
    const PV =   'PV';

    public function  User(){

        return $this->belongsTo(User::class);
    }
}
