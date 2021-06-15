<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'supplier'
    ];

    public function makanan(){
        return $this->hasMany(Makanan::class, 'bahanBaku_id');
    }

}
