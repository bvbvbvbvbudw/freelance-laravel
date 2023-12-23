<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    //
    public function createThread(Request $request)
    {
        $this->validate($request, [
            'job_id' => ['required', 'integer']
        ]);

        $thread = new Thread;

        $thread->job_id = $request -> input('job_id');
        $thread->save();

        $freelancer = Auth::user();
        $client = $thread->Job->user;

        $thread->Users()->save($freelancer);
        $thread->Users()->save($client);

        return redirect('/threads/'.$thread->id);
    }

    public function createMessage(Request $request,$id)
    {
        $this->validate($request, [
           'message' => ['required', 'string']
        ]);

        $message = new Message;
        $message -> message = $request -> input('message');
        $message->thread_id = $id;

        $user = Auth::user();
        $user->Messages()->save($message);

        return redirect('/threads/'.$id)->with('success', 'Message Saved!');
    }
    public function showThreads($id)
    {
        $thread = Thread::find($id);

        return view("threads.show")->with('thread', $thread);
    }
}
