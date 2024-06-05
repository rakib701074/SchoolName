<section class="vbox">



    {{-- sidebar --}}
    <section>
        <section class="hbox stretch"> <!-- .aside -->
            <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
                <section class="vbox">
                   
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
                                            <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i> <i
                                                    class="fa fa-angle-up text-active"></i> </span>
                                            <span>Student Info</span> </a>
                                        <ul class="nav lt">
                                            <li class="active"> <a href="{{ Route('students') }}" class="active"> <i
                                                        class="fa fa-angle-right"></i> <span><b>Students</b></span>
                                                </a> </li>
                                            <li> <a href="{{url('/teachers')}}"> <i class="fa fa-angle-right"></i>
                                                    <span><b>Teachers</b></span> </a> </li>
                                        </ul>
                                    </li>


                                    {{-- dashboard --}}

                                    <li> <a href=""> <i class="fa fa-flask icon"> <b
                                                    class="bg-success"></b>
                                            </i> <span class="pull-right"> <i class="fa fa-angle-right text"></i>
                                                <i class="fa fa-angle-up text-active"></i> </span> <span>Back Office
                                                </span> </a>
                                    </li>

                                    <li> <a href=""> <i class="fa fa-flask icon"> <b
                                                    class="bg-success"></b>
                                            </i> <span class="pull-right"> <i class="fa fa-angle-right text"></i>
                                                <i class="fa fa-angle-up text-active"></i> </span> <span>Back Office
                                                </span> </a>
                                    </li>
                                    <footer class="footer lt hidden-xs b-t b-dark mainFooter">
                                         <a href="#nav" data-toggle="class:nav-xs"
                                            class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i>
                                            <i class="fa fa-angle-right text-active"></i> </a>
                                    </footer>
                                </ul>
                            </nav>
                        </div>
                    </section>
                </section>    
            </aside>
             <!-- /.aside -->
           