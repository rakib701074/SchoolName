@extends('layouts.main')
@section('main-container')
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading font-bold text-center">update</header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" action="{{url('/student/update')}}/{{$students->student_id}}" method="POST">
                    @csrf
                    <div class="form-group"> <label class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10"> 
                            <input type="text" name="name" class="form-control" placeholder="name" value="{{$students->name}}"> 
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10"> 
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{$students->email}}"> 
                        </div>
                    </div>
                    <div class="form-group"> <label class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10"> 
                            <input type="text" name="state" class="form-control" placeholder="state" value="{{$students->state}}"> 
                        </div>
                    </div>
                   <div class="form-group"> <label class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10"> 
                            <input type="text" name="city" class="form-control" placeholder="city" value="{{$students->city}}" > 
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
