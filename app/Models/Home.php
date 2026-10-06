<?php
// namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Mail\InternalEmail;
use Illuminate\Support\Facades\Mail;

class Home extends Model
{
    //
    protected $table = 'companies'; 
    protected $province='gauteng';


    public static function profile($type,$pro,$limit){
    $data=DB::select("SELECT * FROM `govnews_profiles` where type='".$type."' and province like '%".$pro."%' order by rand() limit ".$limit);
    return $data; 
    }

    public static function profile2($type,$limit){
    $data=DB::select("SELECT * FROM `govnews_profiles` where type='".$type."' order by rand() limit ".$limit);
    return $data; 
    }

    public static function companies($id){
        $province='gauteng';
        $data=DB::select("SELECT * FROM `companies` where logos!='' and CONCAT(name, ' ', address) like '%".$province."%' order by rand() limit ".$id);
        return $data; 
    }

    public static function sub_cats($id){
        $data=DB::select("SELECT * FROM `GAUTENG_SUBS` where main_id=".$id."  order by rand()");
        return $data; 
    }

    public static function main_cat($id=1){

        $data=DB::select("SELECT name FROM `GAUTENG_CATS` where id=".$id." ");
        return $data; 
    }

    public static function gov_cat($id){

        $data=DB::select("SELECT name FROM `categories_government` where id=".$id." ");
        return $data; 
    }

    public static function biz_cat($id){

        $data=DB::select("SELECT name FROM `categories` where id=".$id." ");
        return $data; 
    }

    public static function by_tag($tag,$limit){

        $province="gauteng";
        $data=DB::select("SELECT * FROM `companies` where tags LIKE '%".$tag."%' and CONCAT(province,' ',name, ' ', address) like '%".$province."%' order by logos desc limit ".$limit);
       
               
        foreach($data as $key => $item) {

            if(!$item->logos){
                $item->logos="gauteng_placeholder.png";
            }
        }
        
        return $data; 

    }

    public static function advance($what,$limit){
        $province="gauteng";
        $data=DB::select("SELECT * FROM `companies` WHERE companies.tags like '%".$what."%'  and address like '%gauteng%' order by logos desc limit ".$limit);

        foreach($data as $key => $item) {

            if(!$item->logos){
                $item->logos="gauteng_placeholder.png";
            }
        }

        return $data; 
    }

    // public static function advance($what,$where,$limit){
    //     $province="gauteng";
    //     $data=DB::select("SELECT * FROM `companies` WHERE companies.tags like '%".$what."%'  and address like '%".$where."%' order by logos desc limit ".$limit);

    //     foreach($data as $key => $item) {

    //         if(!$item->logos){
    //             $item->logos="gauteng_placeholder.png";
    //         }
    //     }

    //     return $data; 
    // }

    public static function by_class($tag,$limit){
        $province="gauteng";
        $data=DB::select("SELECT * FROM `companies` left join classified_banners on classified_banners.company_id=companies.id WHERE companies.tags like '%".$tag."%'  and CONCAT(name, ' ', address) like '%".$province."%'  and logos!=''  and url!='' and telephone!='' and website!='' order by rand() limit ".$limit);
        return $data; 
    }

    public static function random_class($limit){
        $province="gauteng";
        $data=DB::select("SELECT * FROM `companies` left join classified_banners on classified_banners.company_id=companies.id WHERE CONCAT(name, ' ', address) like '%".$province."%' and logos!='' and url!='' order by rand() limit ".$limit);
        return $data; 
    }


    public static function promos($limit){

        $data=DB::select("SELECT * FROM `promotions` left join companies on companies.id=promotions.company_id order by rand() limit ".$limit);
        return $data; 
    }


    
  

    public static function videos($limit){

        $province="gauteng";
        $data=DB::select(" SELECT companies.id,companies.name,companies.about_us,videos.url FROM `videos` left join companies on companies.id=videos.company_id where CONCAT(name, ' ', address) like '%".$province."%'   order by rand() limit ".$limit);
        return $data; 
    }

    public static function company_video($id){

        $data=DB::select(" SELECT * FROM `videos` where videos.company_id = ".$id);
        return $data; 
    }

    
    public static function company($id){ 

        $data=DB::select("SELECT * FROM `companies` where id=".$id." limit 1");
        
        if(!$data[0]->logos) {
            $data[0]->logos='gauteng_placeholder.png';
        }

        return $data; 
    }

    public static function sendMail($subject,$message,$from,$to){

        $details = [
            'subject' => $subject,
            'message' => $message,
            'from'=>$from,
        ];
    
        if(Mail::to($to)->bcc("info@leadsbank.co.za")->send(new InternalEmail($details)))
        {
            return 'Email sent successfully!';
        } else {
            return 'Email Failed!';
        }
    
       

    }


    public static function artwork($id,$table){

        $data=DB::select("SELECT * FROM `".$table."` where company_id=".$id);
        return $data; 
    }


    
    public static function cdn_news($table){

        $data=DB::select("SELECT * FROM `".$table."` order by rand() limit 20 ");
        return $data; 
    }

       
    public static function cdn_news2($table,$status,$limit=20){

        $data=DB::select("SELECT * FROM `".$table."` where status='".$status."'  and status!='Videos' order by rand() limit ".$limit);
        return $data; 
    }

    // public static function cdn_news_cat($table,$status,$limit=20){

    //     if($status=="Videos"){
    //         $line='';
    //     } else {
    //         $line=" and status!='Videos' ";
    //     }

    //     $data=DB::select("SELECT * FROM `".$table."` where cat='".$status."' ".$line." order by rand() limit ".$limit);
    //     return $data; 
    // }


