


<!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css"/><!--<![endif]-->
<style>
* {
box-sizing: border-box;
}

body {
margin: 0;
padding: 0;
}

a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: inherit !important;
}

#MessageViewBody a {
color: inherit;
text-decoration: none;
}

p {
line-height: inherit
}

.desktop_hide,
.desktop_hide table {
mso-hide: all;
display: none;
max-height: 0px;
overflow: hidden;
}

.image_block img+div {
display: none;
}

sup,
sub {
font-size: 75%;
line-height: 0;
}

@media (max-width:620px) {
.mobile_hide {
    display: none;
}

.row-content {
    width: 100% !important;
}

.stack .column {
    width: 100%;
    display: block;
}

.mobile_hide {
    min-height: 0;
    max-height: 0;
    max-width: 0;
    overflow: hidden;
    font-size: 0px;
}

.desktop_hide,
.desktop_hide table {
    display: table !important;
    max-height: none !important;
}
}

.mail_table td{
   border:solid 1px silver; padding:5px;    
}

</style><!--[if mso ]><style>sup, sub { font-size: 100% !important; } sup { mso-text-raise:10% } sub { mso-text-raise:-10% }</style> <![endif]-->



<?php 

if($details['message']['page']=="contact"){

    $title="You have a message from ".$details['message']['site'];
    $table='
    <table>
        <tr><td><b>Full Name</b></td>      <td>:&nbsp;&nbsp;'.$details['message']['fullName'].'</td></tr>
        <tr><td><b>Email Address</b></td>  <td>:&nbsp;&nbsp;'.$details['message']['email'].'</td></tr>
        <tr><td><b>Contact Number</b></td> <td>:&nbsp;&nbsp;'.$details['message']['contactNumber'].'</td></tr>
        <tr><td><b>Message</b></td>        <td>:&nbsp;&nbsp;'.$details['message']['message'].'</td></tr>
    </table>
    ';

}

if($details['message']['page']=="add"){

$title="New Company Registered on ".$details['message']['site'];

$table='
<table>
    <tr><td><b>Full Name</b></td>      <td>:&nbsp;&nbsp;'.$details['message']['fullName'].'</td></tr>
    <tr><td><b>Email Address</b></td>  <td>:&nbsp;&nbsp;'.$details['message']['email'].'</td></tr>
    <tr><td><b>Contact Number</b></td> <td>:&nbsp;&nbsp;'.$details['message']['contactNumber'].'</td></tr>
    <tr><td colspan="2"></td></tr>
    <tr><td colspan="2"></td></tr>
    <tr><td colspan="2"></td></tr>
    <tr><td><b>Business Name</b></td>        <td>:&nbsp;&nbsp;'.$details['message']['businessName'].'</td></tr>
    <tr><td><b>Street Address</b></td>        <td>:&nbsp;&nbsp;'.$details['message']['streetAddress'].'</td></tr>
    <tr><td><b>Telephone </b></td>        <td>:&nbsp;&nbsp;'.$details['message']['telephone'].'</td></tr>
    <tr><td><b>Mobile Number </b></td>        <td>:&nbsp;&nbsp;'.$details['message']['mobileNumber'].'</td></tr>
    <tr><td><b>Website </b></td>        <td>:&nbsp;&nbsp;'.$details['message']['website'].'</td></tr>
</table>
';

}



?>



</head>
<body class="body" style="background-color: #ffffff; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f6f5;" width="100%">
<tbody>
<tr>
<td>

<div align="center" class="alignment" style="line-height:10px">
<b></b>
</div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color:<?php echo $details['message']['color']; ?>; color: #000000; width: 600px; margin: 0 auto;" width="600">
    <tbody>
    <tr>
    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
    <div class="spacer_block block-1" style="height:21px;line-height:21px;font-size:1px;"> </div>
    <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
    <tr>
    <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
    <div align="center" class="alignment" style="line-height:10px">
        {{-- <div style="max-width: 150px;"><img alt="your-logo" height="auto" src="{{URL::asset('logo.png')}}" style="display: block; height: auto; border: 0; width: 100%;" title="your-logo" width="150"/></div> --}}
    </div>
    </td>
    </tr>
    </table>
    <div class="spacer_block block-3" style="height:21px;line-height:21px;font-size:1px;"> </div>
    </td>
    </tr>
    </tbody>
    </table>
   
    

        <div class="spacer_block block-3" style="height:30px;line-height:30px;font-size:1px;"> </div>

<div align="center" style="max-width:340px;"><img alt="your-logo" src="{{URL::asset('logo.png')}}" style="display: block; height: auto; border: 0; width: 100%;" title="your-logo" width="180"  height="42"/></div>

<div class="spacer_block block-3" style="height:30px;line-height:30px;font-size:1px;"> </div>



<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color:<?php echo $details['message']['color']; ?>; color: #000000; width: 600px; margin: 0 auto;" width="600">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:21px;line-height:21px;font-size:1px;"> </div>
<table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" class="alignment" style="line-height:10px">
    {{-- <div style="max-width: 150px;"><img alt="your-logo" height="auto" src="{{URL::asset('logo.png')}}" style="display: block; height: auto; border: 0; width: 100%;" title="your-logo" width="150"/></div> --}}
</div>
</td>
</tr>
</table>
<div class="spacer_block block-3" style="height:21px;line-height:21px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>


</td>
</tr>
</tbody>
</table>
{{-- <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffff; border-radius: 0; color: #000000; width: 600px; margin: 0 auto;" width="600">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="width:100%;">
<div align="center" class="alignment" style="line-height:10px">
 <div style="max-width: 600px;"><img alt="" height="auto" src="{{URL::asset('leads2.png')}}" style="display: block; height: auto; border: 0; width: 100%;" title="" width="600"/></div> 
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table> --}}
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f6f5;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 600px; margin: 0 auto;" width="600">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:35px;line-height:35px;font-size:1px;"> </div>
<table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="text-align:center;width:100%;">
<h1 style="margin: 0; color: #072b52; direction: ltr; font-family: \'Lora\', Georgia, serif; font-size: 27px; font-weight: 400; letter-spacing: 1px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 32.4px;"><strong>Hey There.</strong></h1>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f6f5;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 600px; margin: 0 auto;" width="600">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:30px;line-height:30px;font-size:1px;"> </div>
<table border="0" cellpadding="0" cellspacing="0" class="text_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad" style="padding-bottom:10px;padding-left:15px;padding-right:15px;padding-top:10px;">
<div style="font-family: Tahoma, Verdana, sans-serif">
<div class="" style="font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 18px; color: #222222; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 24px;"><span style="word-break: break-word; font-size: 16px;"><strong><?php echo $title; ?></strong></span></p>



<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 18px;"> </p>
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 24px;"><span style="word-break: break-word; font-size: 16px;"><?php echo $table; ?></span></p>
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 24px;"><span style="word-break: break-word; font-size: 16px;"></span></p>
</div>
</div>
</td>
</tr>
</table>
<div class="spacer_block block-3" style="height:30px;line-height:30px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f6f5;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 600px; margin: 0 auto;" width="600">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:25px;line-height:25px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f6f5;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: <?php echo $details['message']['color']; ?>; color: #000000; width: 600px; margin: 0 auto;" width="600">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Tahoma, Verdana, sans-serif">
<div class="" style="font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #f7f6f5; line-height: 1.2;">
<p style="margin: 0; text-align: center; mso-line-height-alt: 14.399999999999999px;"><?php echo date("Y");?> © <?php echo $details['message']['site']; ?> of South Africa </p>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>

