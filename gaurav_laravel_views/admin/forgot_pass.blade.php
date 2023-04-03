
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <!-- <link rel="icon" href="./imgs/head-logo.png" type="image/x-icon"> -->
    <title>KVS Admin</title>
    @include('admin.include.masterCss')
    <style>
        .error{
            color:red;
            font-size:18px;
        }
    </style>
</head>

<body class="crm_body_bg">
    <div class="col-lg-12">
        <div class="white_box bg-images mb_30 vh-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-lg-4">

                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Forget Password</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/forgetpass')}}" method="post" id="mail">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn_1 full_width text-center" value="send">
                                </div>

                                <div class="text-center">
                                    <a href="{{url('/login')}}"  class="pass_forget_btn">Cancel</a>
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

<script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=">
        </script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
    $(document).ready(function() {

        $("mail").validate({
            ignore:[],

            rules: {
                "email":{
                    required: true,          
                },
            },
              
            messages: {
                "email":{
                    required: "Enter your Email",          
                },
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        });
        
    });
</script>
