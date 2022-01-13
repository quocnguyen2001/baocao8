<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = ['loaive', 'soluong', 'ngaydung', 'hoten', 'email', 'sdt', 'id_ve'];
    public $timestamps = false;
}
