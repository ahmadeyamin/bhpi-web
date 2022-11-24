<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('/img/bhpi.png');
        }
        return asset(Storage::url($this->image));
    }
}
