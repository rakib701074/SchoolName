@extends('layouts.main')
@section('main-container')
{{-- top --}}

                <section id="content">
                    <section class="vbox">
                        <section class="panel panel-default">
                            <div style="display: flex;justify-content:space-between">
                                <header class="panel-heading"> Responsive Table </header>
                                <span style="margin:10px">
                                    <a href="{{url('/teacher')}}" class="btn btn-s-md btn-primary">Add Student</a>
                                </span>
                            </div>
                            <div class="row wrapper">
                                <div class="col-sm-9 m-b-xs"> <select
                                        class="input-sm form-control input-s-sm inline v-middle">
                                        <option value="0">Bulk action</option>
                                        <option value="1">Delete selected</option>
                                        <option value="2">Bulk edit</option>
                                        <option value="3">Export</option>
                                    </select> 
                                    <button class="btn btn-sm btn-default">Apply</button> 
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group"> <input type="text" class="input-sm form-control"
                                            placeholder="Search"> <span class="input-group-btn"> <button
                                                class="btn btn-sm btn-default" type="button">Go!</button> </span>
                                    </div>
                                </div>
                            </div>

                           


                          
                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <th width="20"><input type="checkbox"></th>
                                            <th class="th-sortable" data-toggle="class">ID <span
                                                    class="th-sort"> <i class="fa fa-sort-down text"></i> <i
                                                        class="fa fa-sort-up text-active"></i> <i
                                                        class="fa fa-sort"></i> </span> </th>
                                            <th>Name</th>
                                            <th>age</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                            <th width="30"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teacher as $teachers) 
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="3"></td>
                                            <td>{{ $teachers->teacher_id}}</td>
                                             <td>{{ $teachers->name }}</td>
                                            <td>{{ $teachers->age }}</td> 
                                            <td>{{ $teachers->address }}</td> 

                                             <td>
                                                <a href="{{route('student-view', ['id' => $teachers->teacher_id])}}">
                                                <button  class="btn btn-info btn-sm" title="eye"
                                                >
                                                <i class="fa fa-eye"></i>
                                                </button></a>

                                                <a href="{{route('teacher-edit', ['id' => $teachers->teacher_id])}}">
                                                <button  class="btn btn-primary btn-sm" title="edit">
                                                <i class="fa fa-edit"></i>
                                             </button></a>

                                            <a href="{{route('teacher-delete', ['id' => $teachers->teacher_id])}}">
                                            <button  class="btn btn-danger btn-sm" title="delete">
                                                
                                                <i class="fa fa-trash-o"></i>
                                            </button></a>
                                             </td>
                                             
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                            
                            
                        </section>

                    </section> <a href="#" class="hide nav-off-screen-block"
                        data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
                </section>
                {{-- <aside class="bg-light lter b-l aside-md hide" id="notes">
                    <div class="wrapper">Notification</div>
                </aside> --}}
            </section>
        </section>
    </section> <!-- Bootstrap --> <!-- App -->
@endsection
