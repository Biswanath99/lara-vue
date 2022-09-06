<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @if (Auth::check()) 
      <meta name="firstname" content="{{ Auth::user()->firstname }}" >
      <meta name="middlename"content="{{ Auth::user()->middlename }}" >
      <meta name="lastname"  content="{{ Auth::user()->lastname }}" >
      <meta name="contactno" content="{{ Auth::user()->contactno }}" >
      <meta name="email"     content="{{ Auth::user()->email }}" >
      <meta name="userId"    content="{{ Auth::user()->id }}" >
      <meta name="intuId"    content="{{ Auth::user()->intuId }}" >

    @endif 
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

   
    
</head>
<body id="page-top" class="grey-bg">
    <div id="wrapper">
        
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" >
                
                <div id="addUser">
                    @yield('addUser')
                </div>

                <div id="manageUsers">
                    @yield('manageUsers')
                </div>

            </div> 
        </div>
    </div>

  
    <script type="text/javascript" src="{{asset('assets/js/Chart.min.js')}}"></script>

</body>
</html>