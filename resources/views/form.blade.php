@extends('layouts.main')
@section('main-container')
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading font-bold text-center">Register form</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{ url('/addStudent') }}" method="POST">
                    @csrf
                    <div class="form-group"> <label class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10"> 
<<<<<<< HEAD
                            <input type="text" name="name" class="form-control" placeholder="name"> 
=======
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name"> 
>>>>>>> a4f6043 (bug resolve student and teacher)
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
<<<<<<< HEAD

=======
>>>>>>> a4f6043 (bug resolve student and teacher)
                            </span>
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10"> 
<<<<<<< HEAD
                            <input type="email" name="email" class="form-control" placeholder="Email"> 
=======
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email"> 
>>>>>>> a4f6043 (bug resolve student and teacher)
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
<<<<<<< HEAD

=======
>>>>>>> a4f6043 (bug resolve student and teacher)
                            </span>
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10"> 
<<<<<<< HEAD
                            <input type="text" name="state" class="form-control" placeholder="state"> 
                            <span class="text-danger">
                                @error('state')
                                    {{ $message }}
                                @enderror

=======
                            <input type="text" name="state" value="{{old('state')}}" class="form-control" placeholder="state"> 
                            <span class="text-danger">
                                @error('state')
                                {{ $message }}
                                @enderror
>>>>>>> a4f6043 (bug resolve student and teacher)
                            </span>
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">address</label>
                        <div class="col-lg-10"> 
<<<<<<< HEAD
                            <input type="text" name="city" class="form-control" placeholder="city"> 
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror

=======
                            <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="address"> 
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
>>>>>>> a4f6043 (bug resolve student and teacher)
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10"> 
                            <button type="submit" class="btn btn-sm btn-default">Sign in</button> 
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
