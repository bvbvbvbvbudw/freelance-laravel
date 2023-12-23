@extends('layouts.app')
@section('content')

    <h2>Job Details</h2>
    {{ Form::open(['route' => 'addFavorite', 'method' => 'POST']) }}

    {{Form::hidden('job_id', $data['job']->id)}}
    {{Form::submit('Add to Favourites', ['class' => 'btn btn-primary'])}}

    {{Form::close()}}
    <hr>

    <h4>{{$data['job']->title}}</h4>
    <p>Budget: $ {{ $data['job']->budget }}</p>
    <p>{{ $data['job'] ->description }}</p>

    <hr>

    <h3>Messages</h3>
    @if($data['userType'] == 'Freelancer')
        @if($data['threads'] != false)
            @foreach($data['threads'] as $item)
                <a href="/threads/{{$item->id }}" class="btn btn-primary">View conversation</a>
            @endforeach
        @else
            {{Form::open(['route' => 'createThread', 'method' => "POST"])}}

            {{Form::hidden('job_id', $data['job'] -> id)}}
            {{Form::submit('Send Message', ['class' => 'btn btn-primary'])}}

            {{Form::close()}}
        @endif
    @endif
    @if($data['userType'] == 'Client')
        @if(count($data['threads']) > 0)

            @foreach($data['threads'] as $item)
                <h4>Participants</h4>
                <ul>
                    @if(count($thread->Users) > 0)
                        @foreach($thread->Users as $itemUser)
                            <li>{{ $itemUser -> name }}</li>
                        @endforeach
                    @endif
                </ul>
                <a href="/threads/{{$item->id}}" class="btn btn-primary">View conversation</a>

            @endforeach
        @else
            <p>No messages Found</p>
        @endif
    @endif
@endsection
