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
// use Illuminate\Http\Request;


class HomeController extends Controller
{
    //


    
    public function page1()
    {          
          $data['page']            = 'Home Page';            
          $data['premier']         = HomeModel::profile("premier","Gauteng",1);
          $data['mayor']           = HomeModel::profile("mayor","Western Cape",1);
          $data['municipal']       = HomeModel::profile("municipal","KwaZulu-Natal",1);
          
          $data['premier1']        = HomeModel::profile2("premier",1);
          $data['province']        = HomeModel::profile2("province",1);

          $data['Latest']          = HomeModel::cdn_news2("gauteng_gov_news","News","4");

          // $data['videos']           = HomeModel::videos("8");

          // $data['companies']        = HomeModel::companies("12");     
          // $data['biz_cats']         = HomeModel::biz_cats("12");
          // $data['gov_article_cats'] = HomeModel::gov_article_cats("8");
          // $data['product_cats']     = HomeModel::product_cats("8");
          
          // $data['promos']           = HomeModel::promos("3");
          // $data['random_class']     = HomeModel::random_class("2");     
          // $data['random_class2']    = HomeModel::random_class("2");   

          
          // $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","1");
          // $data['Latest']    = HomeModel::cdn_news2("gauteng_gov_news","News","4");
          // $data['Education'] = HomeModel::cdn_news_cat("gauteng_gov_news","Education","6");    // order by date 
          // $data['Business']  = HomeModel::cdn_news_cat("gauteng_gov_news","Business","6");    // order by date 
          // $data['Health']    = HomeModel::cdn_news_cat("gauteng_gov_news","Health","4");  // order by date 
          // $data['Sport0']    = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","6");
          // $data['Sport']     = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","1");
          // $data['Sport2']    = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","2");
          
          // $data['Security']    = HomeModel::cdn_news_cat("gauteng_gov_news","Safety and Security","3"); // order by date 
          // $data['Agriculture'] = HomeModel::cdn_news_cat("gauteng_gov_news","Agriculture, Land Reform and Rural Development","3"); // order by date 
          // $data['Transport']   = HomeModel::cdn_news_cat("gauteng_gov_news","Transport","3");  // order by date 
      
          return view('page1', $data); 
    }


    
    public function page2($pro)
    {          
          $data['page']            = 'Home Page';  
          $data['pro']             = $pro;              
          
          // $data['premier']         = HomeModel::profile("premier","Gauteng",1);
          // $data['mayor']           = HomeModel::profile("mayor","Western Cape",1);
          // $data['municipal']       = HomeModel::profile("municipal","KwaZulu-Natal",1);
          
          $data['premier1']        = HomeModel::profile("premier",$pro,1);
          $data['province']        = HomeModel::profile("province",$pro,1);

          $data['Latest']          = HomeModel::cdn_news_prov("gauteng_gov_news",$pro,"3");
          return view('page2', $data); 
    }

    public function page3($pro)
    {          
          $data['page']            = 'Home Page';  
          $data['pro']             = $pro;              
          
          // $data['premier']         = HomeModel::profile("premier","Gauteng",1);
          $data['mayor']           = HomeModel::profile("mayor",$pro,1);
          // $data['municipal']       = HomeModel::profile("municipal","KwaZulu-Natal",1);
          
          $data['premier1']        = HomeModel::profile("premier",$pro,1);
          $data['province']        = HomeModel::profile("province",$pro,1);

          $data['Latest']          = HomeModel::cdn_news_prov("gauteng_gov_news",$pro,"3");
          return view('page3', $data); 
    }


    public function page4($pro)
    {          
          $data['page']            = 'Home Page';  
          $data['pro']             = $pro;              
          
          // $data['premier']         = HomeModel::profile("premier","Gauteng",1);
          $data['mayor']           = HomeModel::profile("mayor",$pro,1);          
          $data['municipal']       = HomeModel::profile("municipal",$pro,1);
          $data['municipality']    = HomeModel::profile("municipality",$pro,1);
          
          $data['premier1']        = HomeModel::profile("premier",$pro,1);
          $data['province']        = HomeModel::profile("province",$pro,1);

          $data['Latest']          = HomeModel::cdn_news_prov("gauteng_gov_news",$pro,"4");
          return view('page4', $data); 
    }


      public function page5($pro)
    {          
          $data['page']            = 'Home Page';  
          $data['pro']             = $pro;              
          
          // $data['premier']      = HomeModel::profile("premier","Gauteng",1);
          // $data['mayor']        = HomeModel::profile("mayor",$pro,1);
          $data['municipality']    = HomeModel::profile("municipality",$pro,1);
          $data['municipal']       = HomeModel::profile("municipal",$pro,1);
          
          // $data['premier1']      = HomeModel::profile("premier",$pro,1);
          $data['province']        = HomeModel::profile("province",$pro,1);

          $data['Latest']          = HomeModel::cdn_news_prov("gauteng_gov_news",$pro,"3");
          return view('page5', $data); 
    }



    public function welcome()
    {          
          $data['page']             = 'Home Page';               
          $data['videos']           = HomeModel::videos("8");

          $data['companies']        = HomeModel::companies("12");     
          $data['biz_cats']         = HomeModel::biz_cats("12");
          $data['gov_article_cats'] = HomeModel::gov_article_cats("8");
          $data['product_cats']     = HomeModel::product_cats("8");
          
          $data['promos']           = HomeModel::promos("3");
          $data['random_class']     = HomeModel::random_class("2");     
          $data['random_class2']    = HomeModel::random_class("2");   

          
          $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","1");
          $data['Latest']    = HomeModel::cdn_news2("gauteng_gov_news","News","4");
          $data['Education'] = HomeModel::cdn_news_cat("gauteng_gov_news","Education","6");    // order by date 
          $data['Business']  = HomeModel::cdn_news_cat("gauteng_gov_news","Business","6");    // order by date 
          $data['Health']    = HomeModel::cdn_news_cat("gauteng_gov_news","Health","4");  // order by date 
          $data['Sport0']    = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","6");
          $data['Sport']     = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","1");
          $data['Sport2']    = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","2");
          
          $data['Security']    = HomeModel::cdn_news_cat("gauteng_gov_news","Safety and Security","3"); // order by date 
          $data['Agriculture'] = HomeModel::cdn_news_cat("gauteng_gov_news","Agriculture, Land Reform and Rural Development","3"); // order by date 
          $data['Transport']   = HomeModel::cdn_news_cat("gauteng_gov_news","Transport","3");  // order by date 
      
          return view('welcome', $data); 
    }


    public function advertise(){


       $data['Transport']   = HomeModel::cdn_news_cat("gauteng_gov_news","Transport","3");
     

       return view('advertise', $data); 

    }

    
    public function by_cat($cat)
    {          
          $data['page']      = $cat;
          // $data['companies'] = HomeModel::companies("12");          
          // $data['videos']    = HomeModel::videos("8");
          // $data['biz_cats']  = HomeModel::biz_cats("12");
          // $data['gov_article_cats']  = HomeModel::gov_article_cats("8");
          // $data['product_cats']      = HomeModel::product_cats("8");
          
          // $data['promos'] = HomeModel::promos("1");
          // $data['random_class']  = HomeModel::random_class("2");     
          // $data['random_class2']  = HomeModel::random_class("2");   

          $data['ByCat']   = HomeModel::cdn_news_cat("gauteng_gov_news",$cat,"12");
             
          $data['News']        = HomeModel::cdn_news2("gauteng_gov_news","News","1");
          $data['Latest']      = HomeModel::cdn_news2("gauteng_gov_news","News","4");
          $data['Education']   = HomeModel::cdn_news_cat("gauteng_gov_news","Education","6");
          $data['Business']    = HomeModel::cdn_news_cat("gauteng_gov_news","Business","6");
          $data['Health']      = HomeModel::cdn_news_cat("gauteng_gov_news","Health","4");
          $data['Sport']       = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","1");
          $data['Sport2']      = HomeModel::cdn_news_cat("gauteng_gov_news","Sport and Recreation","2");
          
          $data['Security']    = HomeModel::cdn_news_cat("gauteng_gov_news","Safety and Security","3");
          $data['Agriculture'] = HomeModel::cdn_news_cat("gauteng_gov_news","Agriculture, Land Reform and Rural Development","3");
          $data['Transport']   = HomeModel::cdn_news_cat("gauteng_gov_news","Transport","3");
      
          return view('by_cat', $data); 
    }

