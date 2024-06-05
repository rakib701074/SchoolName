
<!DOCTYPE html>
<html lang="en" class="bg-dark">

<head>
    <meta charset="utf-8" />
    <title>Notebook | Web Application</title>
    <meta name="description"
        content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{url('frontend/css/font.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('frontend/css/app.v1.css')}}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xxl"> <a class="navbar-brand block"></a>
            <section class="panel panel-default bg-white m-t-lg">
                <header class="panel-heading text-center"> <strong>LOGIN</strong> </header>
                
                <form action="{{route('login')}}" class="panel-body wrapper-lg" method="post">
                    @csrf
                    <div class="form-group">
                         <label class="control-label">Email</label>
                        <input type="email" name="email"
                            placeholder="Enter Your Email" class="form-control input-lg"> 
                            
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    <div class="form-group"> 
                        <label class="control-label">Password</label> 
                        <input type="password" name="password"
                            id="inputPassword" placeholder="Password" class="form-control input-lg">
                             
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                         </div>
                    <div>
                         {{-- <label>  --}}
                        {{-- <input type="checkbox">
                        <span class="ms-2 text-sm text-gray-600 text-center">{{ __('Remember me') }}</span> --}}
                    {{-- </label>  --}}
                </div>
                
                @if (Route::has('password.request'))
                     <a  href="{{ route('password.request') }}"
                        class="pull-left m-t-xs text-bold">
                        <small>
                          
                            Forgot password ?

                        </small>
                    </a> 
                        @endif

                        <div class="pull-right">
                        <button type="submit"
                         class="btn btn-primary">Sign in</button>
                        </div><br><br>
                    <div class="line line-dashed"></div>
                    {{-- <p class="text-muted text-center"><small>Do not have an account?</small></p> --}}
                     <a href="{{url('/register')}}"
                        class="btn btn-default btn-block">Create an account</a>
                </form>
                 <br>


            </section>
        </div>
    </section> <!-- footer -->
    
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>


</html>