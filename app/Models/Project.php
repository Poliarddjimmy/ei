<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'category_id',
        'year',
        'month',
        'poster_url',
    ];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $code = str_random(4);
            while (Project::where('slug', 'project-'. $code)->exists()) {
                $code = str_random(4);
            }
            $project->slug = 'project-'. $code;
        });

        static::created(function ($project) {
            if (request()->hasFile('poster_url') && request()->file('poster_url')->isValid()) {
                $project->update([
                    'poster_url' =>  \Storage::disk('public')->put('assets/images/projects/'.$project->slug, request()->file('poster_url'))
                ]);
            }
            
            if (request()->hasFile('images')) {
                $images = request()->file('images');
                foreach ($images as $image) {
                    if ($image->isValid()) {
                        $project->images()->create([
                            'imageable_id' => $project->id,
                            'imageable_type' => get_class($project),
                            'url' => \Storage::disk('public')->put('assets/images/projects/'.$project->slug, $image)
                        ]);
                    }
                }
            }
        });
    }
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