    public function by_prov($cat)
    {          
          $data['page']      = $cat;   

          $data['ByCat'] = HomeModel::cdn_news_prov("gauteng_gov_news", $cat, "12");

          if (empty($data['ByCat']) || count($data['ByCat']) === 0) {
             $data['ByCat'] = [];
          }

          return view('by_cat', $data); 
    }

    public function by_id($cat)
    {          
          $data['page']      = $cat;   

          $data['ByCat'] = HomeModel::cdn_news_id("gauteng_gov_news", $cat, "12");
          $data['Transport']   = HomeModel::cdn_news_cat("gauteng_gov_news","Transport","3");
     
          return view('by_id', $data); 
    }

    public function by_status($cat)
    {          
          $data['page']      = $cat;   

          $data['ByCat'] = HomeModel::cdn_news_status("gauteng_gov_news", $cat, "12");
          $data['Transport']   = HomeModel::cdn_news_cat("gauteng_gov_news","Transport","1");

          if (empty($data['ByCat']) || count($data['ByCat']) === 0) {
             $data['ByCat'] = [];
          }

          return view('by_cat', $data); 
    }

    public function find_news($cat)
    {          
          $data['page']       = "Results in ".$cat;   

          $data['ByCat']      = HomeModel::cdn_news_find("gauteng_gov_news", $cat, "21");

          if (empty($data['ByCat']) || count($data['ByCat']) === 0) {
             $data['ByCat']   = [];
          }
// https://www.govnews.co.za/by_id/277
          return view('by_cat', $data); 
    }

    public function shop($cat)
    {          
          $data['page']      = 'Home Page';
          $data['companies'] = HomeModel::companies("12");          
          $data['videos']    = HomeModel::videos("8");
          $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","4");
          $data['biz_cats']  = HomeModel::biz_cats("12");
          $data['gov_article_cats']  = HomeModel::gov_article_cats("8");
          // $data['product_cats']      = HomeModel::product_cats("8");
          
          $data['promos']         = HomeModel::promos("1");
          $data['random_class']   = HomeModel::random_class("2");     
          $data['random_class2']  = HomeModel::random_class("2");   

          $data['product_cats']   = HomeModel::product_cats("15");
          $data['products']       = HomeModel::products($cat,"15");

      
          return view('shop', $data);
    }

    public function index($cat)
    {          
          $data['page']      = 'Home Page';
          $data['companies'] = HomeModel::companies("5");
          $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News");
          $data['random_class']  = HomeModel::random_class("2");           // top classifieds  , limit

          
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");

          return view('home', $data);
    }

    public function search($cat="gauteng")
    {          
        //   $data['companies'] = HomeModel::companies("5");

        //$cat is the maincategory id
        //$tag is the category name
        // echo $cat;

       
  
          // $data['cat']           = $cat;
          // $data['main_cat']      = HomeModel::main_cat($cat)[0]->name;         // get category name by id 
          // $tag                   = $data['main_cat'];
          // $tagz                  = explode(" ",$tag);
          // $tag                   = $tagz[0];
          // $tag2                  = $tagz[1] ?? "gauteng";
          // $tag3                  = $tagz[2] ?? "gauteng";

         // echo $tag;

         $data['page']      =  $cat;
         $data['main_cat']   =  $cat;
         $tag=$cat;

          // $data['sub_cat']       = HomeModel::sub_cats($cat);                // get collection of sub categories

          $data['companies']     = HomeModel::by_tag($tag,"25");            // featured companies , limit
          $data['top_companies'] = HomeModel::by_tag($tag,"8");
          
          $data['by_class']      = HomeModel::by_class($tag,"8");           // top companies  , limit
          $data['classes']       = HomeModel::by_class($tag,"2");           // top classifieds  , limit

          $data['categories_government']  = HomeModel::categories_government("12");  
          $data['logos']         = HomeModel::companies("4");               // featured logos  , limit
          $data['videos']        = HomeModel::videos("4");                  // top videos , limit

          // print_r($data['classes']);

          // echo count($data['classes']);
        

          // if(isset($data['by_class'])){ echo "Yes"; } else { echo "No"; }
          // echo $data['by_class']->length;
          // echo isset($data['by_class']) ? count($data['by_class']) : 0;
         
   

          //print_r($data['main_cat']);
          //echo $data['main_cat'][0]->name;


          $data['biz_cats']  = HomeModel::biz_cats("9");
          $data['News'] = HomeModel::cdn_news2("gauteng_gov_news","News",4);
          $data['random_class']  = HomeModel::random_class("2");           // top classifieds  , limit

          
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");
      

          return view('home', $data);
    }


    
    public function company_by_cat($cat)
    {          
        //   $data['companies'] = HomeModel::companies("5");

        //$cat is the maincategory id
        //$tag is the category name
        // echo $cat;
  
          $data['cat']           = $cat;
          $data['main_cat']      = HomeModel::gov_cat($cat)[0]->name;         // get category name by id 
          $tag                   = $data['main_cat'];
          $tagz                  = explode(" ",$tag);
          $tag                   = $tagz[0];
          $tag2                  = $tagz[1] ?? "gauteng";
          $tag3                  = $tagz[2] ?? "gauteng";

         // echo $tag;

         $data['page']      =   $data['main_cat'];

         $data['biz_cats']  = HomeModel::biz_cats("9");

          $data['top_companies'] = HomeModel::company_by_category($cat,"8");          
          $data['companies']     = HomeModel::company_by_category($cat,"25");      // featured companies , limit
          $data['by_class']      = HomeModel::by_class2($cat,"1");                 // top companies  , limit
          $data['classes']       = HomeModel::by_class2($cat,"2");                 // top classifieds  , limit  
          $data['logos']         = HomeModel::company_by_category($cat,"4");       // featured logos  , limit 
          // $data['logos']         = HomeModel::by_class2($cat,"4");              // featured logos  , limit
          // $data['logos']         = HomeModel::companies("4");                   // featured logos  , limit 
          $data['categories_government']  = HomeModel::categories_government("12");         
          $data['videos']        = HomeModel::videos("4");                         // top videos , limit
          $data['News']          = HomeModel::cdn_news2("gauteng_gov_news","News",4);
          $data['sub_cat']       = HomeModel::sub_cats($cat);                      // get collection of sub categories  

          // print_r($data['classes']);

          // echo count($data['classes']);
        

          // if(isset($data['by_class'])){ echo "Yes"; } else { echo "No"; }
          // echo $data['by_class']->length;
          // echo isset($data['by_class']) ? count($data['by_class']) : 0;
         
   

          //print_r($data['main_cat']);
          //echo $data['main_cat'][0]->name;

          $data['random_class']  = HomeModel::random_class("2");           // top classifieds  , limit
          
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");


          return view('home', $data);
    }


    
    
