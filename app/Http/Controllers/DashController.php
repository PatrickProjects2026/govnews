<?php

namespace App;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Facades\DB;
use App\Models\Home as HomeModel;

use App\Mail\InternalEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Session;
use mysqli;

class DashController extends Controller
{
    //



    
  // Properties
 public $servername = "dedi11.cpt2.host-h.net";
 public $username = "cdnaddmckm_3";
 public $password = "71hT890K838Sv5";
 public $db="cdnaddmckm_db3";
 
 

 // public $servername = "localhost";
 // public $username = "root";
 // public $password = "";
 // public $db="stats";
 


 public static function company($id){

    $province='gauteng';
    $data=DB::select("SELECT * FROM `companies` where id=".$id);
    return $data; 
}

 

 public function connect(){
   $conn = new mysqli($this->servername, $this->username, $this->password,$this->db);
   return $conn;
 }

 
public function addtempkeywords(){

  
    // $cid=$_POST["cid"];
    // $keyword=$_POST["keywords"];
    
    // include("db/controller2.php");
    // $stats=new STATS();
    // $name= $stats->get_company_name($cid);
    // $name=$name['name'];

    
    // $stats->tempword($name,$cid,$keyword,'NULL');
    
   
     echo "there";
    
    }

 public function increment_dashboard_views($company){

   $result = mysqli_query($this->connect(), "UPDATE `dashboard_views` SET `views` = `views`+1 where `company_id`='".$company."' and `entity`='www.government.co.za';");    
   // $result = mysqli_fetch_array($result);
   // return $result;
   }

   public function get_enquiries($cid){

     $result = mysqli_query($this->connect(), "SELECT * FROM `enquiries` WHERE `cid` LIKE '".$cid."%' ");    
     // $result = mysqli_fetch_array($result);
      return $result;
     }

   
   public function get_messages($company){

     //and `entity`='13'
     $result = mysqli_query($this->connect(), "SELECT * FROM `22_messages` where `company_id`='".$company."'  order by `date` desc;");    
     // $result = mysqli_fetch_array($result);
      return $result;
     }


     public function mark_message_as_read($message_id){

       //$result = mysqli_query($this->connect(), "SELECT * FROM `22_messages` where `company_id`='".$company."' and `entity`='3';");    

       $result = mysqli_query($this->connect(), "UPDATE `22_messages` SET `status` = 'read' WHERE `id` = ".$message_id.";");  
       $result = mysqli_query($this->connect(), "UPDATE `enquiries` SET `status` = '1' WHERE `id` = ".$message_id.";");  
       
       }


       public function messages_count($company){

         //$result = mysqli_query($this->connect(), "SELECT * FROM `22_messages` where `company_id`='".$company."' and `entity`='3';");    
 //and `entity`='13'
         $result = mysqli_query($this->connect(), "SELECT count(*) as total FROM `22_messages` WHERE  `company_id`='".$company."' and `status` = 'unread' ;");  
         $result = mysqli_fetch_array($result);
         return $result['total'];
         
         }


 
 public function check($number){
     $result = mysqli_query($this->connect(), "SELECT * FROM `companies` WHERE `telephone` LIKE '%".$number."%' ");
   $result = mysqli_fetch_array($result);
   //return $result;
   //print_r($result);
   echo $result['name'];
 }
 
   public function rate($ref,$star,$date){

   //  echo $ref."-".$star."-".$date;
   $result = mysqli_query($this->connect(), "INSERT INTO `22_ratings` (`id`, `cid`, `star`, `date`) VALUES (NULL, '".$ref."', '".$star."', '".$date."'); ");
   
   $result = mysqli_query($this->connect(), "SELECT count(*) as reviews,MAX(star) as star FROM `22_ratings` WHERE `cid` LIKE '".$ref."' ORDER BY `22_ratings`.`star` DESC; ");    
   $result = mysqli_fetch_array($result);
   echo $result['star'].",".$result['reviews'];
 }
 
 public function get_rate($ref){
   
   $result = mysqli_query($this->connect(), "SELECT count(*) as reviews,MAX(star) as star FROM `22_ratings` WHERE `cid` LIKE '".$ref."' ORDER BY `22_ratings`.`star` DESC;");    
   $result = mysqli_fetch_array($result);
   return $result;
 }

// public function keywords($ref){

// $result = mysqli_query($this->connect(), "SELECT * FROM `tags` WHERE `company_id` LIKE '".$ref."';");    

// return $result;
// }



public function keywords($ref){

 $result = mysqli_query($this->connect(), "SELECT `tags` FROM `companies` WHERE `id` LIKE '".$ref."';");    
 // $result = mysqli_fetch_array($result);
 return $result;
 }
 





public function social($ref,$facebook,$twitter,$youtube,$linkedin,$instagram,$whatsapp,$other){

$result = mysqli_query($this->connect(), "UPDATE `companies` SET `facebook` = '".$facebook."',`twitter` = '".$twitter."',`youtube` = '".$youtube."',`linkedin` = '".$linkedin."',`instagram` = '".$instagram."',`mobile` = '".$whatsapp."',`skype` = '".$other."'  WHERE `companies`.`id` = ".$ref.";");    
// $result = mysqli_fetch_array($result);
// return $result;
}

// public function tempupdate($cid,$name,$email,$telephone,$fax,$address){
//   $result = mysqli_query($this->connect(), "UPDATE `shelden_companies` SET `name` = '".$name."',`email` = '".$email."',`telephone` = '".$telephone."',`fax` = '".$fax."',`address` = '".$address."' WHERE `companies`.`id` = ".$cid.";");    

// }
               
public function tempupdate($cid,$name,$email,$mobile,$telephone,$fax,$website,$address,$datetime){
 $result = mysqli_query($this->connect(), "INSERT INTO `shelden_company_changes`(`id`,`company_name`,`email`,`mobile`,`telephone`,`fax`,`website`,`address`,`change_date`) VALUES( '".$cid."', '".$name."', '".$email."', '".$mobile."', '".$telephone."', '".$fax."','".$website."', '".$address."', '".$datetime."'); ");    
 
}



public function update($cid,$name,$email,$telephone,$fax,$address){
 $result = mysqli_query($this->connect(), "UPDATE `companies` SET `name` = '".$name."',`email` = '".$email."',`telephone` = '".$telephone."',`fax` = '".$fax."',`address` = '".$address."' WHERE `companies`.`id` = ".$cid.";");    
 // $result = mysqli_fetch_array($result);
 // return $result;
}



public function add_logo($cid,$name,$descr,$target_file){
 $result = mysqli_query($this->connect(), "INSERT INTO `22_logos` (`id`, `name`, `descr`, `url`, `cid`) VALUES (NULL, '".$name."', '".$descr."', '".$target_file."', '".$cid."');");    
// $result = mysqli_fetch_array($result);
// return $result;
}

public function add_gallery($cid,$name,$cname,$target_file){
 $result = mysqli_query($this->connect(), "INSERT INTO `shelden_gallery` (`cid`, `name`,`cname`, `url`, `entity`) VALUES ('".$cid."', '".$name."', '".$cname."', '".$target_file."', '13');"); 
// $result = mysqli_fetch_array($result);
// return $result;
}

public function get_products($cid){
    $result = mysqli_query($this->connect(), "SELECT * FROM  `stats_products` where cid= '".$cid."'"); 
//    $result = mysqli_fetch_array($result);
   return $result;
   }

