<?php

namespace incubator\Http\Controllers;

use Illuminate\Http\Request;
use incubator\{Event, Tag};
use incubator\Repositories\EventRepository;

class EventsController extends Controller
{
    protected $events;

    /**
    * Создание нового экземпляра контроллера.
    *
    * @param  EventRepository  $events
    * @return void
    */
    public function __construct(EventRepository $events)
    {
        $this->events = $events;
    }

    /**
    * Отображение списка событий.
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
        return view('events.index', [
            'events' => $this->events->get()
        ]);
    }

    /**
    * Отображение списка событий по тегу.
    *
    * @param  string $tagId
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function findByTag($tagId)
    {
        return view('events.index', [
            'events' => $this->events->findByTagId($tagId)
        ]);
    }

    /**
    * Отображание события.
    *
    * @param  string $eventId
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function showEvent($eventId)
    {
        return view('events.show', [
            'event' => $this->events->find($eventId)
        ]);
    }
}
