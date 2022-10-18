<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $guarded = [];

    /**
     * Get the technology that owns the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class);
    }

    public function getAvatarImgAttribute()
    {
        if ($this->getRawOriginal('avatar')) {
            return asset(Storage::url($this->getRawOriginal('avatar')));
        }else{
            return "https://ui-avatars.com/api/?name=$this->name";
        }
    }

    /**
     * The managements that belong to the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function managements(): BelongsToMany
    {
        return $this->belongsToMany(Management::class, 'management_teacher');
    }
}