   public function product_cats($limit){
    $result = mysqli_query($this->connect(), "SELECT * FROM `stats_products_cats` limit ".$limit); 
//    $result = mysqli_fetch_array($result);
   return $result;
   }

public function add_product($cid,$url,$name,$descr,$price,$quantity,$status,$cat){
    $result = mysqli_query($this->connect(), "INSERT INTO `stats_products` (`id`, `name`, `descr`, `price`, `quantity`, `status`, `cid`, `url`, `cat`) VALUES (NULL, '".$name."', '".$descr."', '".$price."', '".$quantity."', '".$status."', '".$cid."', '".$url."', '".$cat."');"); 
   // $result = mysqli_fetch_array($result);
   // return $result;
   }

public function add_doc($cid,$name,$target_file){
 $result = mysqli_query($this->connect(), "INSERT INTO `22_documents` (`id`, `cid`, `name`, `url`) VALUES (NULL, '".$cid."', '".$name."', '".$target_file."');");    
// $result = mysqli_fetch_array($result);
// return $result;
}

public function get_logo($ref){

 $result = mysqli_query($this->connect(), "SELECT * FROM `22_logos` WHERE `cid` LIKE '".$ref."';");    
 // $result = mysqli_fetch_array($result);
 return $result;

 }


 // public function word($ref,$keyword,$location){
 //  // //$result = mysqli_query($this->connect(), "INSERT INTO `22_keywords` (`id`, `cid`, `keywords`, `location`) VALUES (NULL, '".$ref."', '".$keyword."', '".$location."');"); 
 //   $result = mysqli_query($this->connect(), "UPDATE `tags` SET `name` = '".$keyword."' WHERE `company_id` = ".$ref.";");  
 //    // //$result = mysqli_query($this->connect(), "INSERT INTO `tags` (`id`, `company_id`, `name`) VALUES (NULL, '".$ref."', '".$keyword."');");    
 //     //// $result = mysqli_fetch_array($result);
 //     // // echo $result['star'].",".$result['reviews'];
 //   //  // return $result;
 //     }
     
 public function tempword($name,$ref,$keyword,$location){
   //$result = mysqli_query($this->connect(), "INSERT INTO `22_keywords` (`id`, `cid`, `keywords`, `location`) VALUES (NULL, '".$ref."', '".$keyword."', '".$location."');"); 
 //$result = mysqli_query($this->connect(), "UPDATE `tags` SET `name` = '".$keyword."' WHERE `company_id` = ".$ref.";");  
   $result = mysqli_query($this->connect(), "INSERT INTO `shelden_keyword_changes` (`id`,`name`, `keyword`, `action`) VALUES ('".$ref."','".$name."', '".$keyword."', 'ADD');");  
   //$result = mysqli_query($this->connect(), "INSERT INTO `shelden_company_changes` (`id`) VALUES ('".$ref."');");  

   // $result = mysqli_fetch_array($result);
   // // echo $result['star'].",".$result['reviews'];
   // return $result;
   }


   public function tempdelword($name,$ref,$keyword,$location){   
       $result = mysqli_query($this->connect(), "INSERT INTO `shelden_keyword_changes` (`id`,`name`, `keyword`, `action`) VALUES ('".$ref."','".$name."', '".$keyword."', 'DELETE');");  
        
       }


       public function delete_gallery_item($rid){   
         $result = mysqli_query($this->connect(), "DELETE FROM `22_gallery` WHERE `id` = ".$rid.";");  
          
         }

         




   public function word($ref,$keyword,$location){
     //$result = mysqli_query($this->connect(), "INSERT INTO `22_keywords` (`id`, `cid`, `keywords`, `location`) VALUES (NULL, '".$ref."', '".$keyword."', '".$location."');"); 
     $result = mysqli_query($this->connect(), "UPDATE `tags` SET `name` = '".$keyword."' WHERE `company_id` = ".$ref.";");  
     
      // $result = mysqli_query($this->connect(), "INSERT INTO `shelden_keyword_changes` (`id`,`name`, `keyword`, `action`) VALUES ('".$ref."','".$name."', '".$keyword."', 'ADD');");  
       //$result = mysqli_query($this->connect(), "INSERT INTO `shelden_company_changes` (`id`) VALUES ('".$ref."');");  
   
       // $result = mysqli_fetch_array($result);
       // // echo $result['star'].",".$result['reviews'];
       // return $result;
       }


public function delete_from_shelden_keyword_changes($line_id){

 $result = mysqli_query($this->connect(), "DELETE FROM `shelden_keyword_changes` WHERE `line_id`=".$line_id);
}



