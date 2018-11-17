@extends('layouts.registration')

@section('content')
    <div class="container">

    <div class="card">
    <div class="card-header">Register as Client</div>
        <div class="card-body">
        <form action="{{route('client.register')}}" method="post">
        @csrf
        <div class="form-group row">
                            <label for="contact_no" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact_no" type="text" class="form-control" name="contact_no" required>
                            </div>
                            @if ($errors->has('contact_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
        <br><br>
        <div class="card-title">Password</div>
            <div class="form-group">
                <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Create Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                </div><br>
                <div class="card-title">Address</div>

                <div class="form-group row">
                    <label for="street" class="col-md-4 col-form-label text-md-right">Street Name</label>
                    <div class="col-md-6">
                        <input type="text" name="street_name" id="street" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="barangay" class="col-md-4 col-form-label text-md-right">Barangay</label>
                    <div class="col-md-6">
                        <input type="text" name="barangay" id="barangay" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">City / Municipality</label>
                    <div class="col-md-6">
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="province" class="col-md-4 col-form-label text-md-right">Province</label>
                    <div class="col-md-6">
                        <input type="text" name="province" id="province" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="region" class="col-md-4 col-form-label text-md-right">Region</label>
                    <div class="col-md-6">
                        <input type="text" name="region" id="region" class="form-control">
                    </div>
                </div>

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>  
@endsection