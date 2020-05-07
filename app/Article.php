<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
     // Mass asigned
     protected $fillable = ['title', 'slug', 'description_short', 'description', 'image'
                            , 'published','image', 'image_show', 'created_by',
                            'meta_title','meta_description','meta_keyword','modefied_by'];


    // Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40 ).  "-"
                                                                        . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Polymorph relation with categories

    public function categories(){
        return $this->morphToMany('App\Category', 'categoryable');
    }


    // Scope

    public function scopeLastArticles($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
