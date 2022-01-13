<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    use HasFactory;
    protected $table = 've';
    protected $primaryKey = 'id';
    protected $fillable = ['id_ve','mave'];
    public $timestamps = false;
}
