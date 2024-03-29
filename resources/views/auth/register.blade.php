@extends('layouts.layout')

@section('content')
<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card  shadow-sm p-5 login  border-dark"> 
                <div class="card-body">
                    <h2 class="text-center mb-4 font-weight-bold">{{ __('Register') }}</h2> 
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="mb-4"> 
                            <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4"> 
                            <label for="email" class="col-form-label text-md-end">{{ __('Adresse Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4"> 
                            <label for="password" class="col-form-label text-md-end">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4"> 
                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mb-4 d-grid gap-2 d-md-flex justify-content-md-center"> 
                            <button type="submit" class="btn btn-primary px-5 py-2 fw-bold">{{ __('Register') }}</button> <!-- Changed button text to French -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
