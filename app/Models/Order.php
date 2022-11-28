<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'drug_id', 'user_id'];
    use HasFactory;
    
    public function drugs(){
        return $this->belongsTo(Drug::class, 'drug_id');
    }
}
