<!DOCTYPE html>
<html lang="en" class="bg-dark">

<head>
    <meta charset="utf-8" />
    <title>Notebook | Web Application</title>
    <meta name="csrf-token"
        content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{url('frontend/css/font.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('frontend/css/app.v1.css')}}" type="text/css" />
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xxl"> <a class="navbar-brand block" href="index.html">Notebook</a>
            <section class="panel panel-default m-t-lg bg-white">
                <header class="panel-heading text-center"> <strong>Sign up</strong> </header>

                <form action="" method="POST"  class="panel-body wrapper-lg" >
                    {{-- @csrf --}}
                    <div class="form-group"> <label class="control-label">Name</label> <input type="text"
                            placeholder="eg. Your name or company"  id="name" name="name" class="form-control input-lg"> 

                            <span class="text-danger">
                                @if (Session('msg'))
                                <strong>{{Session('msg')}}</strong>

                                @endif
                            </span>
                        </div>

                    <div class="form-group">
                         <label class="control-label">Email</label> <input type="email"
                            placeholder="test@example.com" name="email" id="email" class="form-control input-lg"> 

                            <span class="text-danger">
                                @if (Session('msg'))
                                <strong>{{Session('msg')}}</strong>

                                @endif
                            </span>
                            
                        </div>

                    <div class="form-group">
                         <label class="control-label">Password</label> <input type="password"
                            id="password" name="password" placeholder="Type a password" class="form-control input-lg"> 

                            <span class="text-danger">
                                @if (Session('msg'))
                                <strong>{{Session('msg')}}</strong>

                                @endif
                            </span>
                        </div>

                    <div class="checkbox">
                         <label> <input type="checkbox"> Agree the <a href="#">terms and policy</a>
                        </label>
                     </div> 
                     <button type="submit" class="btn btn-primary">Sign up</button>
                    <div class="line line-dashed">
                        
                    </div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="{{url('signin')}}"
                        class="btn btn-default btn-block">Sign in</a>
                </form>
                <br>

                {{-- @if (Session('msg'))
                <div class="alert alert-danger">
                    <strong>{{Session('msg')}}</strong>
                </div>
                @endif --}}

                {{-- @if (Session('error'))
                <div class="alert alert-danger">
                    <strong>{{Session('error')}}</strong>
                </div>
                @endif --}}




            </section>
        </div>
    </section> <!-- footer -->
    
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>

</html>