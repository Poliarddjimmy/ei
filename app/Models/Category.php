<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'tags',
        'is_published',
        'icon',
        'poster_url',
    ];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = str_slug($category->name);
        });

        static::created(function ($category) {
            if (request()->hasFile('icon') && request()->file('icon')->isValid()) {
                $category->update([
                    'icon' =>  \Storage::disk('public')->put('assets/images/categories/'.$category->slug, request()->file('icon'))
                ]);
            }
            
            if (request()->hasFile('poster_url') && request()->file('poster_url')->isValid()) {
                $category->update([
                    'poster_url' =>  \Storage::disk('public')->put('assets/images/categories/'.$category->slug, request()->file('poster_url'))
                ]);
            }
        });
    }
    
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    
    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }
    
    public function getTagsAttribute($value) {
        return explode(',', $value);
    }
    
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
