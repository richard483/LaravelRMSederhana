<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'bahanBaku_id',
        'recipe',
        'price'
    ];
    
    public function bahanBaku(){
        return $this->belongsTo(BahanBaku::class, 'bahanBaku_id');
        //catatan: bisa gapake parameter foreign_id nya, tapi klo disini eror
    }
}
