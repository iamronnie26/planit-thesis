@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="card">
            <div class="card-body">
            
            <section>
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h1>
                    </div>
                </div>
            </section>
            <br>
            <section>
                <div class="row">
                    <div class="col-md-8">
                        <h4>Summary</h4>
                        <div id="summary">
                        None
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4>Skills</h4>
                    </div>
                </div>
            </div>
            </section>
            <br>


            </div>
        </div>
   </div>
@endsection