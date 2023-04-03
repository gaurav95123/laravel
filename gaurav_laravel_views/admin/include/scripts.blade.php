<script src="{{asset('admin/common/js/jquery1-3.4.1.min.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"
    integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('admin/common/js/popper1.min.js')}}"></script>

<script src="{{asset('admin/common/js/bootstrap1.min.js')}}"></script>

<script src="{{asset('admin/common/js/metisMenu.js')}}"></script>

<script src="{{asset('admin/common/vendors/count_up/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/chartlist/Chart.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/count_up/jquery.counterup.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/datatable/js/buttons.print.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/datepicker/datepicker.js')}}"></script>
<script src="{{asset('admin/common/vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('admin/common/vendors/datepicker/datepicker.custom.js')}}"></script>
<script src="{{asset('admin/common/js/chart.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/chartjs/roundedBar.min.js')}}"></script>

<script src="{{asset('admin/common/vendors/progressbar/jquery.barfiller.js')}}"></script>

<script src="{{asset('admin/common/vendors/tagsinput/tagsinput.js')}}"></script>

<script src="{{asset('admin/common/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('admin/common/vendors/am_chart/amcharts.js')}}"></script>

<script src="{{asset('admin/common/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/scroll/scrollable-custom.js')}}"></script>

<script src="{{asset('admin/common/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>

<script src="{{asset('admin/common/vendors/apex_chart/apex-chart2.js')}}"></script>
<script src="{{asset('admin/common/vendors/apex_chart/apex_dashboard.js')}}"></script>
<script src="{{asset('admin/common/vendors/echart/echarts.min.js')}}"></script>
<script src="{{asset('admin/common/vendors/chart_am/core.js')}}"></script>
<script src="{{asset('admin/common/vendors/chart_am/charts.js')}}"></script>
<script src="{{asset('admin/common/vendors/chart_am/animated.js')}}"></script>
<script src="{{asset('admin/common/vendors/chart_am/kelly.js')}}"></script>
<script src="{{asset('admin/common/vendors/chart_am/chart-custom.js')}}"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script src="{{asset('admin/common/js/dashboard_init.js')}}"></script>
<script src="{{asset('admin/common/js/custom.js')}}"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.min.js"></script>  -->
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- slider links -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


<script>
@if(Session::has('success'))
toastr.success("{{ Session::get('success') }}");
@endif
</script>


<script>
$("#tile-1 .nav-tabs a").click(function() {
    var position = $(this).parent().position();
    var width = $(this).parent().width();
    $("#tile-1 .slider").css({
        "left": +position.left,
        "width": width
    });
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({
    "left": +actPosition.left,
    "width": actWidth
});
</script>
<script>
tinymce.init({
    selector: '#mytextarea'
});
</script>
<script>
tinymce.init({
    selector: '#LoveSecret'
});
</script>
<script>
tinymce.init({
    selector: '#Cyflirt'
});
</script>
<script>
tinymce.init({
    selector: '#Grflirt'
});
</script>
<script>
$(document).ready(function() {
    $('#data').DataTable();
});
</script>

<script type="">
//     $(document).ready(function(){
//       $('.multipleItems').slick({
//         slidesToShow: 4,
//         slidesToScroll: 4
//         dots: true,
//         infinite: true,
//         speed: 500,
//         autoplay:false,
//         fade: true,
//         cssEase: 'linear'
//       });
//   });
$('.multipleItems').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: false,
  dots: false,
        infinite: false,
//   autoplaySpeed: 2000,
});
  </script>