@extends('layouts.main')
@section('main-container')
    <style>
        .dataTables_length {
            display: inline-block;
        }
    </style>
    <section id="content">
        <section class="vbox">
            <section class="panel panel-default scrollable padder">
                <div style="display: flex;justify-content:space-between">
                    <header class="panel-heading"></header>
                    <span style="margin:10px">
                        <a href="{{ url('/addStudent') }}" class="btn btn-s-md btn-primary">Add Student</a>
                    </span>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="StudentTable" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>state</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                                <tr>
                                                    <td>{{ $student->student_id }}</td>
                                                    <td>{{ $student->name }}</td>
                                                    <td>{{ $student->email }}</td>
                                                    <td>{{ $student->state }} </td>
                                                    <td>{{ $student->city }}</td>
                                                    <td>
                                                        <a href="">
                                                            <button class="btn btn-info" title="view">
                                                                <i class="fa fa-eye"></i>
                                                            </button></a>
                                                        <a
                                                            href="{{ route('student-edit', ['id' => $student->student_id]) }}">
                                                            <button class="btn btn-primary" title="edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button></a>
                                                        <a href="{{ url('/student/delete') }}/{{ $student->student_id }}"
                                                            onclick="confirmation(event)">
                                                            <button class="btn btn-danger" title="delete" data-id="">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                </section>
        </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
            data-target="#nav,html"></a>
    </section>
    <aside class="bg-light lter b-l aside-md hide" id="notes">
        <div class="wrapper">Notification</div>
    </aside>
    </section>
    </section>
    </section> <!-- Bootstrap --> <!-- App -->

    <script>
        var StudentTableView = $('#StudentTable').dataTable({});


        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            swal({
                    title: "Are You Sure To Delete This",
                    text: "You wont be able to revert this delete",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                })
        }
    </script>
@endsection
