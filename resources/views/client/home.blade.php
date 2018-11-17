@extends('layouts.app')
@section('title','Client Dashboard | Planit')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.clientSideNav')
        <div class="col-md-9 my-1">
            
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissable" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="card">
                <div class="card-header">Your Jobs</div>
                <div class="card-body">
                @forelse($jobs as $job)
                    <div class="card">
                        <div class="card-body">
                        <h3 class="card-title"><a href="{{route('job.show',$job->id)}}" style="text-decoration:none!important;">{{$job->job_title}}</a></h3>
                            {{$job->job_description}}
                        </div>
                        <span class="card-footer text-muted font-weight-light text-right">{{$job->created_at}}</span>
                    </div>
                    <br>
                    @empty
                        <span>No Job Posted Yet.</span>
                    @endforelse
                </div>
            </div>
        </div>
</div>
@endsection
