<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'region_id',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];
    
    public function region(){
        return $this->belongsTo(Region::class);
    }
}
