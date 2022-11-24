<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageUrlAttribute()
    {
        if ($this->getRawOriginal('url')) {
            return asset(Storage::url($this->getRawOriginal('url')));
        }else{
            return null;
        }
    }
}
