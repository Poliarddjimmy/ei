<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'url', 
        'imageable_id',
        'imageable_type',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($input) {
            $input['slug'] = Str::uuid();
        });

        self::created(function () {

        });

        self::updating(function(){
            
        });
    }
    
    public function imageable()
    {
        return $this->morphTo(__FUNCTION__, 'imageable_type', 'imageable_id');
    }
}