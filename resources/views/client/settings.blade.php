@extends('layouts.app')
@section('title','Settings | Planit')
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
                <div class="card-header">Settings</div>
                <div class="card-body">
                   {{$user}}
                   {{$user_details}}
                </div>
            </div>
        </div>
</div>
@endsection
