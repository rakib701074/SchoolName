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
                            <input type="text" name="name" class="form-control" placeholder="name"> 
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror

                            </span>
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10"> 
                            <input type="email" name="email" class="form-control" placeholder="Email"> 
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror

                            </span>
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10"> 
                            <input type="text" name="state" class="form-control" placeholder="state"> 
                            <span class="text-danger">
                                @error('state')
                                    {{ $message }}
                                @enderror

                            </span>
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10"> 
                            <input type="text" name="city" class="form-control" placeholder="city"> 
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror

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
