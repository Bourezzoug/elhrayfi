<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['title','excerpt','body','slug','seo_title','meta_description','image','status'];
    public function scopeSearch($query, $term){
        $query->where(function ($query) use ($term){
            $query->where('title','like', "%$term%")
                ->orWhere('excerpt','like', "%$term%")
                ->orWhere('body','like', "%$term%")
                ->orWhere('status','like', "%$term%");
        });
    }
}
