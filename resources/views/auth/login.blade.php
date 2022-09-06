@extends('layouts.admin_login_layout')
@section('content')
    
<body class="bg-magenta">
    <section>
   
        <div class="container mt-10">
        <h2 class="text-white text-uppercase text-center mb-4"> I-Mis Admin Login</h2>
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                @if(Session::has('message'))
                     <div class="alert alert-danger text-center">{{Session::get('message')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                     </div>
                  @endif
                    <div class="login-box">
                         <form method="POST" action="{{ route('login') }}">
                          @csrf
                            
                            <div class="form-group">
                              <input style="border:1px solid #702e2e; " class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>

                           <div class="form-group">
                              <div class="input-group">
                                 <input style="border:1px solid #702e2e; " class="form-control @error('password') is-invalid @enderror" minlength="8" type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                                 <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button></div>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                              </div>
                          </div>

                            <div class="form-group">
                               
                            <div class="form-group text-center mb-4">
                            <button class="btn btn-block btn-sm btn-custom" type="submit"><strong>{{ __('Login') }}</strong></button>
                            </div>
                            <div class="form-group mb-0">
                            <!-- <p class="text-muted font-md mb-0"><strong>If you donot have a login account </strong><a href="{{ route('register') }}"><strong>click here</strong></a>&nbsp;to register</p> -->
                                
                               
                                <p class="text-muted font-md mb-0 text-center"><strong>forgot your password? </strong><a href="{{route('password.request')}}"><strong>click here</strong></a>&nbsp;to reset password</p>
                               
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
@endsection
