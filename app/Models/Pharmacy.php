<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = ['id', 'name', 'adress'];
    use HasFactory;
    public function phamacy_drugs(){
        return $this->hasOne(PharmacyDrug::class, 'id');
    }
   
}
