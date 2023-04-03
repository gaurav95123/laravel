@extends('admin.layout.adminLayout')
@section('title','Post Managment')
@section('content')

<style>
    .arws nav svg{
        width:35px;
    }
    </style>
    
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_25 f_w_700 dark_text">Post Managment</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Post Managment</li>
                    </ol>
                </div>
                <div class="page_title_right">
                    <div class="add_button ms-2">
                        <a href="{{url('/addposts')}}" class="btn_1">Add Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <div class="page_title_right">
<div class="add_button ms-2">
<a href="{{url('/nonbusiness/exportcsv')}}" class="btn_1">Downloadcsv</a>
<a href="{{url('/nonbusiness/exportexcel')}}" class="btn_1">Downloadexcel</a>
</div> -->
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
                            <h4>Post Managment List</h4>
                            <div class="box_right d-flex lms_block align-items-center">
                                <div class="dropdown client_drop me-3">
                                    <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-filter me-2" aria-hidden="true"></i>
                                        filter
                                    </a> -->
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Grflirt </a></li>
                                        <li><a class="dropdown-item" href="#">Cyflirt</a></li>
                                        <li><a class="dropdown-item" href="#">LoveSecret</a></li>
                                    </ul>
                                </div>
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                    <form action="{{url('/search-post')}}" method="post">
                                            @csrf
                                            <div class="search_field">
                                                <!-- <input type="text" placeholder="Search content here...">  -->
                                                <input type="search" class="form-control" placeholder="Search content here..." name="search">
                                            </div>
                                            <button type="submit"><i class="ti-search"></i> </button>
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
                                            <th scope="col">Sr</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Time/Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th> 
                                        </tr>
                                    </thead>
                                        <tbody>
                                        @foreach($posts as $list)
                                        <tr>
                                            <th scope="row" style="padding-top: 18px;">
                                                <input type="radio" class="radio"> {{$count++}}
                                            </th>
                                            <td>{{$list['title']}}</td>
                                            <td> <img src="{{isset($list['posts_img']) ? $list['posts_img']['media_url'] : ''}}" alt="post pics" width="150px" height="150px" object-fit="cover"> </td>
                                            <!-- <td><img src="{{ isset($list['posts_img']) && isset($list['posts_img'][0]) ? $list['posts_img'][0]['media_url'] : ''}}" width="150px" height="150px"></td> -->
                                            <!-- <td> <img src="{{$list['post_image']}}" width="150px" height="150px"></td> -->
                                            <!-- <td> <img src="{{url(PostsImagesPath.'/'.$list['post_image'])}}" width="150px" height="150px"></td> -->
                                            <td>{{$list['content']}}</td>
                                            <td>{{$list['posted_date']}}</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <!-- <input class="form-check-input" type="checkbox" role="switch" data-id="{{$list['id']}}" {{$list['status'] == 'active' ? 'checked' : ''}}> -->
                                                    <input type="checkbox" class="form-check-input" data-id="{{$list['id']}}" {{ $list['status'] == 'active' ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <!-- <h1>test</h1> -->
                                            <td>
                                                <div class="action_btns d-flex justify-content-center">
                                                    <a href="{{url('/view_post/'.base64_encode($list['id']))}}" class="action_btn mr_10"> <i
                                                            class="far fa-eye"></i> </a>
                                                    <a href="{{url('/edit_post/'.base64_encode($list['id']))}}"  class="action_btn mr_10"> <i
                                                            class="far fa-edit"></i> </a>
                                                    <a href="javascript:;" data-href="{{url('/delete_post/'.base64_encode($list['id']))}}" class="action_btn del_item"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center arws">
                                    {!! $post_all->links() !!}
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
$(document).ready(function(){
    // alert('jsdfh')
    $(document).on('click', '.form-check-input', function () {
        let user_id = this.getAttribute("data-id");
        let status = $(this).prop('checked') == true ? 'active' : 'inactive';
        $.ajax({
        url: "{{url('/posts/status')}}",
        type: "POST",
        data: {
            user_id,
            status,
            _token: "{{ csrf_token() }}",
        },
        success: function (response) {
            if (response.success == true) {
                toastr.success(response.message);
            }
        },
        });
    });
})
</script>

<script>
    $(document).ready(function(){
        // alert('coming here')
        $(document).on('click','.del_item',function(){
            const flag = window.confirm("Are you sure want to delete ?");
            if(flag){
                window.location.href = $(this).attr("data-href");
            }
        })
    })
</script>

@stop