 public function get_rate2($ref){
   
   $result = mysqli_query($this->connect(), "SELECT count(*) as reviews,star FROM `22_ratings` WHERE `cid` LIKE '".$ref."' ORDER BY `22_ratings`.`star` DESC ");    
   $result = mysqli_fetch_array($result);
   return $result;
 }
 

 public function notify($cid,$msg){
   
    $result = mysqli_query($this->connect(), "INSERT INTO `stats_notification` (`id`, `name`, `cid`, `time`) VALUES (NULL, '".$msg."', '".$cid."','".date("d-m-Y h:m:s")."');");    
    // $result = mysqli_fetch_array($result);
    return $result;
  }

  public function get_notify($cid) {
    $query = "SELECT * FROM stats_notification WHERE cid='" . mysqli_real_escape_string($this->connect(), $cid) . "'";
    $result = mysqli_query($this->connect(), $query);
    
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = (object) $row; // cast to object for Blade-style access
    }

    return $data;
}




 public function hour($ref,$time){	
   $hours=$this->get_hour($ref);
   //echo $hours[0];
   $time=$hours[0].",".$time;
   $result = mysqli_query($this->connect(), "UPDATE `companies` SET `hours` = '".$time."' WHERE `companies`.`id` = ".$ref.";");    
   //$result = mysqli_fetch_array($result);
   //return $result;
   }
 
 
   public function replace_hour($ref,$time){	
     
     $result = mysqli_query($this->connect(), "UPDATE `companies` SET `hours` = '".$time."' WHERE `companies`.`id` = ".$ref.";");    
     //$result = mysqli_fetch_array($result);
     //return $result;
     }
 
 
 
 
   public function get_hour($ref){	
   $result = mysqli_query($this->connect(), "SELECT hours FROM `companies` WHERE id=".$ref);    
   $result = mysqli_fetch_array($result);
   return $result;
   }
 





 public function get_user($email){
   
   // and `entity`='www.government.co.za' 
   $result = mysqli_query($this->connect(), "SELECT * FROM `stats_user` WHERE `email` LIKE '".$email."'  ");
   $result = mysqli_fetch_array($result);
   return $result;
 }

 public function add_user($company,$email,$password,$cid,$date,$signedat,$by,$capacity,$url,$price){
   
   $result = mysqli_query($this->connect(), "INSERT INTO `stats_user` (`id`, `name`, `email`, `password`, `company`, `status`, `question`, `answer`, `other_mail`, `entity`, `date`,`signed_at`, `signed_by`, `capacity`, `url`, `price`)
    VALUES (NULL, '".$company."', '".$email."', '".$password."', '".$cid."', 'Client', '', '', '', 'www.government.co.za', '".$date."', '".$signedat."', '".$by."', '".$capacity."', '".$url."', '".$price."');");
   // $result = mysqli_fetch_array($result);
   // return $result;
 }

 public function add_company($company,$address,$telephone,$email,$website){
   
   $result = mysqli_query($this->connect(), "INSERT INTO `companies` (`id`, `name`, `address`, `locations`, `paddress`, `telephone`, `mobile`, `fax`, `email`, `website`, `about_us`, `hours`, `status`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`, `skype`, `created_at`, `created_by`, `updated_at`, `updated_by`, `gov_bus`, `gov_type`, `country`, `province`, `city`, `country_id`, `province_id`, `freelisting`, `search_rank_id`, `subscribed`, `user_id`, `do_not_send_mail`, `promotions_ad_link`, `classified_banner_promo_link`) VALUES (NULL, '".$company."', '".$address."', NULL, NULL, '".$telephone."', NULL, NULL, '".$email."', '".$website."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-26 15:12:04.000000', NULL, '2022-09-26 15:12:04.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1000', '1', NULL, NULL, '', NULL);");
   
   $result = mysqli_query($this->connect(), "SELECT id FROM `companies` ORDER BY id desc limit 1;");
  
   $id=mysqli_fetch_array($result)[0];
   // $id=$this->connect()->insert_id;
   // $id=mysqli_insert_id($this->connect());
   
   // echo   $id;
   return $id;
 }
 public function get_user2($email,$password){
   
   $result = mysqli_query($this->connect(), "SELECT * FROM `stats_user` WHERE `email` LIKE '".$email."' and  `password` LIKE '".$password."' ");
   $result = mysqli_fetch_array($result);
   return $result;
 }

 public function login($username,$password){

   $user=$this->get_user2($username,$password);
   
   if($user['status']=="Client"){
       echo "<script>";
       echo "window.location='view_userdash.php?ref=".$user['company']."'"; 
       echo "</script>";
   }
   else if($user['status']=="Admin"){
       echo "<script>";
       echo "window.location='view_admindash.php?ref=".$user['company']."'"; 
       echo "</script>";
   }


 }

 public function send_mail($cid){

$company=$this->get_company($cid);
$statz=$this->get_stats($cid,date("Y-m"));

// echo $company['name'];
// echo $stats['views'];


$logo=$this->get_logo($cid);
// print_r($logo);

$logo_url="";
foreach($logo as $logo){
 // print_r($logo);
 $logo_url= $logo['url'];
}

$cdn_logo=$this->cdn_logo($cid);
$cdn_logo=$cdn_logo[2];

if($logo_url){
 $logo_url="https://government.co.za/stats/".$logo_url;
}
else if($cdn_logo){
 $logo_url="http://cdn.adslive.com/".$cdn_logo;
}
else {
   $logo_url="https://government.co.za/assets/images/fl/logoph.jpg";
}

$overall=0;
if($company['name']){ $overall+=12;}
if($company['website']){ $overall+=15;}
if($company['email']){ $overall+=17;}

// echo $overall;


if($company['website']){ $website= '<a href="https://'.$company['website'].'">'.$company['website'].'</a>'; } else {$website= "N/A";}

$message='
<html>
<body>

<table class="nl-container" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #e9e9e9;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<table class="row row-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="image_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="width: 100%; padding-right: 0px; padding-left: 0px;">
<div style="line-height: 10px;"><img class="big" style="display: block; height: auto; border: 0; width: 600px; max-width: 100%;" src="http://phplaravel-480443-1542331.cloudwaysapps.com/newsletters/21042022/emailheader2022.png" alt="" width="600" /></div>
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
</table>
<table class="row row-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="background-color: #3a5f8b; color: white;" width="600"><a href="https://government.co.za/stats/sign_in.php?ref='.$company['email'].'" style="color:white;text-decoration:none;" color="white">LOGIN TO YOUR FREE LISTING STATISTICS: '."01".date("/m/Y")."-"."30".date("/m/Y").'</a></td>
</tr>
<tr>
<td style="background-color: #3a5f8b; color: white; font-weight: 600; font-size: 20px;" width="600">'.$company['name'].'</td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr style="color: #3e5886; text-align: center;">
<td style="background-color: white;" rowspan="8" width="200"><a href="https://findmybusiness.government.co.za"><img src="'.$logo_url.'" alt="logo" width="160" height="119" /></a></td>
<td rowspan="9"> </td>
</tr>
<tr style="color: white; text-align: center;">
<td style="background-color: #ff2c00; text-align: left;" width="224">Listing Views</td>
<td style="background-color: #276a48; text-align: center;" width="224">'.$statz['views'].'</td>
</tr>
<tr style="color: #99938f; text-align: center; background-color: transparent;">
<td width="2"> </td>
</tr>
<tr>
<td style="color: #3b5d7b; text-align: left; background-color: white;" width="224">Contact no.</td>
<td style="color: #97938e; text-align: center; background-color: white;text-align:left" width="224"><a href="tel:'.$company['telephone'].'">'.$company['telephone'].'</a></td>
</tr>
<tr>
<td style="color: #3b5d7b; text-align: left; background-color: white;" width="224">Location</td>
<td style="color: #97938e; text-align: center; background-color: white;text-align:left" width="224"><a href="http://maps.google.com/maps?q='.str_replace(" ","+",$company['address']).'">
   '.$company['address'].'</a></td>
</tr>
<tr>
<td style="color: #3b5d7b; text-align: left; background-color: white;" width="224">Website link</td>
<td style="color: #97938e; text-align: center; background-color: white;text-align:left" width="224">'.$website.'</td>
</tr>
<tr>
<td style="color: #3b5d7b; text-align: left; background-color: white;" width="224">Company Logo</td>
<td style="color: #97938e; text-align: center; background-color: white;text-align:left" width="224"><a href="https://findmybusiness.government.co.za">N/A - Upgrade Listing</a></td>
</tr>
<tr>
<td style="color: #3b5d7b; text-align: left; background-color: white;" width="224">Digital Advertisement</td>
<td style="color: #97938e; text-align: center; background-color: white;text-align:left" width="224"><a href="https://findmybusiness.government.co.za">N/A - Upgrade Listing</a></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-4" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr style="color: white; text-align: left; background-color: #ff2c00;">
<td width="200">Listing Screenshot</td>
<td style="background-color: #276a48;" width="200">Top Keywords</td>
<td style="background-color: #276a48;" width="200">Hits</td>
</tr>
<tr style="color: #435d7b; font-size: 14px; text-align: left; background-color: white;">
<td style="font-size: 14px; text-align: center; background-color: white;" rowspan="7" width="200"><a href="https://government.co.za/home/company/'.$company['id'].'" target="_blank"> <img src="http://phplaravel-480443-1542331.cloudwaysapps.com/newsletters/21042022/ArmscorScreenshot.jpg" alt="" width="200" /> <br /><br /> View Listing </a></td>
<td width="200">Municipality</td>
<td width="200">301,112</td>
</tr>
<tr style="color: #435d7b; font-size: 14px; text-align: left; background-color: white;">
<td width="200">Government</td>
<td width="200">258,323</td>
</tr>
<tr style="color: #435d7b; font-size: 14px; text-align: left; background-color: white;">
<td width="200">Tenders</td>
<td width="200">215,081</td>
</tr>
<tr style="color: #435d7b; font-size: 14px; text-align: left; background-color: white;">
<td width="200">Construction</td>
<td width="200">201,593</td>
</tr>
<tr style="color: #435d7b; font-size: 14px; text-align: left; background-color: white;">
<td width="200">Business</td>
<td width="200">185 332</td>
</tr>
<tr style="color: #435d7b; font-size: 14px; text-align: left; background-color: white;">
<td width="200">Accommodation</td>
<td width="200">171,895</td>
</tr>
<tr style="color: #9c938b; font-size: 14px; text-align: left; background-color: white;">
<td width="200">Free Listings<br />support only 4<br />keywords</td>
<td width="200"><a href="https://findmybusiness.government.co.za">Upgrade to premium</a> to add up to 30 keywords and be displayed on page1 of the search results above the free listings.</td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-5" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="color: white; text-align: center; background-color: #e95030;" width="300">Listing Quality</td>
<td style="background-color: #32895c; color: white; text-align: center;" width="300">Similar Listings</td>
</tr>
<tr>
<td style="color: white; text-align: center; background-color: #ff2c00; font-size: 40px; font-weight: bold;" width="300">'.$overall.'/100</td>
<td style="background-color: #276a48; color: white; font-size: 40px; font-weight: bold;" width="300">4875</td>
</tr>
</tbody>
</table>
<br /> 
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="color: white; text-align: center; background-color: #3e5886;" width="600"><a style="color: white; text-decoration: none;" href="https://findmybusiness.government.co.za"> CLICK HERE TO UPGRADE / EDIT LISTING</a></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-6" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="color: #80808b; text-align: center; background-color: white;" width="600">The Government Online™ website and database is now available to the public with 742,289 active business listings, facilitating 8 million search requests on average every month and growing. If you would like to have your business listing displayed on the first page #1 of the search results, please <a href="https://findmybusiness.government.co.za">click here</a> or follow this link: <a href="https://findmybusiness.government.co.za">FindMyBusiness.Government.co.za</a> <br /> <br /> <strong>Top Listings &amp; Banner Advertising Now Available           <br /><br /> Starting from R495 Per Month!</strong></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-7" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="color: white; text-align: center; background-color: #c8c22e; font-size: 14px;" width="300">Government Directory™         Website, Database &amp; Publication 2022-2023         NEW ADVERTISERS</td>
<td style="background-color: #32895c; color: white; text-align: center; font-size: 14px;" width="300">Government Directory™ From Our Blog:</td>
</tr>
<tr>
<td style="color: white; text-align: center; background-color: white; font-size: 40px; font-weight: bold;" width="300"><img src="https://drive.google.com/uc?export=view&amp;id=10Ec9Jns30FKnZenvaBkZwnSlW4sU11BF" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=13Pr07icYp-Ffd2byvt7-ESvyiXI6wV1r" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1DnmcTmnvw-Il5ZK56FmVXGvli-nRWpYa" alt="" width="80" /> <br /> <img src="https://drive.google.com/uc?export=view&amp;id=1FIiCQyGQSp6Q_hXody75mD5uUxAcKTNL" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1JNWzXOU_p9QmFuPrLxMDUHhZWXRH0x_O" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1LGVwSj2ULW9GbBdA4owWcGWJObrqmrZI" alt="" width="80" /> <br /> <img src="https://drive.google.com/uc?export=view&amp;id=1UseP6-1rEqPYaoOPCHODzBcjJnv8qw79" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1TdNdpCgAJivsMbbFI5cPRbbx1sYH4uv3" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1UdVrgju85tQqagm6du14ehldto4S-2N6" alt="" width="80" /> <br /> <img src="https://drive.google.com/uc?export=view&amp;id=1b8jrlpeYsaY9myxEdYgNs7C5CUAtVxon" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1cyJL8dy1XLAGtaK4yur1FEI60uddx21F" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1fuxzpjlRJNjrG_Y4c8cOi4HCl3Sro8Be" alt="" width="80" /> <br /> <img src="https://drive.google.com/uc?export=view&amp;id=1gPwsapIRZZaOoEoWA__sAfNz4RhMtEk7" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1teCan-HMa8Dqta00_zVWY3-05iM1E7Xy" alt="" width="80" /> <img src="https://drive.google.com/uc?export=view&amp;id=1y8O3RIqq4yv6QMcxQ_U_sIE7_KvlJfOJ" alt="" width="80" /></td>
<td style="background-color: white; color: #87878b; font-size: 13px;" width="300"><strong>The Importance of Advertising</strong> <br /> <br /> As more and more brands enter the market, businesses are starting to struggle for the attention of their target audience with consumers having more options as compared to before.         So, why is advertising important when this happens?         <br /><a href="https://blog.government.co.za">Read more</a> <br /><br /><br /> <strong>Adapt to the new customer</strong> <br /><br /> For a brand, an online presence has never been as important as today. Try to treat your daily work as business as usual, but keep it digital. Locate your target audience and how their lifestyle has changed and map out how you should be targeting them.         What is your target audiences` emotional context? What do they want to hear? How should you be communicating with them?<br /> <a href="https://blog.government.co.za">Read more</a></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-8" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="color: white; background-color: #ff2c00;" colspan="3" width="600">Government Online - Business Video Advertisements of the Week</td>
</tr>
<tr>
<td width="200"><a href="https://youtu.be/-AXJHCvZUos" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=15WgO8vw7SIZ9WxlOmGp2VKWLrKWxQ3G5" alt="" width="170" /></a></td>
<td width="200"><a href="https://youtu.be/2KYoY72ho_U" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=19cQl8deqYWUOiSSNDqAhhtWyAHxVanUL" alt="" width="170" /></a></td>
<td width="200"><a href="https://youtu.be/TMY0JiejGzQ" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1eDPJunDdHJnLkeyO4hF4FTRHWGhVc2ZU" alt="" width="170" /></a></td>
</tr>
<tr>
<td width="200"><a href="https://youtu.be/tEFjPa5eMxo" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1jvMhe5qubZiqR1ypA94RmjoEEBVgVyOq" alt="" width="170" /></a></td>
<td width="200"><a href="https://youtu.be/Uwuu3c-ZhC4" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1pl2IeA9KgDZFWu9CJTX0st67Sn0fLy7j" alt="" width="170" /></a></td>
<td width="200"><a href="https://youtu.be/wA3OFwNgA6U" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1uII0Qc5ksqnq0zdLcGwZK9F5rfDRwu-X" alt="" width="170" /></a></td>
</tr>
<tr>
<td colspan="3" width="600">Need a Video Advertisement for Your Business?       <br /><br /> <a style="color: white; text-decoration: none; background-color: #276a48; padding: 10px;" href="#">Click Here</a></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-9" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td style="font-size: 14px;" width="600"><a href="https://government.co.za/home/by_cat/25" target="_blank">•GOVERNMENT LISTINGS</a>         <a href="https://government.co.za/pages/entertainment" target="_blank">•ADVERTORIALS</a>         <a href="https://government.co.za/pages/view/index" target="_blank">•NEWS</a>         <a href="https://government.co.za/pages/tenders/tips" target="_blank">•TENDERS</a>         <a href="https://government.co.za/pages/gazette/" target="_blank">•GAZETTES</a>         <a href="https://government.co.za/pages/view/press" target="_blank">•PRESS RELEASES</a>         <a href="https://government.co.za/pages/vacancies/1" target="_blank">•VACANCIES</a>         <a href="https://government.co.za/pages/view/govprograms" target="_blank">•PROGRAMS</a>         <a href="https://government.co.za/pages/view/NewDevelopments" target="_blank">•DEVELOPMENTS</a>         <a href="https://government.co.za/pages/search" target="_blank">•FOR SALE ITEMS</a>  <br /> <a href="https://government.co.za/home/by_cat/11" target="_blank">•BUSINESS / COMPANY LISTINGS AND ADVERTISEMENTS (new)</a></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-10" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center;">
<table style="border: 0; text-align: center;" cellspacing="0" cellpadding="10" width="600">
<tbody>
<tr>
<td colspan="3" width="600">Need Assistance with Your Listing / Advertising?</td>
</tr>
<tr>
<td width="200"><a style="font-size: 14px; color: #383838; text-decoration: none;" href="https://tawk.to/governmentdirectorysa" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1neaYkrDf8RgtC_2WULoxdzyu4rWf9GcM" alt="" width="50" /> <br /> Live Chat </a></td>
<td width="200"><a style="font-size: 14px; color: #383838; text-decoration: none;" href="tel:+27113336000" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1A6mIiwQ3lbnK6sxZzrmqtEDnrbaqpMXx" alt="" width="40" /> <br /> Call +27 11 3336000 </a></td>
<td width="200"><a style="font-size: 14px; color: #383838; text-decoration: none;" href="mailto:support@government.co.za" target="_blank"> <img src="https://drive.google.com/uc?export=view&amp;id=1tRVBYDxa8h-L43kvRtDI-gkFveO6pnY6" alt="" width="43" /> <br /> support@government.co.za </a></td>
</tr>
</tbody>
</table>
</div>
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
</table>
<table class="row row-15" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #5d5d5d;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0; mso-table-rspace: 0; color: #000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; padding-left: 15px; padding-right: 15px; border: 0;" width="33.333333333333336%">
<table class="html_block" style="mso-table-lspace: 0; mso-table-rspace: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="padding-top: 35px; padding-bottom: 35px;">
<div style="font-family: Roboto,Tahoma,Verdana,Segoe,sans-serif; text-align: center;"><a style="font-size: 12px; text-decoration: none; color: white;" href="tel:+27113336000"><img src="https://drive.google.com/uc?export=view&amp;id=1ER3mfkDDbpe6pSRInwA2bxo4_rh3BKCv" alt="" />  +27 (0) 11 333 6000</a></div>
</td>
</tr>
</tbody>
</table>
</td>
<td class="column column-2" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; padding-left: 15px; padding-right: 15px; border: 0;" width="33.333333333333336%">
<table class="html_block" style="mso-table-lspace: 0; mso-table-rspace: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="padding-top: 35px; padding-bottom: 35px;">
<div style="font-family: Roboto,Tahoma,Verdana,Segoe,sans-serif; text-align: center;"><a style="font-size: 12px; text-decoration: none; color: white;" href="mailto:info@government.co.za"><img src="https://drive.google.com/uc?export=view&amp;id=1860SsfDLqIpP5bVGgkFrltQ0dP7Rs8fP" alt="" />  info@government.co.za</a></div>
</td>
</tr>
</tbody>
</table>
</td>
<td class="column column-3" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; padding-left: 15px; padding-right: 15px; border: 0;" width="33.333333333333336%">
<table class="html_block" style="mso-table-lspace: 0; mso-table-rspace: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="padding-top: 35px; padding-bottom: 35px;">
<div style="font-family: Roboto,Tahoma,Verdana,Segoe,sans-serif; text-align: center;"><a style="font-size: 12px; text-decoration: none; color: white;" href="https://government.co.za"><img src="https://drive.google.com/uc?export=view&amp;id=1gc7uLWzK3URqx5k6_s7QTt7zLNXp6Sug" alt="" style="border-radius:4px;"/>  government.co.za</a></div>
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
</table>
<table class="row row-16" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #5d5d5d;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0; mso-table-rspace: 0; color: #000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: center !important; vertical-align: top; border: 0; padding: 25px;" width="100%">
<table class="image_block" style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding-right: 0; padding-left: 0; text-align: center;">
<div style="line-height: 10px;"><a href="https://dotcomafrica.com/"><img style="display: block; height: auto; border: 0px; width: 79px; max-width: 100%; margin: auto; text-align: center;" title="Gov Directory 2022" src="https://drive.google.com/uc?export=view&amp;id=182lDRc0sieNBvjaMjIO6Wx5GSbb-CFd6" alt="DCA" width="79" /></a></div>
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
</table>
<table class="row row-17" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #5d5d5d;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0; mso-table-rspace: 0; color: #000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; border: 0; padding: 15px;" width="100%">
<table class="html_block" style="mso-table-lspace: 0; mso-table-rspace: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td>
<div style="font-family: Roboto,Tahoma,Verdana,Segoe,sans-serif; text-align: center;">
<p style="color: white; font-size: 13px;">You are receiving this email because you have previously received offers verbally, written or both. You can update your email preferences or  <br />   <a style="color: #474747; padding: 0.2em 0.5em 0.2em 0.5em; background: white; border-radius: 50px; text-decoration: none;" href="https://dotcomafrica.com/unsubscribe.php" target="_blank"> unsubscribe </a>   at any time.</p>
<br />
<p style="color: white; font-size: 13px;">2022 © Government Directory of South Africa - powered by <a style="text-decoration: none; color: white;" href="https://www.dotcomafrica.com/">Dotcom Africa</a> <br /><br /><a style="font-family: Roboto,Tahoma,Verdana,Segoe,sans-serif; text-decoration: none; color: white;" href="https://www.government.co.za/home/terms" target="_blank">Terms &amp; Conditions</a> | <a style="text-decoration: none; color: white;" href="https://www.government.co.za/home/public_alert" target="_blank">Public Alert</a> | <a style="text-decoration: none; color: white; font-family: Roboto,Tahoma,Verdana,Segoe,sans-serif;" href="https://www.dotcomafrica.com/privacy_policy.php" target="_blank">Privacy Policy</a><br /><br /></p>
</div>
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
</table>
<table class="row row-18" style="mso-table-lspace: 0; mso-table-rspace: 0;" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
<tbody>
<tr>
<td>
<table class="row-content stack" style="mso-table-lspace: 0; mso-table-rspace: 0; background-color: #fff; color: #000; width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0; mso-table-rspace: 0; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border: 0;" width="100%">
<table class="icons_block" style="mso-table-lspace: 0; mso-table-rspace: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
<table style="mso-table-lspace: 0; mso-table-rspace: 0;" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="vertical-align: middle; text-align: center;"><!--[if vml]> 
<table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;" _mce_style="display: inline-block; padding-left: 0px; padding-right: 0px; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
<![endif]--><!--[if !vml]><!--> 
<table class="icons-inner" style="mso-table-lspace: 0; mso-table-rspace: 0; display: inline-block; margin-right: -4px; padding-left: 0; padding-right: 0;" cellspacing="0" cellpadding="0">
<!--<![endif]-->
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
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>';



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <statistics@government.co.za>' . "\r\n";
$headers .= 'Cc: statistics@government.co.za' . "\r\n"; 

$to=$company['email'];
$subject="YOUR FREE LISTING STATISTICS";


if(mail($to,$subject,$message,$headers)){
   echo "Mail Sent, Go back...";
}

 }

 public function get_company($id){
   
   $result = mysqli_query($this->connect(), "SELECT * FROM `companies` WHERE `id` = ".$id);
   $result = mysqli_fetch_array($result);
   return $result;
 }

 public function get_company_name($id){
   
   $result = mysqli_query($this->connect(), "SELECT `name` FROM `companies` WHERE `id` = ".$id);
   $result = mysqli_fetch_array($result);
   return $result;
 }



 public function delete_company($id){
   
   $result = mysqli_query($this->connect(), "DELETE FROM `stats_user` WHERE `stats_user`.`company` =".$id);
   $result = mysqli_query($this->connect(), "DELETE FROM `22_keywords` WHERE `22_keywords`.`cid` =".$id);
   $result = mysqli_query($this->connect(), "DELETE FROM `22_gallery` WHERE `22_gallery`.`cid` =".$id);

   $result = mysqli_query($this->connect(), "DELETE FROM `22_analytics` WHERE `22_analytics`.`company` =".$id);
   $result = mysqli_query($this->connect(), "DELETE FROM `22_documents` WHERE `22_documents`.`cid` =".$id);
   $result = mysqli_query($this->connect(), "DELETE FROM `22_documents` WHERE `22_documents`.`cid` =".$id);

   $result = mysqli_query($this->connect(), "DELETE FROM `22_logos` WHERE `22_logos`.`cid` =".$id);
   $result = mysqli_query($this->connect(), "DELETE FROM `22_ratings` WHERE `22_ratings`.`cid` =".$id);
   // $result = mysqli_fetch_array($result);
   // return $result;
 }

 // public function cdn_logo($id){
   
 //   $result = mysqli_query($this->connect(), "SELECT * FROM `logos` WHERE `company_id` =".$id);
 //   $result = mysqli_fetch_array($result);
 //   return $result;
 // }


 public function cdn_logo($id){
   
   $result = mysqli_query($this->connect(), "SELECT `logos` FROM `companies` WHERE `id` =".$id);
   $result = mysqli_fetch_array($result);
   return $result;
 }



 public function get_stats($id,$date){
   // and date like '".$date."%'
   
   $result = mysqli_query($this->connect(), "SELECT sum(views) as views FROM `22_analytics` WHERE company_id=".$id." and type like 'Views' and `entity`='13' ");
   $result = mysqli_fetch_array($result);
   return $result;
 }

 public function report_mail($id){
     
   $result = mysqli_query($this->connect(), "UPDATE `stats_user` SET `email_sent` = 'yes', `sent_date` = '".date("Y-m-d")."' WHERE `stats_user`.`company` = ".$id.";");
 
 }


 public function my_stats($id,$type){
   
   $result = mysqli_query($this->connect(), "SELECT sum(views) as views FROM `22_analytics` WHERE company_id=".$id." and type like '".$type."%'");
   $result = mysqli_fetch_array($result);
   return $result;
 }

 public function my_views($id,$year){
   
   $result = mysqli_query($this->connect(), "SELECT SUM(views) as views FROM `22_analytics` WHERE `company_id` LIKE '".$id."' and type like 'Views' and date like '".$year."%' and `entity`='13' ;");
   $result = mysqli_fetch_array($result);
   return $result;
 }

 public function my_gallery($id){
   
//    $result = mysqli_query($this->connect(), "SELECT * FROM `22_gallery` WHERE cid=".$id." ");  
   $result = mysqli_query($this->connect(), "SELECT * FROM `shelden_gallery` WHERE cid=".$id." ");
   // $result = mysqli_fetch_array($result);
   return $result;
 }

 public function my_docs($id){
   
   $result = mysqli_query($this->connect(), "SELECT * FROM `22_documents` WHERE cid=".$id." ");
   // $result = mysqli_fetch_array($result);
   return $result;
 }

 

 public function stats_companies(){
   
   // $result = mysqli_query($this->connect(), "SELECT * FROM `0_clients` left join companies on companies.email=0_clients.email1;");
   // $result = mysqli_query($this->connect(), "SELECT * FROM `stats_user` left join companies on companies.id=stats_user.company  where stats_user.company!='';");
   $result = mysqli_query($this->connect(), "SELECT * FROM `stats_user` left join companies on companies.id=stats_user.company  where stats_user.company!=''  order by stats_user.email_sent desc;");
   // $result = mysqli_fetch_array($result);
   return $result;
 }

 public function performance($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT SUM(views) as total,SUBSTR(date, 1, 7) as date2 FROM `22_analytics` WHERE `company_id` = '".$ref."' and date like '".$year."%' and type like 'Views' and `entity`='13' group by date2;");
   return $result;
 }
 public function ebook($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT SUM(views) as total,SUBSTR(date, 1, 7) as date2 FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and date like '".$year."%' and type='E-Book' group by date2;");
   return $result;
 }


 public function countries($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT DISTINCT(country),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and date like '".$year."%' and type like 'Views' and `entity`='13' group by country order by total desc;");
   return $result;
 }


 // public function desk_mobile($ref,$year){    
 //   $result = mysqli_query($this->connect(), "SELECT DISTINCT(desk_mobile),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and date like '".$year."%' and type like 'Views' group by desk_mobile  order by total desc;");
 //   return $result;
 // }


 public function desk_mobile($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT DISTINCT(desk_mobile),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and type like 'Views' and `entity`='13' group by desk_mobile  order by total desc;");
   return $result;
 }


 // public function browser($ref,$year){    
 //   $result = mysqli_query($this->connect(), "SELECT DISTINCT(browser),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and date like '".$year."%' and type like 'Views' group by browser  order by total desc;");
 //   return $result;
 // }

 public function browser($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT DISTINCT(browser),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and type like 'Views' and `entity`='13' group by browser  order by total desc;");
   return $result;
 }

 public function s_keywords($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT DISTINCT(keywords),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and date like '".$year."%' group by keywords order by total desc;");
   return $result;
 }

 public function operating_sys($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT DISTINCT(operating_sys),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE '".$ref."' and date like '".$year."%' group by operating_sys order by total desc;");
   return $result;
 }

 public function search_engine($ref,$year){    
   $result = mysqli_query($this->connect(), "SELECT DISTINCT(search_engine),SUM(Views) AS total FROM `22_analytics` WHERE `company_id` LIKE ".$ref." and date like '".$year."%' group by search_engine order by total desc;");
   return $result;
 }



 public function classified($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM classified_banners where company_id=".$ref." limit 1");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/classified.png";

 }

 public function viewpage_banners($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM viewpage_banners where company_id=".$ref." limit 1");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/viewpage.png";
 }

 
 public function get_all(){    
   $result = mysqli_query($this->connect(), "SELECT count(*) as total FROM `stats_user`;");
   $result = mysqli_fetch_array($result);
   return $result['total'];
 }


 public function get_sent(){    
   $result = mysqli_query($this->connect(), "SELECT count(*) as total FROM `stats_user` where email_sent='yes' ;");
   $result = mysqli_fetch_array($result);
   return $result['total'];
 }


//   get_all()
// get_sent()
// get_pending()


 public function promo_banners($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM promotions where company_id=".$ref." limit 1");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/promo.png";
 }

 public function full_banner($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM adverts where company_id=".$ref." and `url` LIKE '%FP%' ");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/full.png";
 }

 public function half_banner($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM adverts where company_id=".$ref." and `url` LIKE '%HP%' ");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/half.png";
 }

 public function quarter_banner($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM adverts where company_id=".$ref." and `url` LIKE '%QP%' ");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/quoter.png";
 }


 public function double_banner($ref){    
   $result = mysqli_query($this->connect(), "SELECT * FROM adverts where company_id=".$ref." and `url` LIKE '%DP%' ");
   $result = mysqli_fetch_array($result);
   return isset($result['url']) && $result['url']
   ? "https://cdn.adslive.com/" . $result['url']
   : "https://signup.government.co.za/img/half.png";
 }






 public function add_stats($cid,$date,$type,$views,$country_in){

   // echo $cid."-".$views;

   $browsers=array("Chrome","Firefox","Safari","Opera","MS Edge","Safari","Ghost Browser");
   $desk_mobile=array("Mobile","Desktop");
   $os=array("Android OS","Windows","iOS","Linux","Macintosh");
   $keywords=array("Business","Service Provider","Local Business","Professional Services","Municipalities","Sales & Services","Business Services");
   $country=array("Botswana","eSwatini","Lesotho","Namibia","Zimbabwe","Zambia");
   $regions=array('KwaZulu-Natal','Limpopo','Western Cape','Mpumalanga','Northern Cape','North West','Free State','Eastern Cape','Gauteng');
   $se=array("Google","Yahoo","Bing");

   $browser=$browsers[rand(0,count($browsers)-1)];
   $desk_mobile=$desk_mobile[rand(0,count($desk_mobile)-1)];
   $os=$os[rand(0,count($os)-1)];
   $keywords=$keywords[rand(0,count($keywords)-1)];
   // $country=$country[rand(0,count($country)-1)];
   $country=$country_in;
   $regions=$regions[rand(0,count($regions)-1)];
   $se=$se[rand(0,count($se)-1)];

   echo $regions;
   $result = mysqli_query($this->connect(), "INSERT INTO `22_analytics` (`id`, `company_id`, `date`, `type`, `views`, `country`, `subregion`, `desk_mobile`, `search_engine`, `operating_sys`, `keywords`, `browser`)
                                         VALUES (NULL, '".$cid."', '".$date."', '".$type."', '".$views."', '".$country."', '".$regions."', '".$desk_mobile."', '".$se."', '".$os."', '".$keywords."','".$browser."');");
   return $result;

 }
 
 
 




}

