@extends('layouts.app')
@section('content')

    <h2>{{$thread->Job->title}} - Messages</h2>
    <p>{{ $thread -> Job -> description }}</p>

    <hr>

    @if(count($thread->Messages) > 0)
        <table>
            @foreach($thread -> Messages as $message)
                <tr>
                    <th style="padding-right: 10px;">{{ $message -> User -> name }}</th>
                    <td>{{ $message->message }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No messages Found</p>
    @endif

    <hr>

    {{ Form::open(['route' => ['createMessage', $thread->id], 'method' => 'POST']) }}

    <div class="form-group">
        {{Form::label('message', 'create a Message')}}
        {{Form::textArea('message', '', ['class' => 'form-control', 'placeholder' => 'Message'])}}
        {{Form::submit('Send Message')}}

    </div>

    {{Form::close()}}
@endsection
