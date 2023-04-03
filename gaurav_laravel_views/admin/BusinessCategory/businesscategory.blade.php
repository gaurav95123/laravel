
@extends('admin.layout.adminLayout')
@section('title','Business Category')
@section('content')
 
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Business Category</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Business Category</li>
                        </ol>
                    </div>
                    <div class="page_title_right">
                        <div class="add_button ms-2">
                            <a href="{{url('/add_businesscategory')}}" class="btn_1">Add Business Category</a>
                            <a href="{{url('/businesscategory/exportcsv')}}" class="btn_1">Download CSV</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Business Controller</h4>
                                <div class="box_right d-flex lms_block align-items-center">
                                    <div class="dropdown client_drop me-3">
                                        <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-filter me-2" aria-hidden="true"></i>
                                            filter
                                        </a> -->
<!-- <div class="page_title_right">
<div class="add_button ms-2">
<a href="{{url('/business/exportcsv')}}" class="btn_1">Downloadcsv</a>
<a href="{{url('/business/exportexcel')}}" class="btn_1">Downloadexcel</a>
</div>
</div> -->

<!-- <div class="page_title_right">
<div class="add_button ms-2">
<a href="{{url('/business/exportexcel')}}" class="btn_1">Downloadexcel</a>
</div>
</div> -->
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                            <li><a class="dropdown-item" href="#">Cyflirt</a></li>
                                            <li><a class="dropdown-item" href="#">LoveSecret</a></li>
                                        </ul>
                                    </div>
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form action="{{url('/search-businesscategory')}}" method="post">
                                                @csrf
                                                <div class="search_field">
                                                     <!-- <input type="text" placeholder="Search content here..."> -->
                                                    <input type="search" class="form-control" placeholder="Search content here..." name="search">
                                                 </div> 
                                                <button type="submit"><i class="ti-search"></i></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="QA_table mb_30">
                                    <table class="table lms_table_active" id="data">
                                        <?php $count=1;?>
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">BusinessCatagory</th>
                                                <th scope="col">Action</th>

                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($businescategory as $list)
                                        
                                            <tr>
                                                <th scope="row" style="padding-top: 18px;">
                                                    <input type="radio" class="radio"> {{$count++}}
                                                </th>
                                               
                                                <td>{{$list['groupCatagory']}}</td>
                                         
                                            
                                                <td>
                                                <div class="action_btns d-flex justify-content-center">
                                                    <a href="{{url('/view_businessscategory/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-eye"></i> </a>
                                                    <a href="{{url('/edit_businessscategory/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                    <a href="{{url('/delete_businesscategory/'.base64_encode($list['id']))}}" class="action_btn del_item"> <i class="fas fa-trash"></i> </a>

                                                </div>
                                            </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                        {!! $businescategory->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>



@stop
@section('scripts')
<script>
    // $(document).ready(function(){
    //     // alert('skjfkj')
    //     $(document).on('click', '.del_item', function(){
    //         const flag = window.confirm("Are you sure want to delete ?")
    //         if(flage){
    //             window.location.href = $(this).attr('data-href')
    //         }
    //     })
    // })
</script>
@stop
