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
                <header class="panel-heading text-center"> <strong>Forget Password</strong>

                 </header>

                 <p class="text-center" style="color:black">Forgot your password? No problem. Just let us know your email<br> address and we will email you a password reset link that will<br> allow you to choose a new one.</p>
                
    <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="panel-body wrapper-lg">
                    @csrf
                    <div class="form-group">
                         <label class="control-label">Email</label> 
                         <input type="email" name="email"
                             class="form-control input-lg">
                            
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                 
                        <button type="submit"
                        class="btn btn-primary">Email Password Reset Link</button>
                </form>
            </section>
        </div>
    </section> <!-- footer -->
    
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>


</html>