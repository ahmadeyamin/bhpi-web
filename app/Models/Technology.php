<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    /**
     * Get all of the teachers for the Technology
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}
