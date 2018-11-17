@extends('layouts.app')

@section('content')
    Hello {{Auth::user()->firstname}}!
@endsection