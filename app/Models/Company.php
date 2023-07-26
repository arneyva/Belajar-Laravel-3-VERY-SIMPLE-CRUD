<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // cumaa ada 3 tambahan (id dan timestamp dimasukin)
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'address'];
}
