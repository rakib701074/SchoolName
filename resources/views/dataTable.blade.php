
@extends('layouts.main')
@section('main-container')

<div class="row">
    <div class="col-sm-6">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">{{$title}}</header>
            <div class="panel-body">
                <form action="{{route('add-teachers')}}" method="POST">
                    @csrf
                    <div class="rakip">
                    <div class="form-group"> <label>Name</label> 
                    <input type="name" class="form-control" name="name" value="{{old('name')}}"  placeholder="Enter name">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror 
                    </span>
                    </div>
                    <div class="form-group"> <label>Number</label> 
                    <input type="number" class="form-control" name="number" value="{{old('number')}}"  placeholder="number">
                    </div>
                    <span class="text-danger">
                        @error('number')
                            {{ $message }}
                        @enderror 
                    </span>
                    <div class="form-group"> <label>Age</label> <input type="age"
                            class="form-control" name="age" value="{{old('age')}}"  placeholder="age">
                    </div>
                    <span class="text-danger">
                        @error('age')
                            {{ $message }}
                        @enderror 
                    </span>
                    <div class="checkbox"> <label> <input type="checkbox"> Check me out
                        </label> </div> <button type="submit"
                        class="btn btn-sm btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>


@endsection