@extends('layouts.main')
@section('main-container')
<style>
    .studentFormBtn {
        width: 100%;
        position: absolute;
        bottom: 30px;
    }

    .studentBtn {
        margin: 5px 18px 5px 0px;
    }
</style>
<section class="vbox">
    <section>
        <section class="hbox stretch"> <!-- .aside -->
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable padder">
                        <div class="m-b-md">
                            <h3 class="m-b-none">Student info</h3>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <form data-validate="parsley">
                                    <section class="panel panel-default">
                                        <header class="panel-heading"> <span class="h4">Basic Details</span> </header>
                                        <div class="panel-body">
                                            <div class="form-group pull-in clearfix">
                                                <div class="col-sm-6"> <label>Enter Name</label> <input type="text" class="form-control" data-required="true" id="pwd" placeholder="Enter Name"> </div>
                                                <div class="col-sm-6"> <label>Email</label> <input type="email" class="form-control" data-required="true" placeholder="Email"> </div>
                                            </div>
                                            <div class="form-group"> <label>Phone</label> <input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" data-required="true"> </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <form data-validate="parsley">
                                    <section class="panel panel-default">
                                        <header class="panel-heading"> <span class="h4">Address</span> </header>
                                        <div class="panel-body">
                                            <div class="form-group pull-in clearfix">
                                                <div class="col-sm-6"> <label>City</label> <input type="text" class="form-control" placeholder="City" data-required="true"> </div>
                                                <div class="col-sm-6"> <label>State</label> <input type="state" class="form-control" placeholder="state" data-required="true"> </div>
                                            </div>
                                            <div class="form-group"> <label>Pin Code</label> <input type="code" data-type="" data-required="true" class="form-control" placeholder="Pin Code"> </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                        <div class="">
                            <section class="panel panel-default studentFormBtn">
                                <div class="panel-body king">
                                    <form class="form-inline" role="form">
                                        <button type="submit " class="btn btn-sm btn-primary pull-right studentBtn">Save</button>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </section>
                </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
            </section>
            <aside class="bg-light lter b-l aside-md hide" id="notes">
                <div class="wrapper">Notification</div>
            </aside>
        </section>
    </section>
</section> <!-- Bootstrap --> <!-- App -->
@endsection