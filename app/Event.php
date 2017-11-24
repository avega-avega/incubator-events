<?php

namespace incubator;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany('incubator\Tag', 'event_tag', 'event_id', 'tag_id');
    }
}
