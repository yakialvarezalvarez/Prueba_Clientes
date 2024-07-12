<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'description',
        'created_at',
        'updated_at'
    ];

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
}
