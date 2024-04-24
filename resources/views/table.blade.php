<!DOCTYPE html>
<html lang="en" class="app">
<!-- Mirrored from flatfull.com/themes/note/table-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 14:38:17 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Notebook | Web Application</title>
    <meta name="description"
        content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{url('frontend/css/font.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('frontend/css/app.v1.css')}}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <header class="bg-dark dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs"
                    data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a> <a
                    href="#" class="navbar-brand" data-toggle="fullscreen"><img src="images/logo.png"
                        class="m-r-sm">Notebook</a> <a class="btn btn-link visible-xs" data-toggle="dropdown"
                    data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i
                            class="fa fa-building-o"></i> <span class="font-bold">Activity</span> </a>
                    <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                        <div class="wrapper lter m-t-n-xs"> <a href="#" class="thumb pull-left m-r"> <img
                                    src="images/avatar.jpg" class="img-circle"> </a>
                            <div class="clear"> <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span>
                                <small class="block">Art Director</small> <a href="#"
                                    class="btn btn-xs btn-success m-t-xs">Upgrade</a> </div>
                        </div>
                        <div class="row m-l-none m-r-none m-b-n-xs text-center">
                            <div class="col-xs-4">
                                <div class="padder-v"> <span class="m-b-xs h4 block text-white">245</span> <small
                                        class="text-muted">Followers</small> </div>
                            </div>
                            <div class="col-xs-4 dk">
                                <div class="padder-v"> <span class="m-b-xs h4 block text-white">55</span> <small
                                        class="text-muted">Likes</small> </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v"> <span class="m-b-xs h4 block text-white">2,035</span> <small
                                        class="text-muted">Photos</small> </div>
                            </div>
                        </div>
                    </section>
                </li>
                <li>
                    <div class="m-t m-l"> <a href="price.html" class="dropdown-toggle btn btn-xs btn-primary"
                            title="Upgrade"><i class="fa fa-long-arrow-up"></i></a> </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
                <li class="hidden-xs"> <a href="#" class="dropdown-toggle dk" data-toggle="dropdown"> <i
                            class="fa fa-bell"></i> <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
                    </a>
                    <section class="dropdown-menu aside-xl">
                        <section class="panel bg-white">
                            <header class="panel-heading b-light bg-light"> <strong>You have <span
                                        class="count">2</span> notifications</strong> </header>
                            <div class="list-group list-group-alt animated fadeInRight"> <a href="#"
                                    class="media list-group-item"> <span class="pull-left thumb-sm"> <img
                                            src="images/avatar.jpg" alt="John said" class="img-circle"> </span> <span
                                        class="media-body block m-b-none"> Use awesome animate.css<br> <small
                                            class="text-muted">10 minutes ago</small> </span> </a> <a href="#"
                                    class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial
                                        released<br> <small class="text-muted">1 hour ago</small> </span> </a> </div>
                            <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i
                                        class="fa fa-cog"></i></a> <a href="#notes"
                                    data-toggle="class:show animated fadeInRight">See all the notifications</a>
                            </footer>
                        </section>
                    </section>
                </li>
                <li class="dropdown hidden-xs"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i
                            class="fa fa-fw fa-search"></i></a>
                    <section class="dropdown-menu aside-xl animated fadeInUp">
                        <section class="panel bg-white">
                            <form role="search">
                                <div class="form-group wrapper m-b-none">
                                    <div class="input-group"> <input type="text" class="form-control"
                                            placeholder="Search"> <span class="input-group-btn"> <button type="submit"
                                                class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                                        </span> </div>
                                </div>
                            </form>
                        </section>
                    </section>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span
                            class="thumb-sm avatar pull-left"> <img src="images/avatar.jpg"> </span> John.Smith <b
                            class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span>
                        <li> <a href="#">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch"> <!-- .aside -->
                <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav">
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
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                                data-size="5px" data-color="#333333"> <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li> <a href="index.html"> <i class="fa fa-dashboard icon"> <b
                                                        class="bg-danger"></b> </i> <span class="pull-right"> <i
                                                        class="fa fa-angle-down text"></i> <i
                                                        class="fa fa-angle-up text-active"></i> </span>
                                                <span>Workset</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="index.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Dashboard v1</span> </a> </li>
                                                <li> <a href="dashboard.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Dashboard v2</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#layout"> <i class="fa fa-columns icon"> <b
                                                        class="bg-warning"></b> </i> <span class="pull-right"> <i
                                                        class="fa fa-angle-down text"></i> <i
                                                        class="fa fa-angle-up text-active"></i> </span>
                                                <span>Layouts</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="layout-c.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Color option</span> </a> </li>
                                                <li> <a href="layout-r.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Right nav</span> </a> </li>
                                                <li> <a href="layout-h.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Hbox Layout</span> </a> </li>
                                                <li> <a href="layout-boxed.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Boxed Layout</span> </a> </li>
                                                <li> <a href="layout-fluid.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Fluid Layout</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li class="active"> <a href="#uikit" class="active"> <i
                                                    class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span
                                                    class="pull-right"> <i class="fa fa-angle-down text"></i> <i
                                                        class="fa fa-angle-up text-active"></i> </span> <span>UI
                                                    kit</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="buttons.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Buttons</span> </a> </li>
                                                <li> <a href="icons.html"> <b class="badge bg-info pull-right">369</b>
                                                        <i class="fa fa-angle-right"></i> <span>Icons</span> </a> </li>
                                                <li> <a href="grid.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Grid</span> </a> </li>
                                                <li> <a href="widgets.html"> <b class="badge pull-right">8</b> <i
                                                            class="fa fa-angle-right"></i> <span>Widgets</span> </a>
                                                </li>
                                                <li> <a href="components.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Components</span> </a> </li>
                                                <li> <a href="list.html"> <i class="fa fa-angle-right"></i> <span>List
                                                            group</span> </a> </li>
                                                <li class="active"> <a href="#table" class="active"> <i
                                                            class="fa fa-angle-down text"></i> <i
                                                            class="fa fa-angle-up text-active"></i> <span>Table</span>
                                                    </a>
                                                    <ul class="nav bg">
                                                        <li class="active"> <a href="table-static.html" class="active">
                                                                <i class="fa fa-angle-right"></i> <span>Table
                                                                    static</span> </a> </li>
                                                        <li> <a href="table-datatable.html"> <i
                                                                    class="fa fa-angle-right"></i>
                                                                <span>Datatable</span> </a> </li>
                                                        <li> <a href="table-datagrid.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Datagrid</span>
                                                            </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="#form"> <i class="fa fa-angle-down text"></i> <i
                                                            class="fa fa-angle-up text-active"></i> <span>Form</span>
                                                    </a>
                                                    <ul class="nav bg">
                                                        <li> <a href="form-elements.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    elements</span> </a> </li>
                                                        <li> <a href="form-validation.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    validation</span> </a> </li>
                                                        <li> <a href="form-wizard.html"> <i
                                                                    class="fa fa-angle-right"></i> <span>Form
                                                                    wizard</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="chart.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Chart</span> </a> </li>
                                                <li> <a href="fullcalendar.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Fullcalendar</span> </a> </li>
                                                <li> <a href="portlet.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Portlet</span> </a> </li>
                                                <li> <a href="timeline.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Timeline</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="#pages"> <i class="fa fa-file-text icon"> <b
                                                        class="bg-primary"></b> </i> <span class="pull-right"> <i
                                                        class="fa fa-angle-down text"></i> <i
                                                        class="fa fa-angle-up text-active"></i> </span>
                                                <span>Pages</span> </a>
                                            <ul class="nav lt">
                                                <li> <a href="gallery.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Gallery</span> </a> </li>
                                                <li> <a href="profile.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Profile</span> </a> </li>
                                                <li> <a href="invoice.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Invoice</span> </a> </li>
                                                <li> <a href="intro.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Intro</span> </a> </li>
                                                <li> <a href="master.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Master</span> </a> </li>
                                                <li> <a href="gmap.html"> <i class="fa fa-angle-right"></i> <span>Google
                                                            Map</span> </a> </li>
                                                <li> <a href="jvectormap.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Vector Map</span> </a> </li>
                                                <li> <a href="signin.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Signin</span> </a> </li>
                                                <li> <a href="signup.html"> <i class="fa fa-angle-right"></i>
                                                        <span>Signup</span> </a> </li>
                                                <li> <a href="404.html"> <i class="fa fa-angle-right"></i>
                                                        <span>404</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="mail.html"> <b class="badge bg-danger pull-right">3</b> <i
                                                    class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i>
                                                <span>Message</span> </a> </li>
                                        <li> <a href="notebook.html"> <i class="fa fa-pencil icon"> <b
                                                        class="bg-info"></b> </i> <span>Notes</span> </a> </li>
                                    </ul>
                                </nav> <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer lt hidden-xs b-t b-light">
                            <div id="chat" class="dropup">
                                <section class="dropdown-menu on aside-md m-l-n">
                                    <section class="panel bg-white">
                                        <header class="panel-heading b-b b-light">Active chats</header>
                                        <div class="panel-body animated fadeInRight">
                                            <p class="text-sm">No active chats.</p>
                                            <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                                        </div>
                                    </section>
                                </section>
                            </div>
                            <div id="invite" class="dropup">
                                <section class="dropdown-menu on aside-md m-l-n">
                                    <section class="panel bg-white">
                                        <header class="panel-heading b-b b-light"> John <i
                                                class="fa fa-circle text-success"></i> </header>
                                        <div class="panel-body animated fadeInRight">
                                            <p class="text-sm">No contacts in your lists.</p>
                                            <p><a href="#" class="btn btn-sm btn-facebook"><i
                                                        class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                                        </div>
                                    </section>
                                </section>
                            </div> <a href="#nav" data-toggle="class:nav-xs"
                                class="pull-right btn btn-sm btn-default btn-icon"> <i
                                    class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i>
                            </a>
                            <div class="btn-group hidden-nav-xs"> <button type="button" title="Chats"
                                    class="btn btn-icon btn-sm btn-default" data-toggle="dropdown"
                                    data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button"
                                    title="Contacts" class="btn btn-icon btn-sm btn-default" data-toggle="dropdown"
                                    data-target="#invite"><i class="fa fa-facebook"></i></button> </div>
                        </footer>
                    </section>
                </aside> <!-- /.aside -->
                <section id="content">
                    <section class="vbox">
                        <section class="scrollable padder">
                            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="#">UI kit</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Static table</li>
                            </ul>


                            <!-- <div class="m-b-md">
                                <h3 class="m-b-none">Static Table</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
                                        <header class="panel-heading"> <span class="label bg-danger pull-right">4
                                                left</span> Tasks </header>
                                        <table class="table table-striped m-b-none"> -->
<!-- 

                                            <thead>
                                                <tr>
                                                    <th>Progress</th>
                                                    <th>Item</th>
                                                    <th width="70"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="progress progress-sm progress-striped active m-t-xs m-b-none">
                                                            <div class="progress-bar progress-bar-success"
                                                                data-toggle="tooltip" data-original-title="80%"
                                                                style="width: 80%"></div>
                                                        </div>
                                                    </td>
                                                    <td>App prototype design</td>
                                                    <td class="text-right">
                                                        <div class="btn-group"> <a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>
                                                        <div class="progress progress-xs m-t-xs m-b-none">
                                                            <div class="progress-bar progress-bar-info"
                                                                data-toggle="tooltip" data-original-title="40%"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </td>
                                                    <td>Design documents</td>
                                                    <td class="text-right">
                                                        <div class="btn-group"> <a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="progress progress-xs m-t-xs m-b-none">
                                                            <div class="progress-bar progress-bar-warning"
                                                                data-toggle="tooltip" data-original-title="20%"
                                                                style="width: 20%"></div>
                                                        </div>
                                                    </td>
                                                    <td>UI toolkit</td>
                                                    <td class="text-right">
                                                        <div class="btn-group"> <a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="progress progress-xs m-t-xs m-b-none">
                                                            <div class="progress-bar progress-bar-danger"
                                                                data-toggle="tooltip" data-original-title="15%"
                                                                style="width: 15%"></div>
                                                        </div>
                                                    </td>
                                                    <td>Testing</td>
                                                    <td class="text-right">
                                                        <div class="btn-group"> <a href="#" class="dropdown-toggle"
                                                                data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> -->

                                    <!-- </section>
                                </div>
                                <div class="col-sm-6">
                                    <section class="panel panel-default">
                                        <header class="panel-heading">Stats</header>
                                        <table class="table table-striped m-b-none">
                                            <thead>
                                                <tr>
                                                    <th>Graph</th>
                                                    <th>Item</th>
                                                    <th width="70"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="sparkline" data-bar-color="#5cb85c" data-type="bar"
                                                            data-height="19">20,10,15,21,12,5,21,30,24,15,8,19-->
                                                        <!-- </div>
                                                    </td>
                                                    <td>App downloads</td>
                                                    <td class="text-success"> <i class="fa fa-level-up"></i> 40% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sparkline" data-bar-color="#61a1e1" data-type="bar"
                                                            data-height="19">,5,21,30,24,15,8,19,20,10,15,21,12-->
                                                        <!-- </div>
                                                    </td>
                                                    <td>Social connection</td>
                                                    <td class="text-success"> <i class="fa fa-level-up"></i> 20% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sparkline" data-bar-color="#999900" data-type="bar"
                                                            data-height="19"> --> 
                                                            <!-- 200,400,500,100,90,1200,1500,1000,800,500,80,50</div> -->
                                                    <!-- </td>
                                                    <td>Revenue</td>
                                                    <td class="text-warning"> <i class="fa fa-level-down"></i> 5% </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sparkline" data-bar-color="#ff5f5f" data-type="bar"
                                                            data-height="19">15,21,30,24,15,8,19,20,10,15,21,12 -->
                                                        <!-- </div>
                                                    </td>
                                                    <td>Customer increase</td>
                                                    <td class="text-danger"> <i class="fa fa-level-down"></i> 20% </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                             -->
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
                                                <th>Employee Name</th>
                                                <th>Employee Address</th>
                                                <th>Employee Status</th>
                                                <th>Employee Action</th>
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
    <script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/charts/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>

</html>