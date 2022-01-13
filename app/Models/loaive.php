<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaive extends Model
{
    use HasFactory;
    protected $table = 'loaive';
    protected $primaryKey = 'id';
    protected $fillable = ['tenloai', 'giave', 'mave'];
    public $timestamps = false;
}
