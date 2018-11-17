@extends('layouts.app')
@section('title','Post a Job | Planit')
@section('content')
<div class="container">

    <div class="row justify-content-center">
       @include('components.clientSideNav')

        <div class="col-md-9 my-1">

            <div class="card">
                <div class="card-header">
                    Create A Job
                </div>
                <div class="card-body">

                    <form action="{{route('job.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="job_author" value="{{Auth::user()->account->id}}">
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" name="job_title" id="job_title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="job_description">Job Description</label>
                            <textarea name="job_description" id="job_description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Post" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection