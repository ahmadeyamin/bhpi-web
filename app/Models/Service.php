<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Storage;

class Service extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    /**
     * Get all of the links for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function links(): HasMany
    {
        return $this->hasMany(ServiceItem::class, 'service_id');
    }

    public function getImageUrlAttribute()
    {
        if ($this->getRawOriginal('image')) {
            return asset(Storage::url($this->getRawOriginal('image')));
        }else{
            return "https://placehold.co/400?text=".urlencode($this->name)."&font=roboto";
        }
    }
}
