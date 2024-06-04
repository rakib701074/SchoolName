
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
        <div class="container aside-xxl"> <a class="navbar-brand block" href="index.html">Notebook</a>
            <section class="panel panel-default bg-white m-t-lg">
                <header class="panel-heading text-center"> <strong>Sign in</strong> </header>
                
                <form action="{{route('login')}}" class="panel-body wrapper-lg" method="post">
                    @csrf
                    <div class="form-group">
                         <label class="control-label">Email</label>
                        <input type="email" name="email"
                            placeholder="test@example.com" class="form-control input-lg"> 
                            
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    <div class="form-group"> 
                        <label class="control-label">Password</label> 
                        <input type="password" name="password"
                            id="inputPassword" placeholder="Password" class="form-control input-lg">
                             
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                         </div>
                    <div class="checkbox"> <label> <input type="checkbox">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label> 
                </div>

                @if (Route::has('password.request'))
                     <a  href="{{ route('password.request') }}"
                        class="pull-right m-t-xs">
                        <small>
                          
                            Forgot password?

                        </small>
                    </a> 
                        @endif
                        
                        <button type="submit"
                        class="btn btn-primary">Sign in</button>
                    <div class="line line-dashed"></div> 
                    <a href="#" class="btn btn-facebook btn-block m-b-sm"><i
                            class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> <a href="#"
                        class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with
                        Twitter</a>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="{{url('/signup')}}"
                        class="btn btn-default btn-block">Create an account</a>
                </form>
                 <br>

                {{-- @if (Session('msg'))
                {{-- <div class="alert alert-danger"> --}}
                    {{-- <strong>{{Session('msg')}}</strong> --}}
                {{-- </div> --}}
                {{-- @endif --}} -

            </section>
        </div>
    </section> <!-- footer -->
    
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>


</html>