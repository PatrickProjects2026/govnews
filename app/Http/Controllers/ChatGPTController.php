<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Arr; 
use OpenAI\Laravel\Facades\OpenAI; 

use App\Models\Home as HomeModel;

class ChatGPTController extends Controller 
{ 

/** 
* Write code on Method 
* 
* @return response() 
*/ 
public function index(Request $request) 
{ 
    $result = ''; 
    if ($request->filled('title')) { 

    $messages = [ 
    ['role' => 'user', 'content' => 'suggest me 5 domain names from "'.$request->title.'" topic. simply give me domain names list with 1. 2. 3. 4. 5. '], 
    ]; 

    $result = OpenAI::chat()->create([ 
    'model' => 'gpt-3.5-turbo', 
    'messages' => $messages, 
    ]); 

    $result = Arr::get($result, 'choices.0.message')['content'] ?? ''; 

    } 
    
    return view('chatGPT', compact('result')); 
} 


public function search() 
{ 
    $result = ''; 


    if(isset($_POST['what'])) {

        echo $_POST['what']."=".$_POST['where'];

        $messages = [ 
        ['role' => 'user', 'content' => 'give me 20 companies from the category of "'.$_POST['what'].'" in the city of "'.$_POST['where'].'". give me list of popular companies give line break after name, email, contact,address,url  as 1. 2.  to 20 '], 
        ]; 

        $result = OpenAI::chat()->create([ 
        'model' => 'gpt-3.5-turbo', 
        'messages' => $messages, 
        ]); 

        $result = Arr::get($result, 'choices.0.message')['content'] ?? ''; 



        

    }

    return view('chatGPT', compact('result')); 


} 


public function complete_what($what){

    $messages = [ 
        ['role' => 'user', 'content' => 'auto complete this word "'.$what.'" return 5 options separated by comma'], 
        ]; 

        $result = OpenAI::chat()->create([ 
        'model' => 'gpt-3.5-turbo', 
        'messages' => $messages, 
        ]); 

        $result = Arr::get($result, 'choices.0.message')['content'] ?? ''; 


    echo $result;

    // give 5 suggestions that auto complete this word "'.$what.'" remove numbers and separate them by comma

}

function singularize($word) {
    $rules = [
        '/(quiz)zes$/i' => '\1',        // quizzes → quiz
        '/(matr)ices$/i' => '\1ix',     // matrices → matrix
        '/(vert|ind)ices$/i' => '\1ex', // vertices → vertex, indices → index
        '/(n)ews$/i' => '\1ews',        // news → news (unchanged)
        '/([^aeiouy]|qu)ies$/i' => '\1y', // stories → story
        '/(s)eries$/i' => '\1eries',    // series → series
        '/(m)ovies$/i' => '\1ovie',     // movies → movie
        '/(x|ch|ss|sh)es$/i' => '\1',   // boxes → box, churches → church
        '/(o)es$/i' => '\1',            // heroes → hero
        '/(bus)es$/i' => '\1',          // buses → bus
        '/(octop|vir)i$/i' => '\1us',   // octopi → octopus, viri → virus
        '/(alias|status)es$/i' => '\1', // aliases → alias
        '/(cris|ax|test)es$/i' => '\1is', // crises → crisis, testes → testis
        '/s$/i' => '',                  // general rule: remove trailing 's'
    ];

    foreach ($rules as $pattern => $replacement) {
        if (preg_match($pattern, $word)) {
            return preg_replace($pattern, $replacement, $word);
        }
    }

    return $word; // Return unchanged if no rule matches
}

public function advanced_search($what){

    $messages = [ 
        [
            'role' => 'user', 
            'content' => ' 
            I need a category/industry to  search http://search/what,Pick one word from ('.$what.'), if its not found return correction/suggestion 

       '], 
       
     ]; 

        $result = OpenAI::chat()->create([ 
        'model' => 'gpt-3.5-turbo', 
        'messages' => $messages, 
        ]); 

        $result = Arr::get($result, 'choices.0.message')['content'] ?? ''; 

      
        $arr=explode(" ",$result);
        if(count($arr)>1) {
            echo $result;
        //  echo '<script> alert("'.$result.'");</script>';
        }
        else {
        echo '<script>document.location="/advance/'.$result.'";</script>';
        }

            // return redirect()->route('advance', ['what' => $what]);

        // if(isset(explode(": ", explode(",",$result)[0] )[1]) && isset(explode(": ", explode(",",$result)[1] )[1])){

        //     $search_items=explode(",",$result);
        //     $data=$search_items;
        //     // Extract values using explode
        //     $what = explode(": ", $data[0])[1]; // Gets "lawyers"
        //     $where = explode(": ", $data[1])[1]; // Gets "Durban"

        //     $where = rtrim($where, ")");
        //     echo "<br/><br/>";
        //     // Output
      
        //     $what =$this->singularize($what);
        //     $where =$this->singularize($where);

        //     echo "What: $what <br/>";  // Output: lawyers
        //     echo "Where: $where"; // Output: Durban

        //     return redirect()->route('advance', ['what' => $what,'where'=>$where]);


        //     //-------------------------------------------------------------------

        //     // $data['cat']           = $where;
        //     // $data['main_cat']      = $what;        // get category name by id 
        //     // $data['page']          = $data['main_cat'];
  
        //     // $data['top_companies'] = HomeModel::advance($what,$where,"8");          
        //     // $data['companies']     = HomeModel::advance($what,$where,"50");      // featured companies , limit
  
        //     // $data['categories_government'] = HomeModel::categories_government("12");         
        //     // $data['videos']                = HomeModel::videos("4");                         // top videos , limit
        //     // $data['News']                  = HomeModel::cdn_news2("gauteng_gov_news","News",4);
        //     // $data['biz_cats']              = HomeModel::biz_cats("9");
        //     // $data['gov_article_cats']      = HomeModel::gov_article_cats();
        //     // $data['gov_articles']          = HomeModel::gov_articles("5");
       
  
        //     // return view('home', $data);

        //       //-------------------------------------------------------------------



        // } else {
        //     echo $result." <br/>";
        // }

        


   

}


// public function advanced_search($what){

//     $messages = [ 
//         ['role' => 'user', 'content' => ' search this text ("'.$what.'") and return  (category,location) or friendly message if either one is missing '], 
//         ]; 

//         $result = OpenAI::chat()->create([ 
//         'model' => 'gpt-3.5-turbo', 
//         'messages' => $messages, 
//         ]); 

//         $result = Arr::get($result, 'choices.0.message')['content'] ?? ''; 


       

//         if(isset(explode(": ", explode(",",$result)[0] )[1]) && isset(explode(": ", explode(",",$result)[1] )[1])){

//             $search_items=explode(",",$result);
//             $data=$search_items;
//             // Extract values using explode
//             $what = explode(": ", $data[0])[1]; // Gets "lawyers"
//             $where = explode(": ", $data[1])[1]; // Gets "Durban"

//             $where = rtrim($where, ")");
//             echo "<br/><br/>";
//             // Output
      
//             $what =$this->singularize($what);
//             $where =$this->singularize($where);

//             echo "What: $what <br/>";  // Output: lawyers
//             echo "Where: $where"; // Output: Durban

//             return redirect()->route('advance', ['what' => $what,'where'=>$where]);


//             //-------------------------------------------------------------------

//             // $data['cat']           = $where;
//             // $data['main_cat']      = $what;        // get category name by id 
//             // $data['page']          = $data['main_cat'];
  
//             // $data['top_companies'] = HomeModel::advance($what,$where,"8");          
//             // $data['companies']     = HomeModel::advance($what,$where,"50");      // featured companies , limit
  
//             // $data['categories_government'] = HomeModel::categories_government("12");         
//             // $data['videos']                = HomeModel::videos("4");                         // top videos , limit
//             // $data['News']                  = HomeModel::cdn_news2("gauteng_gov_news","News",4);
//             // $data['biz_cats']              = HomeModel::biz_cats("9");
//             // $data['gov_article_cats']      = HomeModel::gov_article_cats();
//             // $data['gov_articles']          = HomeModel::gov_articles("5");
       
  
//             // return view('home', $data);

//               //-------------------------------------------------------------------



//         } else {
//             echo $result." <br/>";
//         }

        


   

// }



}

