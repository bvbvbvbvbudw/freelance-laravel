<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $current_user;
    private $request_user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $username = $request->route('username'); // Отримання значення параметра 'username' з URL
            $this->current_user = Auth::user();
            $this->request_user = User::where('name', $username)->first();
            return $next($request);
        });
    }
    public function index()
    {
        $user = Auth::user();
//        $jobs = $user->jobs()->all();
        $jobs = Job::all();

//        return view('jobs.index')->with('jobs', $jobs);
//        return 123;
        return view('dashboard.pages.jobs.jobs', ['user' => $this->current_user, 'req_user' => $this->request_user])->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'budget' => ['required', 'numeric'],
        ]);

        $job = new Job;

        $job -> title = $request -> input('title');
        $job -> description = $request -> input('description');
        $job -> budget = $request -> input('budget');

        $user = Auth::user();
        $user -> jobs()->save($job);

        return redirect('/jobs')->with('success', 'The job was created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::find($id);

        if (!$job) {
            abort(404); // Job not found
        }

        $user = Auth::user();
        $userType = null;
        $threads = null;

        switch ($user->role->name) {
            case 'Freelancer':
                $threads = $user->threads()->where('job_id', $job->id)->get();
                $userType = 'Freelancer';
                break;
            case 'Client':
                $threads = $job->threads;
                $userType = 'Client';
                break;
            default:
                // Handle other roles or set $userType to false
                break;
        }

        $data = [
            'job' => $job,
            'userType' => $userType,
            'threads' => $threads,
        ];

//        return view('jobs.show')->with('data', $data);
        return view('dashboard.pages.jobs.jobs_details',['user' => $this->current_user, 'req_user' => $this->request_user])->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
