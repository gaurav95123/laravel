<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <!-- <link rel="icon" href="./imgs/head-logo.png" type="image/x-icon"> -->
    <title>KVS Admin</title>
    @include('admin.include.masterCss')
</head>

<style>
        .error{
            color:red;
            font-size:18px;
        }
    </style>

<body class="crm_body_bg">
    <div class="col-lg-12">
        <div class="white_box bg-images mb_30 vh-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-lg-4">

                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Reset Password</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" id="reset">
                                @csrf
                                <div class="">
                                    <input type="text" class="form-control" name="decoded_password" placeholder="New Password" autocomplete="off">
                                </div>
                                <h6 id ="passwordcheck"></h6>
                                <div class="">
                                    <input type="text" class="form-control" name="password" placeholder="Confirm Password" autocomplete="off">
                                </div>
                                <h6 id ="repeatcheck"></h6>
                                
                                <input type="submit" class="btn_1 full_width text-center" value="submit">

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
$(document).ready(function(){

        $("#reset").validate({
            ignore:[],

            rules: {
                "decoded_password":{
                    required: true,
                },
                "password":{
                    required: true,
                },
            },
              
            messages: {
                "decoded_password":{
                    required: "Please Enter Password",
                },
                "password":{
                    required: "Please Enter Confirm Password",
                },
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        })

        // PASSWORD CHECK
    
    $('#repeatcheck').hide();

$('#repeat').keyup(function(){
repeatcheck();
});

function repeatcheck(){
var repeat = $('#repeat').val();
var password = $('#password').val();

if(password != repeat){
$('#repeatcheck').show();
$('#repeatcheck').html("password are not matching");
$('#repeatcheck').focus();
$('#repeatcheck').css("color","red");
                
    data_repeatcheck  = false ;
                return  false;
}
else{
    $('#repeatcheck').hide();
}
}
    });

</script>

