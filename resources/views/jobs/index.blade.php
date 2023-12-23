@extends('layouts.app')
@section('content')

    <h2>Jobs</h2>

    <hr>

    @if(count($jobs) > 0)
        @foreach($jobs as $item)
            <div class="item">
{{--                {{ Form::open(['route' => 'addFavorite', 'method' => 'POST']) }}--}}

{{--                {{Form::hidden('job_id', $item->id)}}--}}
{{--                {{Form::submit('Add to Favourites', ['class' => 'btn btn-primary'])}}--}}

{{--                {{Form::close()}}--}}

                <h4><a href="/jobs/{{$item->id}}">{{ $item -> title }}</a></h4>
                <p>Budget: $ {{ $item->budget }}</p>
                <p>{{ $item ->description }}</p>
            </div>

        @endforeach
    @endif
@endsection
