@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
@include('components.clientSideNav')
        <div class="my-1 col-md-8">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('success')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Edit Job
                </div>
                <div class="card-body">

                    <form action="{{route('job.update',$job->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="job_author" value="{{Auth::user()->account->id}}">
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" name="job_title" id="job_title" value="{{$job->job_title}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="job_description">Job Description</label>
                            <textarea name="job_description" id="job_description" cols="30" rows="10" class="form-control">{{$job->job_description}}</textarea>
                        </div>

                        <input type="submit" value="Update" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection