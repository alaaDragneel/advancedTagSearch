<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function videos()
    {
        /**
         * [$this->belongsToMany description]
         * @param First @param The Main Table Relation
         * @param Second @param The Storing Table Relation
         * @param thired @param The Column Relation
         * @param Second @param The Column Relation
         */

        return $this->belongsToMany('App\Video', 'App\Link_Tag', 'video_id', 'tag_id');
    }
}
