
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
                    <div class="form-group"> <label>Name</label> <input
                            type="name" class="form-control" name="name" placeholder="Enter name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror

                            </span>
                    </div>

                    <div class="form-group"> <label>Age</label> <input
                            type="age" class="form-control" name="age" placeholder="Enter age">
                            <span class="text-danger">
                                @error('age')
                                    {{ $message }}
                                @enderror

                            </span>
                    </div>

                    <div class="form-group"> <label>Address</label> <input type="address"
                            class="form-control" name="address" placeholder="address">
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror

                            </span>
                         </div>
                    <div class="checkbox"> <label> <input type="checkbox"> Check me out
                        </label> </div> <button type="submit"
                        class="btn btn-sm btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>


@endsection