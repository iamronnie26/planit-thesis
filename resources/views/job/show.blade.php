@extends('layouts.app')

@section('content')
    <div class="container">
    <form action="{{route('job.destroy',$job->id)}}" method="POST">
    @method('DELETE')
    @csrf
    </form>
        <div class="row">
            <div class="offset-2 my-1 col-md-8">
                <div class="card">
                    <div class="card-header">
                    <span class="align-middle">Job Details</span>
                    <span class="float-right">
                        <a href="{{route('job.edit',$job->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" form="deleteForm">Delete</button>
                    </span>
                    </div>
                    <div class="card-body" style="min-height:200px!important;">
                    <h4 class="card-title">
                        {{$job->job_title}}
                    </h4>
                    <p>
                    {{$job->job_description}};
                    </p>

                    </div>
                    <span class="card-footer text-right">{{$job->created_at}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection