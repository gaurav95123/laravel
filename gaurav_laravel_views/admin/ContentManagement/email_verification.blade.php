<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <title>KVS</title>
</head>
<style>
    @media screen and (max-width: 414px) {
        body {
            text-align: center !important;
        }
    }
</style>

<body
    style="width:100%;font-family: 'Open Sans', sans-serif;height:100%;background:#f1f1f1;margin: 0;padding: 0;box-sizing: border-box; text-align: left; font-weight: 400;">
    <table cellspacing="0" cellpadding="0" width="100%"
        style="margin: 0 auto; border-collapse:collapse;max-width: 100%;width: 100%;" border="0">
        <tbody>
            <tr>
                <td height="150"
                    style="background-image: linear-gradient(135deg,#f62336, #203fb6)">
                </td>
            </tr>
            <tr>
                <td>
                    <table cellspacing="0" cellpadding="0" width="100%"
                        style="background-color:#fff; border-radius: 0px; padding: 0; margin: -80px auto 0px; border-collapse:collapse;width: 100%; max-width: 600px"
                        border="0">
                        <tbody>
                            <tr>
                                <td height="30"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <img src="main-logo.png" alt="KVS" style="width: 100px;height: auto; " />
                                </td>

                            </tr>
                            <tr>
                                <td height="40"></td>
                            </tr>
                            <tr>
                                <td>
                                    <h1
                                        style="color: #000;font-size: 30px; font-weight: 600; text-align: center; line-height: 31.25px; margin: 0;">
                                        Welcome!</h1>

                                </td>
                            </tr>
                            <tr>
                                <td height="45">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 45px;color: #000;font-size: 14px;font-weight: 400;">
                                    <p style="text-align: left; margin-top: 0;">Hi {{ $fullname }},</p>
                                    
                                    <P style="margin-top: 0; margin-bottom: 0;">Querry : {{ $msg }}</P>
                                    <!-- <p style="text-align: left;">Thank You for Your Inquiry Email,</p> -->
                                   <P style="    border: 1px solid #e0e0e0;padding: 25PX;border-radius: 5px;margin: 0px;margin: 30px 0px;">Conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconic conic Online Luxury Home Decor Brand that creates and curates world-class premium homeconi.</P>

                                </td>
                            </tr>
                            <!-- <tr>
                                <td height="20"></td>
                            </tr> -->
                            <!-- <tr>
                                <td style="padding: 0px 45px;color: #000; text-align: center;">
                                    <p
                                        style=" font-size: 20px; display: inline-block;color: #e82713; margin: 0; border: 1px dashed #e82713; border-radius: 6px; padding: 7px 20px">
                                        <strong>817307</strong></p>
                                </td>
                            </tr> -->
                            <!-- <tr>
                                <td height="20"></td>
                            </tr> -->
                            <tr>
                                <td style="padding: 0 45px;color: #000;font-size: 14px ">
                                    <p>{{ $reply }}</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 0 45px;color: #000;font-size: 14px">
                                    Regards,
                                    <p style="margin: 0;">KVS Team</p>
                                </td>
                            </tr>
                            <tr>
                                <td height="50"></td>
                            </tr>

                            <tr>
                                <td>
                                    <table width="100%;" style="padding: 0 45px;">
                                        <tr>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <a href="https://www.facebook.com/"
                                                    style="display: inline-block; margin-right: 5px;"><img
                                                        src="../public/admin/common/img/facebook.svg" width="30px" height="30px"></a>
                                                <a href="https://linkedin.com/"
                                                    style="display: inline-block; margin-right: 5px;"><img
                                                        src="../public/admin/common/img/twitter.svg" width="30px" height="30px"></a>
                                                <a href="https://twitter.com/"
                                                    style="display: inline-block; margin-right: 5px;"><img
                                                        src="../public/admin/common/img/linkedin.svg" width="30px" height="30px"></a>
                                                <a href="https://www.instagram.com/"
                                                    style=" display: inline-block;"><img src="../public/admin/common/img/instagram.svg"
                                                        width="30px" height="30px"></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="20"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; font-size: 10px; color: #9A9A9A; padding: 0 45px;">
                                    © 2020 KVS, Inc. All Rights Reserved. | EST. Los Angeles, CA 900360
                                </td>
                            </tr>
                            <tr>
                                <td height="10"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; font-size: 10px; color: #9A9A9A; padding: 0 45px;">
                                    <p style="font-size: 10px; margin: 0;">
                                        <a href="<%= WEBSITE_URL + '/privacy-policy' %>"
                                            style="color: #9A9A9A; text-decoration: underline;">Privacy Policy</a>
                                        <span style=" color: #9A9A9A;">|</span>
                                        <a href="<%= WEBSITE_URL %>"
                                            style="color: #9A9A9A; text-decoration: underline;">Terms & Conditions</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td height="30"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>

            </tr>
            <tr>
                <td height="45"></td>
            </tr>


        </tbody>
    </table>
</body>

</html>