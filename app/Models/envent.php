<?php

namespace App\Models;

namespace App\Models;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class envent extends Model
{
    use HasFactory;
    protected $table = 'envents';
    protected $primaryKey = 'id';
    protected $fillable = ['sk_name', 'sk_address', 'sk_price', 'sk_status', 'sk_time', 'sk_detail', 'sk_img'];
    public $timestamps = false;
}
