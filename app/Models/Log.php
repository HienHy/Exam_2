<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table ='log';
    protected $fillable = [
      'newspaper_id',
      'log_content'

    ];
    use HasFactory;
}
