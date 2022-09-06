@extends('layouts.admin_login_layout')
@section('content')


<div class="container mt-10">
    <form method="POST" action="{{ route('password.email') }}">
    @csrf

        <div class="form-row">
            <div class="col-xl-8 offset-xl-2 mb-2">
                <h3  class="text-white text-uppercase">{{ __('I-Mis Admin Reset Password') }}</h3>
            </div>
            <div  class="col-xl-8 offset-xl-2 mb-2">
                <div class="card mt-2 ">
                <h6 class="mb-0 color-mg mb-2 mt-4 pl-4">Check your email for the password reset link</h6><hr>
                    <div class="card-body">
                        <div class="form-row svc-row">
                            <div class="col-xl-12">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    {{ session('status') }}
                                </div>
                            @endif
                             </div>
                               <br>

                              
                            <div class="col-xl-6">
                                <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                <button class="btn btn-sm btn-mg" type="submit">{{ __('Send Reset Link') }}</button>
                                </div>
                            </div>
                            <div class="col-xl-2"> 
                            <a href="/login" class="btn btn-sm btn-secondary">Cancel</a>
                            </div>
                           
                            </form>

                            <div class="col-xl-12">
                           <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection
