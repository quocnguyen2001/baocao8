<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['name_order','stk_payment', 'hsd_the', 'codeCVV', 'status','id_ve','time'];
    public $timestamps = false;
}