    public function company_bybiz_category($cat)
    {          
  
  
          $data['cat']           = $cat;
          $data['main_cat']      = HomeModel::biz_cat($cat)[0]->name;         // get category name by id 
          $tag                   = $data['main_cat'];
          $tagz                  = explode(" ",$tag);
          $tag                   = $tagz[0];
          $tag2                  = $tagz[1] ?? "gauteng";
          $tag3                  = $tagz[2] ?? "gauteng";
          $data['page']          = $data['main_cat'];

          $data['top_companies'] = HomeModel::company_bybiz_category2($cat,"8");          
          $data['companies']     = HomeModel::company_bybiz_category2($cat,"25");      // featured companies , limit
          $data['logos']         = HomeModel::company_bybiz_category2($cat,"4");       // featured logos  , limit 

          $data['categories_government'] = HomeModel::categories_government("12");         
          $data['videos']                = HomeModel::videos("4");                         // top videos , limit
          $data['News']                  = HomeModel::cdn_news2("gauteng_gov_news","News",4);
          $data['biz_cats']              = HomeModel::biz_cats("9");
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");

      

          return view('home', $data);
    }


    public function contact_($from,$name,$msg,$to,$cid){

      $msg = urldecode($msg);
      $sql = DB::select("INSERT INTO `enquiries` (`id`, `name`, `email`, `message`, `date`, `cid`, `status`) VALUES (NULL, '".$name."', '".$from."', '".$msg."', '".date('d-m-Y')."', '".$cid."', '0');");
  

      $this->email_table($name,$from,$msg,$to);

      echo '<script>window.location="/company/'.$cid.'";</script>';


    }

    public function advance($what)
    {          
    
          $data['cat']           = $what;
          $data['main_cat']      = $what;        // get category name by id 
          $data['page']          = $data['main_cat'];

          $data['top_companies'] = HomeModel::advance($what,"8");          
          $data['companies']     = HomeModel::advance($what,"250");      // featured companies , limit

          $data['categories_government'] = HomeModel::categories_government("12");         
          $data['videos']                = HomeModel::videos("4");                         // top videos , limit
          $data['News']                  = HomeModel::cdn_news2("gauteng_gov_news","News",4);
          $data['biz_cats']              = HomeModel::biz_cats("9");
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");
     

          return view('home', $data);
    }



    public function search_sub($cat,$sub)
    {          
       
          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;  // get cat name by id
          $data['sub_cat']   = HomeModel::sub_cats($cat);           // list of sub cats

          // echo $cat."=".$sub."<br/>";
          $data['main_cat']  = $sub;

          $data['cat']       = $cat;
          $data['sub']       = $sub;
          $cat               = explode(" ",$sub)[0];               // first word of category

          // echo $cat;

          $data['page']      =   $data['main_cat'];
          $data['biz_cats']  = HomeModel::biz_cats("9");

         $data['companies'] = HomeModel::by_tag($cat,"25");      // search by category or tag
         $data['top_companies'] = HomeModel::by_tag($cat,"8");   // search by category or tag
         $data['by_class'] = HomeModel::by_class($cat,"8");      // search classifieds by category or tag
         $data['classes'] = HomeModel::by_class($cat,"2");       // search classifieds by category or tag

         
         
          // $data['companies']      = $this->by_tag_results($sub, "25");
          // $data['top_companies']  = $this->by_tag_results($sub, "8");
          // $data['by_class']       = $this->by_class_results($sub, "8");
          // $data['classes']        = HomeModel::by_tag($sub, "2");

          // $data['by_class']       = $this->by_class_results($sub, "8");
          // $data['classes']        = $this->by_class_results($sub, "2");
         
          $data['categories_government']  = HomeModel::categories_government("12");  
          $data['logos']          = HomeModel::companies("4");             // Related Searches
          $data['videos']         = HomeModel::videos("4");
          
          $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","4");

          $data['random_class']  = HomeModel::random_class("2");           // top classifieds  , limit

          
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");

          return view('home', $data);
    }


      public function by_tag_results($category, $limit) {

        if($limit>10) { $threshold=10; } else { $threshold=$limit; }
           
            // Split the category phrase into individual words
            $words = explode(" ", $category);

            // Iterate through each word and search
            foreach ($words as $word) {
                // Search using the current word

                if($word!=="and" && $word!=="And") {
                $results = HomeModel::by_tag($word, $limit);

                // Check if results meet the threshold
                if (count($results) >= $threshold) {
                    return $results; // Return the results if threshold met
                   // echo $word.",";
                }

              }
            }

            // Default behavior if no word meets the threshold
            return []; // Or a fallback like ['message' => 'No results found.'];
        }

        public function by_class_results($category, $limit) {

          if($limit>10) { $threshold=10; } else { $threshold=$limit; }
          // Split the category phrase into individual words
          $words = explode(" ", $category);

          // Iterate through each word and search
          foreach ($words as $word) {
              // Search using the current word
              if($word!=="and" && $word!=="And") {

              $results = HomeModel::by_class($word, $limit);

              // Check if results meet the threshold
              if (count($results) >= $threshold) {
                  return $results; // Return the results if threshold met
              }

            }

          }

          // Default behavior if no word meets the threshold
          return []; // Or a fallback like ['message' => 'No results found.'];
      }



    public function company($id){
        // echo $id;

                $data['company']       = HomeModel::company($id);
                $data['company_video'] = HomeModel::company_video($id);
                $data['adverts']       = HomeModel::adverts($id);
                // $data['by_class_one'] = HomeModel::by_class_one($id)[0];
                
                if(isset(HomeModel::by_class_one($id)[0])){
                  $data['by_class_one'] = HomeModel::by_class_one($id)[0];
                } else {
                  $data['by_class_one'] = HomeModel::random_class("1")[0]; 
                }

                $cat=1;
                $data["page"]=$data['company'][0]->name;
                $data['companies'] = HomeModel::by_tag($cat,"25");
                $data['sub_cat']   = HomeModel::sub_cats($cat);
      
                $data['top_companies'] = HomeModel::by_tag($cat,"8");
                $data['cat']          =$cat;
                $data['by_class'] = HomeModel::by_class($cat,"8");
      
                $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;
      
                $data['logos'] = HomeModel::companies("4");
      
                $data['classes'] = HomeModel::by_class($cat,"2");
                
                $data['videos'] = HomeModel::videos("4");

                $data['banner'] = HomeModel::artwork($id,"viewpage_banners");
      

                $data['categories_government']  = HomeModel::categories_government("12");  

                $data['biz_cats']  = HomeModel::biz_cats("9");

                $data['gov_article_cats']      = HomeModel::gov_article_cats();
                $data['gov_articles']          = HomeModel::gov_articles("3");

                $data['News']          = HomeModel::cdn_news2("gauteng_gov_news","News",4);


      
                return view('company', $data);
    }

    public function buy(){
      // echo $id;

           
              $cat=1;
              $data["page"]="Buy";
              $data['companies'] = HomeModel::by_tag($cat,"25");
              $data['sub_cat']   = HomeModel::sub_cats($cat);
    
              $data['top_companies'] = HomeModel::by_tag($cat,"8");
              $data['cat']          =$cat;
              $data['by_class'] = HomeModel::by_class($cat,"8");
    
              $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;
    
              $data['logos'] = HomeModel::companies("4");
    
              $data['classes'] = HomeModel::by_class($cat,"2");
              
              $data['videos'] = HomeModel::videos("4");
    

    
              return view('company', $data);
  }



