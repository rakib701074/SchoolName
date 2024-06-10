@extends('layouts.main')
@section('main-container')
{{-- top --}}

{{-- 
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Student</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <input type="hidden" id="delete_stud_id">
        <h4>Are you sure ? want to delete this data ?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger delete_student_btn">Yes Delete</button>
      </div>
    </div>
  </div>
</div> --}}



                <section id="content">
                    <section class="vbox">
                        <section class="panel panel-default">
                            <div style="display: flex;justify-content:space-between">
                                <header class="panel-heading"></header>
                                <span style="margin:10px">
                                    <a href="{{ url('/addStudent') }}" class="btn btn-s-md btn-primary btn-rounded">New Student</a>
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
                                        <form action="">
                                        <div class="input-group">
                                             <input type="search" name="search" 
                                        id=""    class="input-sm form-control"
                                            placeholder="Search by name or email" value="{{$search}}"> 
                                            <span class="input-group-btn"> 
                                                <button
                                                         class="btn btn-sm btn-default">Go!</button>
                                             </span>
                                        </div>
                                    </form>
                                     </div>  
                               
                            </div>

                           


                          
                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <!-- <th width="20"><input type="checkbox"></th>
                                            <th class="th-sortable" data-toggle="class">ID <span
                                                    class="th-sort"> <i class="fa fa-sort-down text"></i> <i
                                                        class="fa fa-sort-up text-active"></i> <i
                                                        class="fa fa-sort"></i> </span> </th> -->
                                                        <!-- <th><input type="checkbox" name="post[]" value="3"></th>  -->
                                            <!-- <th>ID</th> -->
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>state</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                            <th width="30"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student) 
                                        <tr>
                                        <!-- <td><input type="checkbox" name="post[]" value="3"></td>  -->
                                            <!-- <td>{{ $student->student_id}}</td> -->
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->state }} </td>
                                            <td>{{ $student->city }}</td>
                                             <td>
                                                <a href="">
                                                <button  class="btn btn-info btn-sm" title="update"
                                                >
                                                <i class="fa fa-eye"></i>
                                                </button></a>
                                                <a href="{{route('student-edit', ['id' => $student->student_id])}}">
                                            <button  class="btn btn-primary btn-sm" title="edit">
                                                <i class="fa fa-edit"></i>
                                            </button></a>
                                            <a href="{{url('/student/delete')}}/{{$student->student_id}}">
                                            <button class="btn btn-danger btn-sm" 
                                            title="delete" data-id="">
                                                <i class="fa fa-trash-o"></i>
                                            </button></a>
                                              
                                             </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>

                            {{-- <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-4 hidden-xs"> <select
                                            class="input-sm form-control input-s-sm inline v-middle">
                                            <option value="0">Bulk action</option>
                                            <option value="1">Delete selected</option>
                                            <option value="2">Bulk edit</option>
                                            <option value="3">Export</option>
                                        </select> <button class="btn btn-sm btn-default">Apply</button> </div>
                                    <div class="col-sm-4 text-center"> <small
                                            class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50
                                            items</small> </div>
                                   
                                            <div class="col-sm-4 text-right text-center-xs">
                                        <ul class="pagination pagination-sm m-t-none m-b-none">
                                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </footer> --}}
                        </section>

                    </section> <a href="#" class="hide nav-off-screen-block"
                        data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
                </section>
                <aside class="bg-light lter b-l aside-md hide" id="notes">
                    <div class="wrapper">Notification</div>
                </aside>
            </section>
        </section>
    </section> <!-- Bootstrap --> <!-- App -->
    <script>
        $(document).on('click', '.deletebtn', function(e){
            e.preventDefault();
            var dataID = $(this).attr('data-id');
            $('#delete_stud_id').val(dataID);
            $('#DeleteModal').modal('show');
        });
        $(document).on('click', '.delete_student_btn', function(e){
            e.preventDefault();
            data = {  
                id : $('#delete_stud_id').val(),
                "_token": "{{ csrf_token() }}",
            }
            url = "{{ url('student/delete/') }}";
            customAjaxCall(url, data, responseFunction)
            function responseFunction(res){
                if(res.status == 200){
                    window.location.reload();
                }
            }
        });
    </script>
@endsection
   


