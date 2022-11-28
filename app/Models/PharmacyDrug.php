<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyDrug extends Model
{
    protected $fillable = ['id', 'drug_id', 'pharmacy_id'];
    use HasFactory;
    public function pharmacy(){
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id');
    }
    
    public function drugs(){
        return $this->belongsTo(Drug::class, 'drug_id');
    }
}