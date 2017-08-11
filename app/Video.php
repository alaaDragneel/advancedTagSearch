<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function tags()
    {
        /**
         * [$this->belongsToMany description]
         * @param First @param The Main Model Table Relation
         * @param Second @param The Storing NOTE Table NOT Model table  Relation
         * @param thired @param The Column Relation
         * @param Second @param The Column Relation
         */

        return $this->belongsToMany('App\Tag', 'link__tags', 'video_id', 'tag_id');
    }

    public function cat()
    {
        return $this->belongsTo('App\Category', 'cat_id');
    }

    public function scopeGetByRelation($query, $relationName, $coloumnName, $key)
    {
        // NOTE whereHas('relation name', anonymous function)
        
        return $query->whereHas($relationName, function ($q) use ($coloumnName, $key) {
            return $q->where($coloumnName, $key);
        });
    }
}
