{{-- @extends('layouts.app')

@section('content') --}}
@include('layouts.head')

<body id="sign">
    
<div class="container row h-100 d-flex align-items-center p-5 flex-wrap">
    <div class="col-lg-5 col-md-3 col-sm-1"></div>
    <div id="signIn" class="col-lg-4 col-md-8 col-sm-5">
        <form id="form" method="POST" action="{{ route('login') }}">
            @csrf
            <p class="signin text-center"> RESET PASSWORD </p>
            <div class="email pt-3">
                {{-- <p>Email Address</p>
                <input name="email" class="input form form-control" type="email"> --}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="email pt-3">
                            <label for="email">{{ __('Email Address') }}</label>
        
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


{{-- 
                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="d-flex justify-content-center">
                            <div class="w-75">
                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="btn">{{ __('Send Password Reset Link') }}</button>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button> --}}
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </form>
    </div>
</div>








{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}
