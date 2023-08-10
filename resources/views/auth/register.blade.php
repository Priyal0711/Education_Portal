@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div style="display: flex; justify-content: center;" class="card-header"><h1>Register</h1></div>
             <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="mobile" class="col-md-4 col-form-label text-md-end text-start">Mobile</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" value="{{ old('mobile') }}">
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="city" class="col-md-4 col-form-label text-md-end text-start">City</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}">
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="access_type" class="col-md-4 col-form-label text-md-end text-start">Select Access Type:</label>
                        <div class="col-md-6">
                            <select name="access_type" id="access_type" class="form-control">
                                @foreach ($accessTypes as $access)
                                    <option value="{{ $access->id }}">{{ $access->access_type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Register">
                    </div>
                    
                    <div style="display: flex; justify-content: center;">
                        <h6>Already registered?</h6>
                        <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
