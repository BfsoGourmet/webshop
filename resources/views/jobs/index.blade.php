@extends('layouts.app')

@section('content')
    @include('partials.messages')

    <h1>{{__('job.jobs')}}</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('job.payload')}}</th>
            <th scope="col">{{__('job.attempts')}}</th>
        </tr>
        </thead>
        <tbody>

        @foreach($jobs as $job)
            <tr>
                <th scope="row">{{$job->id}}</th>
                <td scope="row"><code>{{$job->payload}}</code></td>
                <td scope="row">{{$job->attempts}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br>
    <br>
    <h1>{{__('job.failed-jobs')}}</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('job.payload')}}</th>
            <th scope="col">{{__('job.exception')}}</th>
        </tr>
        </thead>
        <tbody>

        @foreach($failedJobs as $failedJob)
            <tr>
                <th scope="row">{{$failedJob->id}}</th>
                <td scope="row"><code>{{$failedJob->payload}}</code></td>
                <td scope="row"><code>{{$failedJob->exception}}</code></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
