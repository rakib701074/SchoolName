@extends('layouts.main')
@section('main-container')
{{-- top --}}
<section class="vbox">

    
        {{-- footer --}}
        <section>
            <section class="hbox stretch"> <!-- .aside -->
                <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <header class="header bg-primary lter text-center clearfix">
                            <div class="btn-group"> <button type="button" class="btn btn-sm btn-dark btn-icon"
                                    title="New project"><i class="fa fa-plus"></i></button>
                                <div class="btn-group hidden-nav-xs"> <button type="button"
                                        class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Switch
                                        Project <span class="caret"></span> </button>
                                    <ul class="dropdown-menu text-left">
                                        <li><a href="#">Project</a></li>
                                        <li><a href="#">Another Project</a></li>
                                        <li><a href="#">More Projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                        {{-- scrollable --}}

                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                                data-size="5px" data-color="#333333"> <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li> <a href="{{ route('dashboard') }}"> <i class="fa fa-pencil icon"> <b
                                            class="bg-info"></b> </i> <span>Dashboard</span> </a> </li>
                                        <li class="active">
                                            <a href="{{ route('dashboard') }}" class="active">
                                                <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span
                                                    class="pull-right"> <i class="fa fa-angle-down text"></i> <i
                                                        class="fa fa-angle-up text-active"></i> </span>
                                                <span>Student Info</span> </a>

                                                <ul class="nav lt">
                                                <li class="active"> <a href="{{ Route('students') }}" class="active"> <i
                                                            class="fa fa-angle-right"></i> <span><b>Students</b></span>
                                                    </a> </li>
                                                <li> <a href="dashboard.html"> <i class="fa fa-angle-right"></i>
                                                        <span><b>Student DataTable</b></span> </a> </li>
                                            </ul>
                                        </li>


                                        {{-- dashboard --}}

                                        <li> <a href="#uikit"> <i class="fa fa-flask icon"> <b class="bg-success"></b>
                                                </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i> </span> <span>UI
                                                    kit</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="buttons.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Buttons</span> </a> </li>
                                                <li> <a href="icons.html"> <b class="badge bg-info pull-right">369</b>
                                                        <i class="fa fa-angle-right"></i> <span>Icons</span> </a>
                                                </li>
                                                <li> <a href="grid.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Grid</span> </a> </li>
                                                <li> <a href="widgets.html"> <b class="badge pull-right">8</b> <i
                                                            class="fa fa-angle-right"></i> <span>Widgets</span>
                                                    </a>
                                                </li>
                                                <li> <a href="components.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Components</span> </a> </li>
                                                <li> <a href="list.html"> <i class="fa fa-angle-right"></i>
                                                        <span>List
                                                            group</span> </a> </li>
                                                <li> <a href="#table"> <i class="fa fa-angle-down text"></i> <i
                                                            class="fa fa-angle-up text-active"></i>
                                                        <span>Table</span>
                                                    </a>
                                                    <ul class="nav bg">
                                                        <li> <a href="{{ url('frontend/table-static.blade.php') }}">
                                                                <i class="fa fa-angle-right"></i> <span>Table
                                                                    static</span> </a> </li>
                                                        <li> <a href="{{ url('frontend/table-datatable.html') }}">
                                                                <i class="fa fa-angle-right"></i>
                                                                <span>Datatable</span> </a> </li>
                                                        <li> <a href="table-datagrid.html"> <i
                                                                    class="fa fa-angle-right"></i>
                                                                <span>Datagrid</span>
                                                            </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="#form"> <i class="fa fa-angle-down text"></i> <i
                                                            class="fa fa-angle-up text-active"></i>
                                                        <span>Form</span>
                                                    </a>
                                                    <ul class="nav bg">
                                                        <li> <a href="form-elements.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    elements</span> </a> </li>
                                                        <li> <a href="form-validation.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    validation</span> </a> </li>
                                                        <li> <a href="form-wizard.html"> <i class="fa fa-angle-right"></i>
                                                                <span>Form
                                                                    wizard</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="backend.chart"> <i class="fa fa-angle-right"></i>
                                                        <span>Chart</span> </a> </li>
                                                <li> <a href="backend.fullcalendar"> <i class="fa fa-angle-right"></i>
                                                        <span>Fullcalendar</span> </a> </li>
                                                <li> <a href="backend.portlet"> <i class="fa fa-angle-right"></i>
                                                        <span>Portlet</span> </a> </li>
                                                <li> <a href="backend.timeline"> <i class="fa fa-angle-right"></i>
                                                        <span>Timeline</span> </a> </li>
                                            </ul>
                                        </li>


                </aside> <!-- /.aside -->
                <section id="content">
                    <section class="vbox">
            


                        <section class="panel panel-default">
                            <header class="panel-heading"> Responsive Table </header>
                            <div class="row wrapper">
                                <div class="col-sm-5 m-b-xs"> <select
                                        class="input-sm form-control input-s-sm inline v-middle">
                                        <option value="0">Bulk action</option>
                                        <option value="1">Delete selected</option>
                                        <option value="2">Bulk edit</option>
                                        <option value="3">Export</option>
                                    </select> <button class="btn btn-sm btn-default">Apply</button> </div>
                                <div class="col-sm-4 m-b-xs">
                                    <div class="btn-group" data-toggle="buttons"> <label
                                            class="btn btn-sm btn-default active"> <input type="radio"
                                                name="options" id="option1"> Day </label> <label
                                            class="btn btn-sm btn-default"> <input type="radio" name="options"
                                                id="option2"> Week </label> <label class="btn btn-sm btn-default">
                                            <input type="radio" name="options" id="option2"> Month </label> </div>
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
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th width="30"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="4"></td>
                                            <td>01</td>
                                            <td>Ayan Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Designing</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="5"></td>
                                            <td>02</td>
                                            <td>Ashok</td>
                                            <td>Jaipur</td>
                                            <td> <a href="#" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Designing</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="4"></td>
                                            <td>03</td>
                                            <td>Aryan Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Graphic Designing</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="4"></td>
                                            <td>04</td>
                                            <td>Arman Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Manager</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="5"></td>
                                            <td>05</td>
                                            <td>Ayan Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Engineer</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="6"></td>
                                            <td>06</td>
                                            <td>maryam Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="7"></td>
                                            <td></td>
                                            <td>Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Meta Engineer</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="post[]" value="8"></td>
                                            <td>07</td>
                                            <td>Ayan Khan</td>
                                            <td>Jodhpur</td>
                                            <td> <a href="#" class="active" data-toggle="class"><i
                                                        class="fa fa-check text-success text-active"></i><i
                                                        class="fa fa-times text-danger text"></i></a> </td>
                                                        <td>Accountant</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer class="panel-footer">
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
                            </footer>
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
@endsection