     public static function cdn_news_cat($table,$status,$limit=20){

        if($status=="Videos"){
            $line='';
        } else {
            $line=" and status!='Videos' ";
        }

        $data=DB::select("SELECT * FROM `".$table."` where cat='".$status."' ".$line." order by rand() limit ".$limit);
        return $data; 
    }

    public static function cdn_news_prov($table,$status,$limit=20){

        $data=DB::select("SELECT * FROM `".$table."` where `province` LIKE '".$status."' and status!='Videos'  order by rand() limit ".$limit);
        return $data; 
    }

    public static function cdn_news_id($table,$id,$limit=20){

        $data=DB::select("SELECT * FROM `".$table."` where id='".$id."' order by rand() limit ".$limit);
        return $data; 
    }

     public static function cdn_news_status($table,$status,$limit=20){

        $data=DB::select("SELECT * FROM `".$table."` where status='".$status."'  order by rand() limit ".$limit);
        return $data; 
    }

     public static function cdn_news_find($table,$status,$limit=20){

        $data=DB::select("SELECT * FROM `".$table."` WHERE (title LIKE '%".$status."%' OR excerpt LIKE '%".$status."%' OR province LIKE '%".$status."%'  OR cat LIKE '%".$status."%') 
            AND status!='Videos' 
            ORDER BY rand() 
            LIMIT ".$limit);
        return $data; 
    }

    public static function gov_article_cats($limit=9){

        $data=DB::select("SELECT * FROM `gov_article_cats` limit ".$limit);
        return $data; 
    }

    public static function gov_articles($limit){

        $data=DB::select("SELECT * FROM `gov_articles` order by rand() limit ".$limit);
        return $data; 
    }

    public static function get_gov_articles($page){

        $data=DB::select("SELECT * FROM `gov_articles` where cat like '".$page."'");
        return $data; 
    }




    public static function Articles($table,$category,$limit=20){

        $data=DB::select("SELECT * FROM `".$table."` where cat like '".$category."' || subcat like '".$category."' order by rand() limit ".$limit);
        return $data; 
    }

    
    public static function categories_government($limit){

        $data=DB::select("SELECT * FROM `categories_government` limit ".$limit);
        return $data; 
    }

    public static function company_by_category($cat,$limit){

        $province="gauteng";
        $data=DB::select("SELECT * FROM `category_company_government` left join companies on companies.id=category_company_government.company_id where category_company_government.category_id=".$cat." and name !='' and  CONCAT(province,' ',name, ' ', address,' ',tags) like '%".$province."%'  order by logos desc limit ".$limit);
        
        
        foreach($data as $key => $item) {

            if(!$item->logos){
                $item->logos="gauteng_placeholder.png";
            }
        }
        
        return $data; 
    }

    public static function company_bybiz_category($cat,$limit){

        $data=DB::select("SELECT * FROM `category_company` left join companies on companies.id=category_company.company_id where category_company.category_id=".$cat." and name!=''  order by rand() limit ".$limit);
       
    }

    public static function company_bybiz_category2($cat,$limit){
        $province="gauteng";
        $data=DB::select("SELECT * FROM `category_company` left join companies on companies.id=category_company.company_id where category_company.category_id=".$cat." and name!=''   and  CONCAT(province,' ',name, ' ', address,' ',tags) like '%".$province."%'   order by logos desc limit ".$limit);
       

        foreach($data as $key => $item) {

            if(!$item->logos){
                $item->logos="gauteng_placeholder.png";
            }
        }


        return $data; 



    }



    public static function search_name($name,$limit){
       
        $data=DB::select("select * from companies where name like '%".$name."%'  order by logos desc limit ".$limit);
        foreach($data as $key => $item) {

            if(!$item->logos){
                $item->logos="gauteng_placeholder.png";
            }
        }
        
        return $data; 
    }

    public static function by_class2($tag,$limit){
        $province="gauteng";
        $data=DB::select("select * from classified_banners left join companies on companies.id=classified_banners.company_id left join category_company_government on category_company_government.company_id=companies.id where category_company_government.category_id=".$tag." order by rand()  limit ".$limit);
        return $data; 
    }

    
    public static function by_class_one($cid){
        $province="gauteng";
        $data=DB::select("select * from classified_banners left join companies on companies.id=classified_banners.company_id where companies.id=".$cid);
        return $data; 
    }

    public static function bybiz_class($tag,$limit){
        $province="gauteng";
        $data=DB::select("select * from classified_banners left join companies on companies.id=classified_banners.company_id left join category_company on category_company.company_id=companies.id where category_company.category_id=".$tag."  and logos!=''    order by rand()  limit ".$limit);
        return $data; 
    }

    public static function by_logo2($tag,$limit){
        $province="gauteng";
        $data=DB::select("select * from companies left join category_company_government on category_company_government.company_id=companies.id where category_company_government.category_id=".$tag." limit ".$limit);
        return $data; 
    }

    public static function adverts($id){
        $province="gauteng";
        $data=DB::select("select * from adverts where company_id =".$id);
        return $data; 
    }

    public static function product_cats($limit){
        $province="gauteng";
        $data=DB::select("SELECT * FROM `stats_products_cats` limit ".$limit);
        return $data; 
    }

    public static function products($cat,$limit){
        $province="gauteng";
        $data=DB::select("SELECT * FROM `stats_products` where cat='".$cat."' limit ".$limit);
        return $data; 
    }


      
    public static function biz_cats($limit){

        $data=DB::select("SELECT * FROM `categories` limit ".$limit);
        return $data; 
    }






}
