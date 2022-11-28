<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = ['id', 'drug_name', 'country', 'price'];
    use HasFactory;
    
    public function orders(){
        return $this->hasMany(Order::class, 'id');
    }
    public function order_details(){
        return $this->hasMany(OrderDetail::class, 'id', 'price');
    }
    public function pharmacy_drugs(){
        return $this->hasMany(PharmacyDrug::class, 'id');
    }
}
