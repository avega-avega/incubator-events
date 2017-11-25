<?php

namespace Incubator;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    public function events()
    {
        return $this->belongsToMany('Incubator\Event', 'event_tag', 'tag_id', 'event_id');
    }
}
