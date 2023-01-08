<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templete extends Model
{
    protected $primaryKey = 'templete_id';
    protected $fillable = ['name'];
    use HasFactory;
}
