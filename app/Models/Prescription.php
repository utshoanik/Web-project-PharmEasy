<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $table='prescriptions';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'user_id', 'address','photo'];

}
