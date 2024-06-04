<script>
    function confirmation(ev) {
        // if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');
         
        console.log(urlToRedirect);
        swal({
            title :"Are U Sure Delete This ?",
            text : "You won't be able to revert this delete ",
            icon : "warning",
            buttons : true,
            dangerMode : true,

        })
        .then((willCancel)=>{
            if(willCancel){
                window.location.href=urlToRedirect;
            }
        })
    }
   </script>

<script src="{{url('frontend/js/app.v1.js')}}"></script>
    <script src="{{url('frontend/js/charts/easypiechart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('frontend/js/charts/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('frontend/js/charts/flot/jquery.flot.min.js')}}"></script>
    <script src="{{url('frontend/js/charts/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{url('frontend/js/charts/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{url('frontend/js/charts/flot/jquery.flot.grow.js')}}"></script>
    <script src="{{url('frontend/js/charts/flot/demo.js')}}"></script>
    <script src="{{url('frontend/js/calendar/bootstrap_calendar.js')}}"></script>
    <script src="{{url('frontend/js/calendar/demo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('frontend/js/sortable/jquery.sortable.js')}}"></script>
    <script src="{{url('frontend/js/app.plugin.js')}}"></script>
</body>
<!-- Mirrored from flatfull.com/themes/note/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 14:37:18 GMT -->

</html>