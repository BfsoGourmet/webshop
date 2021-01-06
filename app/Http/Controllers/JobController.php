<?php

namespace App\Http\Controllers;

use App\Models\FailedJob;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        //$jobs = DB::select("select * from jobs");
        $jobs = Job::get();
        $failedJobs = FailedJob::get();
        return view('jobs.index', ['jobs' => $jobs, 'failedJobs' => $failedJobs]);
    }
}
