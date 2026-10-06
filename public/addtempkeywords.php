<?php

$cid=$_POST["cid"];
$keyword=$_POST["keywords"];

include("db/controller2.php");
$stats=new STATS();
$name= $stats->get_company_name($cid);
$name=$name['name'];
//echo$name;

// $keywords=$stats->keywords($cid);
// foreach($keywords as $word){
//     $word=$word['name'];
//   }

 
 //$keyword="$keyword,$word";



$stats->tempword($name,$cid,$keyword,'NULL');

//echo "$cid $keyword";


?>

<script>
    
 window.location="https://signup.government.co.za/view_userdash.php?ref=<?php echo $cid?>#/Ad";
    </script>