  public function add(){
    // echo $id;

         

    if(isset($_POST['contact_us'])){
            
      $fullName      =$_POST['fullName'];
      $email         =$_POST['email'];
      $contactNumber=$_POST['contactNumber'];
      $message       =$_POST['message'];

      // $message= $fullName."-".$email."-".$contactNumber."-".$message;
      $message = [              
        'color'        =>"#0054a6",
        'site'         =>"Gauteng Government Online™ ",
        'page'         =>'contact',
        'fullName'     =>$fullName,
        'email'        =>$email,
        'contactNumber'=>$contactNumber,
        'message'      =>$message
     ];
    

      $msg= HomeModel:: sendMail("Contact from Gauteng Government Online™ ",$message,$email,$email);
      $data["msg"]=$msg;
    }


    if(isset($_POST['add'])){
      
      $fullName           =$_POST['fullName'];
      $email              =$_POST['email'];
      $contactNumber      =$_POST['contactNumber'];
      $businessName       =$_POST['businessName'];
      $streetAddress      =$_POST['streetAddress'];
      $telephone          =$_POST['telephone'];
      $mobileNumber       =$_POST['mobileNumber'];
      $website            =$_POST['website'];

      // echo $fullName."-".$email."-".$contactNumber."-".$businessName."-".$streetAddress."-". $telephone."-".$mobileNumber."-".$website;

      // $message= $fullName."-".$email."-".$contactNumber."-".$businessName."-".$streetAddress."-". $telephone."-".$mobileNumber."-".$website;

      $message = [              
        'color'         =>"#0054a6",
        'site'          =>"Gauteng Government Online™ ",
        'page'          => 'add',
        'fullName'      => $fullName,
        'email'         =>$email,
        'contactNumber' =>$contactNumber,
        'businessName'      =>$businessName,
        'streetAddress'     =>$streetAddress,
        'telephone'         =>$telephone,
        'mobileNumber'      =>$mobileNumber,
        'website'           =>$website
     ];
    

      $msg= HomeModel:: sendMail("New Company from Gauteng Government Online™ ",$message,$email,$email);
      $data["msg"]=$msg;
    }


 
    $cat=1;
    $data["page"]="Contact";
    $data["page_name"]="Contact";
    $data['companies'] = HomeModel::by_tag($cat,"25");
    $data['sub_cat']   = HomeModel::sub_cats($cat);

    $data['top_companies'] = HomeModel::by_tag($cat,"8");
    $data['cat']          =$cat;
    $data['by_class'] = HomeModel::by_class($cat,"8");

    $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

    $data['logos'] = HomeModel::companies("4");

    $data['classes'] = HomeModel::by_class($cat,"2");
    
    $data['videos'] = HomeModel::videos("4");

    $data['categories_government']  = HomeModel::categories_government("12");

    $data['biz_cats']  = HomeModel::biz_cats("9");

    $data['by_class_one'] = HomeModel::by_class($cat,"1")[0];

    $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","3");

    $data['random_class']  = HomeModel::random_class("5");     
   

    $data['gov_article_cats']      = HomeModel::gov_article_cats();
    $data['gov_articles']          = HomeModel::gov_articles("5");


    return view('add_listing', $data);

}



public function News(){
  // echo $id;

       
          $cat=1;
          $data["page"]="News";
          $data['companies'] = HomeModel::by_tag($cat,"25");
          $data['sub_cat']   = HomeModel::sub_cats($cat);

          $data['top_companies'] = HomeModel::by_tag($cat,"8");
          $data['cat']          =$cat;
          $data['by_class'] = HomeModel::by_class($cat,"8");

          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          $data['logos'] = HomeModel::companies("4");

          $data['classes'] = HomeModel::by_class($cat,"2");
          
          $data['videos'] = HomeModel::videos("4");

          $data['categories_government']  = HomeModel::categories_government("12");  

          $data['biz_cats']  = HomeModel::biz_cats("9");
          $data['News'] = HomeModel::cdn_news2("gauteng_gov_news","News",9);

          $data['gov_article_cats']      = HomeModel::gov_article_cats();          
          $data['gov_articles']          = HomeModel::gov_articles("5");

          return view('pages', $data);
}


public function Pages($page){
  // echo $id;

       
          $cat=1;
          $data["page"]=$page;
          $data['companies'] = HomeModel::by_tag($cat,"25");
          $data['sub_cat']   = HomeModel::sub_cats($cat);

          $data['top_companies'] = HomeModel::by_tag($cat,"8");
          $data['cat']          =$cat;
          $data['by_class'] = HomeModel::by_class($cat,"8");

          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          $data['logos'] = HomeModel::companies("4");

          $data['classes'] = HomeModel::by_class($cat,"2");
          
          $data['videos'] = HomeModel::videos("4");

          $data['videos2'] = HomeModel::videos("8");

          $data['News'] = HomeModel::cdn_news2("gauteng_gov_news",$page,9);

          $data['categories_government']  = HomeModel::categories_government("12");  
          $data['biz_cats']  = HomeModel::biz_cats("9");

          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");

          return view('pages', $data);
}


public function Info($page){
  // echo $id;

       
          $cat=1;
          $data["page"]=$page;
          $data['articles'] = HomeModel::get_gov_articles($page);
        


          $data['News'] = HomeModel::cdn_news2("gauteng_gov_news",$page,9);
          $data['categories_government']  = HomeModel::categories_government("12");  
          $data['biz_cats']  = HomeModel::biz_cats("9");
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");

          return view('Info', $data);
}


public function Articles($page){
  // echo $id;

       
          $cat=1;
          $data["page"]=$page;
          $data['companies'] = HomeModel::by_tag($cat,"25");
          $data['sub_cat']   = HomeModel::sub_cats($cat);

          $data['top_companies'] = HomeModel::by_tag($cat,"8");
          $data['cat']          =$cat;
          $data['by_class'] = HomeModel::by_class($cat,"8");

          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          $data['logos'] = HomeModel::companies("4");

          $data['classes'] = HomeModel::by_class($cat,"2");
          
          $data['videos'] = HomeModel::videos("4");

          if($page=="Videos"){
            $data['videos2'] = HomeModel::videos("8");
          }
         

          $data['News'] = HomeModel::Articles("gauteng_gov_news",$page,12);


          $data['categories_government']  = HomeModel::categories_government("12");  

          return view('articles', $data);
}




public function contact(){
  // echo $id;



          if(isset($_POST['contact_us'])){
            
            $fullName      =$_POST['fullName'];
            $email         =$_POST['email'];
            $contactNumber=$_POST['contactNumber'];
            $message       =$_POST['message'];

            // $message= $fullName."-".$email."-".$contactNumber."-".$message;
            $message = [              
              'color'        =>"#0054a6",
              'site'         =>"Gauteng Government Online™ ",
              'page'         =>'contact',
              'fullName'     =>$fullName,
              'email'        =>$email,
              'contactNumber'=>$contactNumber,
              'message'      =>$message
           ];
          

            $msg= HomeModel:: sendMail("Contact from Gauteng Government Online™ ",$message,$email,$email);
            $data["msg"]=$msg;
          }


          if(isset($_POST['add'])){
            
            $fullName           =$_POST['fullName'];
            $email              =$_POST['email'];
            $contactNumber      =$_POST['contactNumber'];
            $businessName       =$_POST['businessName'];
            $streetAddress      =$_POST['streetAddress'];
            $telephone          =$_POST['telephone'];
            $mobileNumber       =$_POST['mobileNumber'];
            $website            =$_POST['website'];

            // echo $fullName."-".$email."-".$contactNumber."-".$businessName."-".$streetAddress."-". $telephone."-".$mobileNumber."-".$website;

            // $message= $fullName."-".$email."-".$contactNumber."-".$businessName."-".$streetAddress."-". $telephone."-".$mobileNumber."-".$website;

            $message = [              
              'color'         =>"#0054a6",
              'site'          =>"Gauteng Government Online™ ",
              'page'          => 'add',
              'fullName'      => $fullName,
              'email'         =>$email,
              'contactNumber' =>$contactNumber,
              'businessName'      =>$businessName,
              'streetAddress'     =>$streetAddress,
              'telephone'         =>$telephone,
              'mobileNumber'      =>$mobileNumber,
              'website'           =>$website
           ];
          

            $msg= HomeModel:: sendMail("New Company from Gauteng Government Online™ ",$message,$email,$email);
            $data["msg"]=$msg;
          }


       
          $cat=1;
          $data["page"]="Contact";
          $data["page_name"]="Contact";
          $data['companies'] = HomeModel::by_tag($cat,"25");
          $data['sub_cat']   = HomeModel::sub_cats($cat);

          $data['top_companies'] = HomeModel::by_tag($cat,"8");
          $data['cat']          =$cat;
          $data['by_class'] = HomeModel::by_class($cat,"8");

          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          $data['logos'] = HomeModel::companies("4");

          $data['classes'] = HomeModel::by_class($cat,"2");
          
          $data['videos'] = HomeModel::videos("4");

          
          $data['by_class_one'] = HomeModel::by_class($cat,"1")[0];

          $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","6");


          $data['categories_government']  = HomeModel::categories_government("12");
          $data['biz_cats']  = HomeModel::biz_cats("9");

          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");

          $data['random_class']  = HomeModel::random_class("5");     
         

          return view('contact_us', $data);
}




public function Terms(){
  // echo $id;

       
        
       
  $cat=1;
  $data["page"]="Contact";
  $data["page_name"]="Contact";
  $data['companies'] = HomeModel::by_tag($cat,"25");
  $data['sub_cat']   = HomeModel::sub_cats($cat);

  $data['top_companies'] = HomeModel::by_tag($cat,"8");
  $data['cat']          =$cat;
  $data['by_class'] = HomeModel::by_class($cat,"8");

  $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

  $data['logos'] = HomeModel::companies("4");

  $data['classes'] = HomeModel::by_class($cat,"2");
  
  $data['videos'] = HomeModel::videos("4");

  $data['categories_government']  = HomeModel::categories_government("12");

  $data['biz_cats']  = HomeModel::biz_cats("9");

  $data['by_class_one'] = HomeModel::by_class($cat,"1")[0];

  $data['News']      = HomeModel::cdn_news2("gauteng_gov_news","News","6");

  $data['random_class']  = HomeModel::random_class("5");     
 



          return view('terms', $data);
}



public function Gazette(){
  // echo $id;


       
          $cat=1;
          $data["page"]="Gazette";
          $data['companies'] = HomeModel::by_tag($cat,"25");
          $data['sub_cat']   = HomeModel::sub_cats($cat);

          $data['top_companies'] = HomeModel::by_tag($cat,"8");
          $data['cat']          =$cat;
          $data['by_class'] = HomeModel::by_class($cat,"8");

          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          $data['logos'] = HomeModel::companies("4");

          $data['classes'] = HomeModel::by_class($cat,"2");
          
          $data['videos'] = HomeModel::videos("4");

          $data['categories_government']  = HomeModel::categories_government("12");  

          $data['biz_cats']  = HomeModel::biz_cats("9");

          $data['by_class_one'] = HomeModel::by_class($cat,"1")[0];


          
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");



          return view('company', $data);
}


public function Tenders(){
  // echo $id;

       
          $cat=1;
          $data["page"]="Tenders";
          $data['companies'] = HomeModel::by_tag($cat,"25");
          $data['sub_cat']   = HomeModel::sub_cats($cat);

          $data['top_companies'] = HomeModel::by_tag($cat,"8");
          $data['cat']          =$cat;
          $data['by_class'] = HomeModel::by_class($cat,"8");

          $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          $data['logos'] = HomeModel::companies("4");

          $data['classes'] = HomeModel::by_class($cat,"2");
          
          $data['videos'] = HomeModel::videos("4");

          $data['categories_government']  = HomeModel::categories_government("12");  

          $data['biz_cats']  = HomeModel::biz_cats("9");

          $data['by_class_one'] = HomeModel::by_class($cat,"1")[0];


          
          
          $data['gov_article_cats']      = HomeModel::gov_article_cats();
          $data['gov_articles']          = HomeModel::gov_articles("5");


          return view('company', $data);
}



    

