<?php

namespace incubator\Repositories;

use incubator\{Event, Tag};

class EventRepository
{
    /**
    * Получить все события по тегу.
    *
    * @param  string $tagId
    * @return Collection
    */
    public function findByTagId($tagId)
    {
        $tag = Tag::find($tagId);
        return $tag->events()
                   ->orderBy('created_at', 'desc')
                   ->paginate(10);
    }

    /**
    * Возвращает список событий, отсортированных по дате, с пагинацией.
    *
    * @return Collection
    */
    public function get()
    {
        return Event::orderBy('created_at', 'desc')
                    ->paginate(10);
    }

    /**
    * Возвращает конкретное событие.
    *
    * @param  string $eventId
    * @return Event
    */
    public function find($eventId)
    {
        return Event::find($eventId);
    }
}
