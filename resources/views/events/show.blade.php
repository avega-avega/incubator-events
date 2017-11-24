    <a href="{{route('home')}}">Список событий</a>
    <p>{{$event->title}}</p>
    <p>{{$event->content}}</p>
    <p>{{$event->created_at}}</p>

    @foreach ($event->tags as $tag)
        <a href="{{route('event.by_tag', $tag->id)}}">{{$tag->name}}</a>
    @endforeach