    public function json(){
         $data = HomeModel::companies("5");
         echo json_encode($data);
    }


    
public function get_cat($cat)
{
    $sql = DB::select("SELECT * FROM `categories_auxiliary_popular` WHERE name LIKE ? AND name NOT LIKE ? LIMIT 5", ['%' . $cat . '%', 'Airconditioning/ HVAC']);
    echo json_encode($sql);
}


public function get_loc($cat){

    $sql=DB::select("SELECT * FROM `cities` where province_id in (3238,3239,3240,3243,3244,3245,3246,3247,3251) and name like '%".$cat."%' limit 15;");
    echo  json_encode($sql);

}


public function get_comp($cat){

  $sql=DB::select("SELECT DISTINCT
  SUBSTRING_INDEX(name, ',', 1) AS name
FROM
  tags
WHERE
  name LIKE '%".$cat."%'
   order by name
LIMIT 5;
");
  echo  json_encode($sql);

}



public function call_words($cat){

  $sql=DB::select("SELECT * FROM `words_1` where name !='".$cat."' ;");
  // echo  json_encode($sql);
  $words = [];
  foreach ($sql as $result) {
      $words[] = $result->name; // Assuming your table has a 'name' column
  }

  echo  json_encode($words);

}




// public function transfer_news(){

//  $sql   = DB::select("SELECT * FROM `medical_news` ");
//  $added = 0;
 
// echo '<style> .table1 td { border:solid 1px silver; } </style>'; 
// echo '<table class="table1">';
//   foreach ($sql as $result) {


// // if($result->id > 542){
// echo '<tr><td>'.$result->id.'</td><td>'.$result->title.'</td><td>'.$result->time.'</td></tr>';

// // $new_data['title']    =$result->title;
// // $new_data['excerpt']  =$result->excerpt;
// // $new_data['image']    =$result->image;
// // $new_data['time']     =$result->time;
// // $new_data['cat']      ='';
// // $new_data['subcat']   ='';
// // $new_data['province'] ='';
// // $new_data['status']   ='';
// // $new_data['date']     =$result->time;
// // $new_data['user']     ='';

// // //print_r($new_data);

// //  $id = DB::table('gauteng_gov_news')->insertGetId($new_data);

// //  $added++;
 
// // }



//   }

// echo "ADDED:".$added."<br/>";  
// echo '</table>';  




// }



// public function transfer_news(){

//     // Fetch data from the NEW external host-h database
//     $sql = DB::connection('external_host_h')->select("SELECT * FROM `medical_news` ");
//     $added = 0;
     
//     echo '<style> .table1 td { border:solid 1px silver; } </style>'; 
//     echo '<table class="table1">';

//     foreach ($sql as $result) {
//         // Un-commented the logic block so the transfer actually happens
//         if($result->id > 696){
//             echo '<tr><td>'.$result->id.'</td><td>'.$result->title.'</td><td>'.$result->time.'</td></tr>';

//             $new_data['title']    = $result->title;
//             $new_data['excerpt']  = $result->excerpt;
//             $new_data['image']    = $result->image;
//             $new_data['time']     = $result->time;
//             $new_data['cat']      = '';
//             $new_data['subcat']   = '';
//             $new_data['province'] = '';
//             $new_data['status']   = '';
//             $new_data['date']     = $result->time;
//             $new_data['user']     = '';

//             // Inserts into your DEFAULT local database configuration
//             // $id = DB::table('gauteng_gov_news')->insertGetId($new_data);

//             $added++;
//         }
//     }

//     echo "ADDED:".$added."<br/>";  
//     echo '</table>';   
// }



public function transfer_news(){

    // Fetch data from the NEW external host-h database
    $sql = DB::connection('external_host_h')->select("SELECT * FROM `south_african_government_news` ");
    $added = 0;
     
    echo '<style> .table1 td { border:solid 1px silver; } </style>'; 
    echo '<table class="table1">';

    foreach ($sql as $result) {
        // Un-commented the logic block so the transfer actually happens
        if($result->id > 855){
            echo '<tr><td>'.$result->id.'</td><td>'.$result->title.'</td><td>'.$result->time.'</td></tr>';

            $new_data['title']    = $result->title;
            $new_data['excerpt']  = $result->excerpt;
            $new_data['image']    = $result->image;
            $new_data['time']     = $result->time;
            $new_data['cat']      = '';
            $new_data['subcat']   = '';
            $new_data['province'] = '';
            $new_data['status']   = '';
            $new_data['date']     = $result->time;
            $new_data['user']     = '';

            // Inserts into your DEFAULT local database configuration
            // $id = DB::table('gauteng_gov_news')->insertGetId($new_data);

            $added++;
        }
    }

    echo "ADDED:".$added."<br/>";  
    echo '</table>';   
}



public static function search_what($what){

      // $data["comp"] = HomeModel::search_name($what);
      $data['cat']           = $what;
      $data['main_cat']      = $what;        // get category name by id 
      $data['page']          = $data['main_cat'];

      $data['top_companies'] = HomeModel::search_name($what,"8");          
      $data['companies']     = HomeModel::search_name($what,"250");      // featured companies , limit

      $data['categories_government'] = HomeModel::categories_government("12");         
      $data['videos']                = HomeModel::videos("4");                         // top videos , limit
      $data['News']                  = HomeModel::cdn_news2("gauteng_gov_news","News",4);
      $data['biz_cats']              = HomeModel::biz_cats("9");
      $data['gov_article_cats']      = HomeModel::gov_article_cats();
      $data['gov_articles']          = HomeModel::gov_articles("5");

  
      return view("home", $data);    
  
}


public static function search_where($where){
  $db1 = new HomeController;
  $what="";
  $contr=new HomeController;
  

  $words2=$contr->get_loc2();
  $correct_where = $contr-> spellCheck($where, $words2);

      $data["comp"] = $db1->search_query($what, $where);
      $data["where"] = $where;
      $data["what"] = $what;
      $data['search_query'] = $what;
      $data['search_query2'] = $where;
      $data['correct_where'] = $correct_where;


      return view("search", $data);    
  
}


public static function call_words2() {
  $sql = DB::select("SELECT * FROM words_1");
  $words = [];
  foreach ($sql as $result) {
      $words[] = $result->name; 
  }

  return $words;
}


public function get_loc2(){

  $sql=DB::select("SELECT * FROM `cities` where province_id in (3238,3239,3240,3243,3244,3245,3246,3247,3251) ");
  $words2 = [];
  foreach ($sql as $result) {
      $words2[] = $result->name; 
  }
  return $words2;
}



public static function search_query($what, $where)
{
    $db1 = new DB1Controller;
    $conn = $db1->connect();

    $sql = "SELECT companies.*, website_company.*, classified_banners.url 
            FROM `companies`
            LEFT JOIN website_company ON website_company.company_id = companies.id 
            LEFT JOIN classified_banners ON classified_banners.company_id = companies.id
            WHERE website_company.website_id = 13 
              AND companies.tags LIKE ?
              AND companies.address LIKE ?
            ORDER BY 
                (companies.logos IS NULL OR companies.logos = '') ASC, 
                companies.logos ASC";

    $stmt = $conn->prepare($sql);

    $whatParam = "%" . $what . "%";
    $whereParam = "%" . $where . "%";

    // Bind two parameters since there are two placeholders
    $stmt->bind_param("ss", $whatParam, $whereParam);

    $stmt->execute();

    $result = $stmt->get_result();

    $stmt->close();
    $conn->close();

    return $result;
}




private function spellCheck($input, $dictionary) {
  $words = explode(' ', $input);
  $correctedWords = [];

  foreach ($words as $word) {
      if (!in_array($word, $dictionary)) {

          $closest = null;
          $shortest = -1;
          foreach ($dictionary as $dictWord) {
              $lev = levenshtein($word, $dictWord);
              if ($lev == 0) {
                  $closest = $dictWord;
                  $shortest = 0;
                  break;
              }
              if ($lev <= $shortest || $shortest < 0) {
                  $closest = $dictWord;
                  $shortest = $lev;
              }
          }
          $correctedWords[] = $closest;
      } else {
          $correctedWords[] = $word;
      }
  }

  return implode(' ', $correctedWords);
}




public function cats(){
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');

    $sql=DB::select("SELECT * FROM `categories`");
    echo  json_encode($sql);

}

public function medical_cats(){
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');

    $sql=DB::select("SELECT * FROM `categories_medical` ");
    echo  json_encode($sql);

}


public function advanced_search($alphabet, $category,$province,$date, $limit)
{
    // Set CORS headers
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');

//    if(!$alphabet){ $alphabet=0; }
//    if(!$category){ $category=0; }
//    if(!$province){ $province=0; }
//    if(!$date){ $date=0; }

//    echo $alphabet."-".$category."-".$province."-".$date."-".$limit;

    $sql1=DB::select("SELECT * FROM `categories` where id=".$category);
    $cat= $sql1[0]->name;
    // echo $cat;
    $keywords = explode(" ", $cat);


    // echo $province;
    // $sql2=DB::select("SELECT * FROM `provinces` where id=".$province);
    // $prov= $sql2[0]->name;
    // echo $prov;

    // Initialize the conditions
    $conditions = [];

    if($cat){

        foreach ($keywords as $word) {

            if($word!="and"){
                $conditions2[] = " tags LIKE '%" . $word . "%'";
            }
           
        }
      
    }

  
    // Check if $alphabet is not blank
    if ($alphabet) {
        $conditions[] = " name LIKE '" . $alphabet . "%'";
    }

    // Check if $category is provided
    $cat_line="";
    if ($category) {
      
        // $conditions[] = " category_id = " . intval($category); 
        // $cat_line=' left join category_company_government on category_company_government.company_id=companies.id ';
        $conditions[] = " tags like '%$cat%' ";
    }

    // Check if $alphabet is not blank
    if ($province) {
        $conditions[] = " province_id = '" . $province . "%'";
        // $conditions[] = " address like '%" . $prov . "%'";
    }

    if ($date) {
        $conditions[] = " updated_at like '" . $date . "%' or created_at like '" . $date . "' ";
    }


    // Build the SQL query
    $whereClause = '';
    if (!empty($conditions)) {
        $whereClause = " WHERE " . implode(" AND ", $conditions);
    }

    if (!empty($conditions2)) {
        $whereClause .= " and " . implode(" OR ", $conditions2);
    }

    // Execute the SQL query
    // $sql = DB::select("SELECT * FROM `companies`  ".$cat_line."  $whereClause  LIMIT " . intval($limit)); // Use intval() for limit as well

    $sql = DB::select("SELECT * FROM  `companies`  $cat_line  $whereClause order by logos desc LIMIT ". intval($limit)); // Use intval() for limit as well

    // Return the result as JSON
    echo json_encode($sql);
}





public function dash($id,$year="2025"){
  // echo $id;

       
          $cat=1;
          $data["page"]="Terms";
          $data["cid"]=$id;
          $data["year_"]=$year;
          $data['my_company']=DB::table('companies')->where('id', $id)->get();
          // $data['companies'] = HomeModel::by_tag($cat,"25");
          // $data['sub_cat']   = HomeModel::sub_cats($cat);

          // $data['top_companies'] = HomeModel::by_tag($cat,"8");
          // $data['cat']          =$cat;
          // $data['by_class'] = HomeModel::by_class($cat,"8");

          // $data['main_cat']  = HomeModel::main_cat($cat)[0]->name;

          // $data['logos'] = HomeModel::companies("4");

          // $data['classes'] = HomeModel::by_class($cat,"2");
          
          // $data['videos'] = HomeModel::videos("4");



          return view('dash', $data);
}


public function register_logout(){

  Session::flush();

  return redirect()->action([HomeController::class, 'dash']);


}

public function checkout($clear,$name,$total){
    //echo $clear;
    $link='https://payfast.dotcom.africa/?invoice_num='.$name.'&invoice_amt='.$total;

    if($clear=="yes"){

      session()->forget('cart');

      echo '<script>';
      echo  'window.location="/shop/Smartphones%20&%20Phones";';
      echo '</script>';

    } else {
      echo '<script>';
      echo  'window.location="'.$link.'";';
      echo '</script>';
    }

}



public function add_cart(Request $request)
{
    $product = $request->only(['id', 'name', 'price']);

    $cart = session()->get('cart', []);

    // If product already exists, skip or update quantity
    if (isset($cart[$product['id']])) {
        $cart[$product['id']]['quantity'] += 1;
    } else {
        $cart[$product['id']] = [
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => 1
        ];
    }

    session()->put('cart', $cart);

    return response()->json(['status' => 'success', 'cart' => $cart]);
}

public function register_login(){


      if(isset($_POST["register_account"])){

        $set['company']  = "0";
        $set['name']     = $_POST["company"];
        $set['email']    = $_POST["email"];
        // $set['contact'] =$_POST["number"];
        // $set['username']=$_POST["username"];
        $set['sales_rep_email']    = $_POST["email"];
        $set['accounts_rep_email'] = $_POST["email"];   
        $set['other_mail']         = $_POST["email"];   
        $set['date']               = date("d-m-Y");
        $set['signed_at']          = date("d-m-Y");
        $set['signed_by']          = "";
        $set['capacity']           = "";
        $set['url']                = "";
        $set['price']              = "";
        $set['sent_date']          = "";
        $set['stats_type']         = "S";
        $set['sys_type']           = "V3";
        $set['stats_status']       = "Active";
        $set['entity']             = "www.adslive.com";   
        $set['status']             = "Client";
        $set['question']           = "";
        $set['answer']             = "";
        $set['password']           = $_POST["password"];
        $confirm                   = $_POST["confirm"];

        // echo $username."=reg=".$password;

        if($set['password']== $confirm){


          //LeadsBankUser  table 
          // $id=Session::get("user_id");
          $check=DB::table('stats_user')->where('email', $set['email'])->exists();
          if($check){
          
              $data["reg_msg"]="USER FOUND";

              $data['settings']=DB::table('stats_user')->where('email', $set['email'])->where('password',$set['password'])->get();
              // print_r($data['settings']);

              Session::put('user',$data['settings']);
              // print_r(Session::get('user'));

              $this->email_msg($set['email'],$set['email'],"Hello, Your registration was successful, please login to access your account.");

              echo '<script>';
              echo 'alert("Registered, Will login once account is approved by admin. Will be redirected to guest account.");';
              echo '</script>';

              return Redirect('dash/76691606/'.date("Y"));

          } else {

              $data["reg_msg"]="USER NOT FOUND,ADDING.";
              
              $id         = DB::table('stats_user')->insertGetId($set);
              $data['settings']=DB::table('stats_user')->where('id',$id)->get();

              
              Session::put('user',$data['settings']);
              // print_r(Session::get('user'));
              // print_r($data['settings']);

              return Redirect('dash/'.$data['settings'][0]->company);
  
        }
  


        }
        else {
          $data["reg_msg"]="PASSWORD DOESN'T MATCH";
        }

      }

      if(isset($_POST["login_account"])){

        $username=$_POST["username"];
        $password=$_POST["password"];
        // echo $username."=".$password;

        $check = DB::table('stats_user')
        ->where('email', $username)
        ->where('password', $password)
        ->exists();
    
        if($check){

          $data['settings']=DB::table('stats_user')->where('email', $username)->where('password',$password)->get();
          Session::put('user',$data['settings']);

          $data["log_msg"]="WELCOME";

          

          return Redirect('dash/'.$data['settings'][0]->company."/".date("Y"));

        } else {
          $data["log_msg"]="INCORRECT USERNAME/PASSWORD!!";
        }

        

      }


 
          $data["page"]="Terms";
          return view('register_login', $data);
}


public function email_msg($from,$to,$message){


  $msg='<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]>
<xml><w:WordDocument xmlns:w="urn:schemas-microsoft-com:office:word"><w:DontUseAdvancedTypographyReadingMail/></w:WordDocument>
<o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml>
<![endif]--><!--[if !mso]><!--><!--<![endif]-->
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

		@media (max-width:605px) {
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

			.row-8 .column-1 .block-1.paragraph_block td.pad>div {
				font-size: 9px !important;
			}

			.row-8 .column-1 {
				padding: 12px !important;
			}
		}
	</style><!--[if mso ]><style>sup, sub { font-size: 100% !important; } sup { mso-text-raise:10% } sub { mso-text-raise:-10% }</style> <![endif]-->
</head>

<body class="body" style="background-color: #dbdbdb; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dbdbdb;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 585px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/ugt/68c/z6w/HEADER.png" style="display: block; height: auto; border: 0; width: 100%;" width="585" alt title height="auto"></div>
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
					<table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="empty_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div></div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-2" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 195px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/3p1/66v/pl6/adslive.png" style="display: block; height: auto; border: 0; width: 100%;" width="195" alt title height="auto"></div>
																</div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-3" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="empty_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div></div>
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
					<table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 585px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/ugt/68c/z6w/HEADER.png" style="display: block; height: auto; border: 0; width: 100%;" width="585" alt title height="auto"></div>
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
					<table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="right">
																	<div style="max-width: 195px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/d9g/lft/91o/msg.png" style="display: block; height: auto; border: 0; width: 100%;" width="195" alt title height="auto"></div>
																</div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="paragraph_block block-1" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad">
																<div style="color:#101112;direction:ltr;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:1.2;text-align:left;mso-line-height-alt:19px;">
                                <h1 style="margin: 0; color: #000000; direction: ltr; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 1.2; text-align: left; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 23px;"><span class="tinyMce-placeholder" style="word-break: break-word;">ADSLIVE WEBSITE MESSAGE</span></h1>
														
																	<p style="margin: 0;margin-top:5px;">'.$message.'</p>
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
					<table class="row row-6" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<div class="spacer_block block-1" style="height:25px;line-height:25px;font-size:1px;">&#8202;</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-7" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 585px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/err/gs4/62f/thechosenxx.jpg" style="display: block; height: auto; border: 0; width: 100%;" width="585" alt title height="auto"></div>
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
					<table class="row row-8" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #ffffff; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; padding-top: 20px; vertical-align: top;">
													<table class="paragraph_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad">
																<div style="color:#333333;direction:ltr;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;font-size:10px;font-weight:400;letter-spacing:0px;line-height:1.2;text-align:justify;mso-line-height-alt:12px;">
																	<p style="margin: 0; margin-bottom: 16px;">You are receiving this email because of our telephonic discussion with your organization regarding the sending of information on email to you. If you would prefer not to receive emails from Mr Brand (Pty) Ltd and its product and services platforms, <a href="https://mrbrand.co.za/unsubscribe.php" target="_blank" style="text-decoration: underline; color: #0068a5;" rel="noopener">Unsubscribe</a> instantly or edit your profile. To contact us please email <a href="mailto:customercare@mrbrand.co.za" target="_blank" title="customercare@mrbrand.co.za" style="text-decoration: underline; color: #0068a5;" rel="noopener">customercare@mrbrand.co.za</a> or call us on 0860 ADVERT / +27 11 333 6000. Prices quoted are only applicable to our prospective clients for a certain time only, including those over the borders of South Africa.</p>
																	<p style="margin: 0;">2025 © Mr Brand (Pty) Ltd | <a href="https://mrbrand.co.za/advertising-terms/" target="_blank" style="text-decoration: underline; color: #0068a5;" rel="noopener">Terms & Conditions</a></p>
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

</html>';


echo $msg;


}


public function email_table($name,$email,$msg,$to){

  $msg='<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]>
<xml><w:WordDocument xmlns:w="urn:schemas-microsoft-com:office:word"><w:DontUseAdvancedTypographyReadingMail/></w:WordDocument>
<o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml>
<![endif]--><!--[if !mso]><!--><!--<![endif]-->
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

		@media (max-width:605px) {
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

			.row-8 .column-1 .block-1.paragraph_block td.pad>div {
				font-size: 9px !important;
			}

			.row-8 .column-1 {
				padding: 12px !important;
			}
		}
	</style><!--[if mso ]><style>sup, sub { font-size: 100% !important; } sup { mso-text-raise:10% } sub { mso-text-raise:-10% }</style> <![endif]-->
</head>

<body class="body" style="background-color: #dbdbdb; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dbdbdb;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 585px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/ugt/68c/z6w/HEADER.png" style="display: block; height: auto; border: 0; width: 100%;" width="585" alt title height="auto"></div>
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
					<table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="empty_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div></div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-2" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 195px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/3p1/66v/pl6/adslive.png" style="display: block; height: auto; border: 0; width: 100%;" width="195" alt title height="auto"></div>
																</div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-3" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="empty_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div></div>
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
					<table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 585px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/ugt/68c/z6w/HEADER.png" style="display: block; height: auto; border: 0; width: 100%;" width="585" alt title height="auto"></div>
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
					<table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="heading_block block-1" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<h1 style="margin: 0; color: #000000; direction: ltr; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 1.2; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 23px;"><span class="tinyMce-placeholder" style="word-break: break-word;">ADSLIVE WEBSITE MESSAGE</span></h1>
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
					<table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<table class="table_block block-1" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; width: 100%; table-layout: fixed; direction: ltr; background-color: transparent; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-weight: 400; color: #101112; text-align: left; letter-spacing: 0px;" width="100%">
																	<thead style="vertical-align: top; background-color: #f2f2f2; color: #101112; font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px;">
																
																	</thead>
																	<tbody style="vertical-align: top; font-size: 16px; line-height: 1.2; mso-line-height-alt: 19px;">
																		<tr>
																			<td width="33.333333333333336%" style="padding: 10px; word-break: break-word; border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; border-bottom: 1px solid #dddddd; border-left: 1px solid #dddddd;font-weight: 700;">Name</td>
																			<td width="63.333333333333336%" style="padding: 10px; word-break: break-word; border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; border-bottom: 1px solid #dddddd; border-left: 1px solid #dddddd;">&#8203; '.$name.'</td>
																		</tr>
																		<tr>
																			<td width="33.333333333333336%" style="padding: 10px; word-break: break-word; border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; border-bottom: 1px solid #dddddd; border-left: 1px solid #dddddd;font-weight: 700;">Email</td>
																			<td width="63.333333333333336%" style="padding: 10px; word-break: break-word; border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; border-bottom: 1px solid #dddddd; border-left: 1px solid #dddddd;">&#8203; '.$email.'</td>
																		</tr>
																		<tr>
																			<td width="33.333333333333336%" style="padding: 10px; word-break: break-word; border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; border-bottom: 1px solid #dddddd; border-left: 1px solid #dddddd;font-weight: 700;">Message</td>
																			<td width="63.333333333333336%" style="padding: 10px; word-break: break-word; border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; border-bottom: 1px solid #dddddd; border-left: 1px solid #dddddd;">&#8203; '.$msg.'</td>
																		</tr>
																	</tbody>
																</table>
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
					<table class="row row-6" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top;">
													<div class="spacer_block block-1" style="height:25px;line-height:25px;font-size:1px;">&#8202;</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-7" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center">
																	<div style="max-width: 585px;"><img src="https://d15k2d11r6t6rl.cloudfront.net/pub/bfra/gmivbdbo/err/gs4/62f/thechosenxx.jpg" style="display: block; height: auto; border: 0; width: 100%;" width="585" alt title height="auto"></div>
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
					<table class="row row-8" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffafa; border-radius: 0; color: #000000; width: 585px; margin: 0 auto;" width="585">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #ffffff; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; padding-top: 20px; vertical-align: top;">
													<table class="paragraph_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad">
																<div style="color:#333333;direction:ltr;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;font-size:10px;font-weight:400;letter-spacing:0px;line-height:1.2;text-align:justify;mso-line-height-alt:12px;">
																	<p style="margin: 0; margin-bottom: 16px;">You are receiving this email because of our telephonic discussion with your organization regarding the sending of information on email to you. If you would prefer not to receive emails from Mr Brand (Pty) Ltd and its product and services platforms, <a href="https://mrbrand.co.za/unsubscribe.php" target="_blank" style="text-decoration: underline; color: #0068a5;" rel="noopener">Unsubscribe</a> instantly or edit your profile. To contact us please email <a href="mailto:customercare@mrbrand.co.za" target="_blank" title="customercare@mrbrand.co.za" style="text-decoration: underline; color: #0068a5;" rel="noopener">customercare@mrbrand.co.za</a> or call us on 0860 ADVERT / +27 11 333 6000. Prices quoted are only applicable to our prospective clients for a certain time only, including those over the borders of South Africa.</p>
																	<p style="margin: 0;">2025 © Mr Brand (Pty) Ltd | <a href="https://mrbrand.co.za/advertising-terms/" target="_blank" style="text-decoration: underline; color: #0068a5;" rel="noopener">Terms & Conditions</a></p>
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

</html>';


echo $msg;
  

}




}
