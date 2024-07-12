<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'token',
        'created_at',
        'updated_at',
        'expires_at'
    ];

    public function commune(){
        return $this->belongsTo(Commune::class);
    }
    
}
