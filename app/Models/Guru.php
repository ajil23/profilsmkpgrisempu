<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $primaryKey = 'id';
    protected $fillable = [ 'kode', 'nama', 'jabatan','kelamin', 'lahir', 'image'];
}
