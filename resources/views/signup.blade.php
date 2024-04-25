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
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xxl"> <a class="navbar-brand block" href="index.html">Notebook</a>
            <section class="panel panel-default m-t-lg bg-white">
                <header class="panel-heading text-center"> <strong>Sign up</strong> </header>
                <form action="{{url('dashboard')}}" class="panel-body wrapper-lg">
                    <div class="form-group"> <label class="control-label">Name</label> <input type="text"
                            placeholder="eg. Your name or company" class="form-control input-lg"> </div>
                    <div class="form-group"> <label class="control-label">Email</label> <input type="email"
                            placeholder="test@example.com" class="form-control input-lg"> </div>
                    <div class="form-group"> <label class="control-label">Password</label> <input type="password"
                            id="inputPassword" placeholder="Type a password" class="form-control input-lg"> </div>
                    <div class="checkbox"> <label> <input type="checkbox"> Agree the <a href="#">terms and policy</a>
                        </label> </div> <button type="submit" class="btn btn-primary">Sign up</button>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="{{url('signin')}}"
                        class="btn btn-default btn-block">Sign in</a>
                </form>
            </section>
        </div>
    </section> <!-- footer -->
    
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>

</html>