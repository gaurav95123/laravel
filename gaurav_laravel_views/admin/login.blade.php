<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <!-- <link rel="icon" href="./imgs/head-logo.png" type="image/x-icon"> -->
    <title>KVS Admin</title>
    @include('admin.include.masterCss')
</head>

<body class="crm_body_bg">
    <div class="col-lg-12">
        <div class="white_box mb_30 vh-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-lg-4">

                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Log in</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/login')}}" method="post">
                                @csrf
                                <div class="">
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                                <div class="">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <input type="submit" class="btn_1 full_width text-center" value="login">

                                <div class="text-center">
                                    <a href="{{url('/forgetpass')}}" class="pass_forget_btn">Forget Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>