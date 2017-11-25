<?php

namespace Incubator;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany('Incubator\Tag', 'event_tag', 'event_id', 'tag_id');
    }
}
