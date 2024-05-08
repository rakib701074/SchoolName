
@extends('layouts.main')
@section('main-container')

<div class="row">
    <div class="col-sm-6">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">{{$title}}</header>
            <div class="panel-body">
                <form action="{{url('/teacher/update')}}/{{$teacher->teacher_id}}" method="POST">
                    @csrf
                    <div class="rakip">
                    <div class="form-group"> <label>Name</label> <input
                            type="name" class="form-control" name="name" placeholder="Enter name" value="{{$teacher->name}}">
                    </div>
                    <div class="form-group"> <label>Age</label> <input type="age"
                            class="form-control" name="age" placeholder="age" value="{{$teacher->age}}"> </div>
                    <div class="checkbox"> <label> <input type="checkbox"> Check me out
                        </label> </div> <button type="submit"
                        class="btn btn-sm btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>


@endsection