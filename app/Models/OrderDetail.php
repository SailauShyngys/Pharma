<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['id', 'sale_id', 'product_id','price'];
    use HasFactory;
    
    public function drugs(){
        return $this->belongsTo(Drug::class,'product_id', 'price');
    }
    
}
