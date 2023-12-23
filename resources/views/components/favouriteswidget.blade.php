@if($favouriteswidget != false)
    <h2>My favourites</h2>

    @php
        $count = $favouriteswidget->count();
    @endphp

    @if($count > 0)
        @foreach($favouriteswidget->get() as $item)
            <a href="/jobs/{{ $item->job->id }}">{{ $item->job->title }}</a>
        @endforeach
    @else
        <p>You have not saved any favourites</p>
    @endif
@endif
