<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekPajak extends Model
{
    use HasFactory;
    protected $table = 'objek_pajak';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
