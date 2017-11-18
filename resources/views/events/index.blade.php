@foreach ($events as $event)

    <a href="{{route('event.show', $event->id)}}">{{$event->name}}</a>
    <p>{{strip_tags($event->description)}}</p>
    <p>{{$event->content}}</p>
    <p>{{$event->created_at}}</p>
    @foreach ($event->tags as $tag)
        <a href="{{route('event.by_tag', $tag->id)}}">{{$tag->name}}</a>
    @endforeach
    <br>
    <br>
@endforeach

    {!! $events->render() !!}
