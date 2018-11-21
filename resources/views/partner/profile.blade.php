@extends('layouts.app')
@section('title','Profile | '.Auth::user()->account->business_name)
@section('content')
<div class="container">
@if(session('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
   <div class="row justify-content-center">

        <!-- Left Column -->
        <div class="col-md-8">
            {{-- Start Column --}}
            <div class="card my-2">
                <div class="card-body">
                    <h1 class="card-title">{{Auth::user()->account->business_name}}</h1>
                    <div class="form-group">
                    <label for="business_desc">Summary</label>
                        <textarea name="business_desc" id="business_desc" cols="30" rows="10" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                </div>
            </div>

            <div class="card my-2">
                <div class="card-header">
                    Services Offered
            
                </div>
                <div class="card-body">
                    <div class="form-inline">
                        <datalist id="services-list"></datalist>
                        <input type="text mx-1" placeholder="Add Service" class="form-control">
                        <button class="btn btn-primary mx-1">Add</button>
                    </div>
                    <div id="services" class="m-3">
                    @forelse($services as $service)
                        <span class="alert alert-primary alert-dismissible fade show m-1" role="alert">
                        {{$service->service_name}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </span>
                    @empty
                        <span>No Skills Added Yet</span>
                    @endforelse
                    </div>
                </div>
            </div>

            {{-- End Column --}}
        </div>

        <!-- Right Column -->
        <div class="col-md-3">
            <div class="card my-2">
                <div class="card-header">Rates</div>
                <div class="card-body">rates</div>
            </div>
        </div>
    </div>
</div>
@endsection