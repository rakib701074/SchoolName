
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
        <div class="container aside-xxl"> <a class="navbar-brand block"></a>
            <section class="panel panel-default m-t-lg bg-white">
                <header class="panel-heading text-center"> <strong>REGISTER</strong> </header>

                <form action="{{ route('register') }}" method="POST"  class="panel-body wrapper-lg" >
                    @csrf
                    <div class="form-group"> 
                        <label class="control-label">Name</label>
                         <input type="text"
                           id="name" name="name" class="form-control input-lg"  placeholder="Enter Your Name"  > 

                           <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                    <div class="form-group">
                         <label class="control-label">Email</label> <input type="email"
                            placeholder="Enter Your Email" name="email" id="email" class="form-control input-lg"> 
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                         
                            
                        </div>

                     <div class="form-group">
                         <label class="control-label">Role</label> <input type="role"
                            placeholder="Enter Your Role" name="role" id="role" class="form-control input-lg"> 
                             
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                         
                            
                        </div>

                    <div class="form-group">
                         <label class="control-label">Password</label> <input type="password"
                            id="password" name="password" placeholder="Enter Your password" class="form-control input-lg"> 

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    <div class="form-group">
                         <label class="control-label">Confirm Password</label> <input type="password"
                            id="password_confirmation" name="password_confirmation" placeholder="Enter Confirm password" class="form-control input-lg"> 
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                    {{-- <div class="checkbox">
                         <label> <input type="checkbox"> Agree the <a href="#">terms and policy</a>
                        </label>
                     </div>  --}}
                     <button type="submit" class="btn btn-primary">Sign up</button>
                    <div class="line line-dashed">
                        
                    </div>
                    <p class="text-muted text-center"><small>Already have an account?</small></p>
                     <a href="{{url('/login')}}"
                        class="btn btn-default btn-block">Sign in</a>
                </form>



            </section>
        </div>
    </section> <!-- footer -->
    
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>

</html>