<!DOCTYPE html>
<html lang="en">
    @include('partials.header')
    
    
   

    
<?php 

$backColor="#092f48";  //{{$backColor}};

$amount="0";

if(isset(Session::get('user')[0]->company)){
    $amount="1995";
} else {
    $amount="0";
}

// print_r(Session::get('user'));

// echo Session::get('user')[0]->company;

?>



<style> 

  @media (max-width: 768px) {
  
        .container {
            /* padding-right:20px; */
            margin-right:5px;
        }
  
  
  }


 
  
</style>




<button type="button" class="btn btn-default btn-sm mobile_icon" id="mobile_icon" onclick="menu()">
  <span class="glyphicon glyphicon-menu-hamburger"></span>  
</button>

<button onclick="menu()" style="opacity:0;">
.
</button>  

<script>
    function menu(){
          // alert("click") ;
          $(".mobile_menu").slideToggle(); 
    }
</script>  




        <body>

        <div class="container"   ng-app="Home" ng-controller="HomeController">

        <br/>

        
        @include('partials.menu')

 

   <!-------------------------Header------------------------->




        <!-------------------------Header------------------------->

        <br/> <br/>


  
        <style>
  
          .cat table td:nth-child(1){
           width:50px;
          }
          
        
          .cat table td:nth-child(2){
            /* border:solid 1px silver; */
            width:200px; 
          }
          
          </style>      



  <!------------------------------------------ads-------------------------------------------------->
  <h4  style="color:{{$backColor}};"><b>Select Industry</b></h4>

  
  <div class="row">
    <div class="col-md-3">


      @foreach ($categories_government as $catz)
        
      <div class="cat">
        <a href="/company_by_cat/{{$catz->id}}">
        <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:46px;"/> <span class="glyphicon glyphicon-{{$catz->icon}}"></span> </td><td style="">{{$catz->name}}</td> <!-- <td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td> --></tr></table>     
        </a>
      </div>
      
      @endforeach


      <br/><br/>
      <h4  style="color:{{$backColor}};"><b>Related Videos</b></h4>

     
      <a href="/company/{{$videos[0]->id}}" style="color:black;text-decoration:none;">
      <div class="video_">   <!------------------------------------------------------- video ------------------------------------------------------>
       <table>
        <tr>
          <td>
            <span class="glyphicon glyphicon-facetime-video"></span>  <b> {{substr($videos[0]->name,0,18)}}</b> <br/>
            <p>{{ substr($videos[0]->about_us, 0, 20) }}</p>

          </td>
          <td>
            <iframe           
            src="https://www.youtube.com/embed/{{$videos[0]->url}}" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
        
          </td>
        </tr>
      </table>       
      </div>   <!------------------------------------------------------- video ------------------------------------------------------>
      </a>
      
      <a href="/company/{{$videos[1]->id}}" style="color:black;text-decoration:none;">
      <div class="shadow video_ point">   <!------------------------------------------------------- video ------------------------------------------------------>
        <table>
         <tr>
           <td>
             <span class="glyphicon glyphicon-facetime-video"></span>  <b>  {{substr($videos[1]->name,0,18)}}</b> <br/>
             <p>{{ substr($videos[1]->about_us, 0, 20) }}</p>
 
           </td>
           <td>
             <iframe           
             src="https://www.youtube.com/embed/{{$videos[1]->url}}" 
             title="YouTube video player" 
             frameborder="0" 
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
             allowfullscreen>
         </iframe>
         
           </td>
         </tr>
       </table>       
       </div>   <!------------------------------------------------------- video ------------------------------------------------------>
      </a>

      <a href="/company/{{$videos[2]->id}}" style="color:black;text-decoration:none;">
       <div class="shadow video_ point">   <!------------------------------------------------------- video ------------------------------------------------------>
        <table>
         <tr>
           <td>
             <span class="glyphicon glyphicon-facetime-video"></span>  <b>  {{substr($videos[2]->name,0,18)}}</b> <br/>
             <p>{{ substr($videos[2]->about_us, 0, 20) }}</p>
 
           </td>
           <td>
             <iframe           
             src="https://www.youtube.com/embed/{{$videos[2]->url}}" 
             title="YouTube video player" 
             frameborder="0" 
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
             allowfullscreen>
         </iframe>
         
           </td>
         </tr>
       </table>       
       </div>   <!------------------------------------------------------- video ------------------------------------------------------>
      </a>
      
      
      
    

      <br/>
      <h4  style="color:{{$backColor}};"><b>Popular Ebooks</b></h4>

      <div class="ebooks_">
          <table>
            <tr>
              <td><a href="https://medicaldirectory.co.za/digitalcopy/index.html" target="_blank"><img src="{{URL::asset('ebook1.png')}}" style="width:100%;"  class="shadow point" /><br/><b>Medical</b></a></td>
              <td><a href="https://government.co.bw/" target="_blank"><img src="{{URL::asset('ebook2.png')}}" style="width:100%;"  class="shadow point" /><br/><b>Botswana</b></a></td>
            </tr>
            <tr>
              <td><a href="https://eswatinigov.net/" target="_blank"><img src="{{URL::asset('ebook3.png')}}" style="width:100%;"  class="shadow point" /><br/><b>eSwatini</b></a></td>
              <td><a href="https://government.co.za/" target="_blank"><img src="{{URL::asset('ebook4.png')}}" style="width:100%;"  class="shadow point" /><br/><b>South Africa</b></a></td>
            </tr>
          </table>
      </div>
        


    </div>

    <style> 
      hr { 
        border-bottom:solid 1px silver;margin:3px;

      }
      .more a{
        color:#222;padding-right:30px;
      }

      .company_table td {
        padding:5px;
      }
    </style>

<style>
  .table-bordered td:nth-child(1) {
    font-weight: bold;
  }

  .table-bordered a{
    /* background-color: {{$backColor}};color:white;border-radius:5px;padding:4px; */
  }
</style>  

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <div class="col-md-6 more" >
     
      <!-------------------------------------------results--------------------------------------------------->
   
      @include('partials.xtra_menu')
      
    <hr/>

    <br/><br/>

   
    <style>
      .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px;
      }
  
      .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6;
      }

    
      @media screen and (max-width: 1592px), screen and (max-width: 1024px) {
    .mobile-only {
        display: none;
    }

    .tablet_view {
        font-size:13px;
    }

    .tablet_view button {
        font-size:13px;
    }
    
    }


      </style>  

   


<style>
.but1 {
  background-color:{{$backColor}};color:white;border-radius:5px;
  padding:3px;padding-left:20px;
}

</style>  




<!----------------------------------------------------------------------------- form ----------------------------------------------------------------------------------->




<div class="container0" style="margin-top:30px">
    <h5 style="color:#092f48"> <strong>Terms and Conditions</strong> </h5>
    <div>
      <div>
      <ol style="display: grid;text-align:justify;">
          					
        <li>	This application is subject to credit clearance and orders acceptance by the publisher Gauteng Government Online™ </li>
<li>	All sums payable to Gauteng Government Online™  should be made in accordance with Gauteng Government Online™ ’s Financial Terms &amp; Conditions which are: Unless a customer has applied for and been accepted as a credit account customer, Gauteng Government Online™  will provide services only on a pre-payment basis, with receipt of payment prior to the booking being confirmed. All Advertisements are accepted on the basis that they will be paid for at the prevailing rates set out herein by no later than the date of publication.</li>
<li>	Materials for any Advertisement must adhere to Gauteng Government Online™ ’s technical specifications and be delivered to Gauteng Government Online™  within the applicable timeframes</li>
<li>	Gauteng Government Online™  may, without any responsibility to the Advertiser, reject, cancel or require any Advertisement to be amended that it considers unsuitable or contrary to these Terms and remove, not print, suspend or change the position of any such Advertisement.</li>
<li>	All advertising amounts are excluding VAT</li>
<li>	The Publisher shall be under no liability whatsoever by reason of error, including any translation error, for which it may be responsible in any advertisement beyond liability to give the advertiser or advertising agency credit for as much of the space occupied by the advertisement as is materially affected by the error; and its obligation to give such credit shall not apply to more than one incorrect insertion under any contract or order unless it is notified of the inaccuracy prior to the deadline for repetition of the insertion.</li>
<li>	The Publisher does not guarantee any given level of circulation or readership for an advertisement.</li>
<li>	The advertiser or its agency assume liability for all content [including text representation and illustrations] of advertisements published and also assume responsibility for any claims arising thereof made against The Publisher, including costs associated with defending against such a claim.</li>
<li>	All positions are at the option of The Publisher. In no event will adjustments, reinstatements or refunds be made because of the position and/or section in which an advertisement has been published. The Publisher will seek to comply with position requests and other stipulations that appear on insertion orders, but cannot guarantee that they will be followed. Payment of a premium position fee does not guarantee positioning. In the event that The Publisher is unable to provide the requested positioning, the premium position fee will be refunded. Customer service representatives and Account Managers are not authorized to modify this provision or to guarantee positioning on behalf of The Publisher. Misclassification of classified ads is not permitted.</li>
<li>	The Publisher shall be under no liability for its failure for any cause to insert an advertisement.</li>
<li>	The Publisher reserves the right to convert all advertisements published in print, digital and audio-text formats, including the right to publish such advertisements electronically on the Internet and other alternate publications.</li>
<li>  Barter Agreement - All Barter agreements are valid for a period of 12 months with advertisers. Please note that for the second term of the agreement a cash payment will required. Please note cancellation of barter agreements will follow our standard cancellation policy which is in effect amounting to 75% of the agreement value.</li>
<li>	The advertiser or advertising agency shall pay the cost of composition of advertisements set but not used.</li>
<li>  This contract takes effect as of the signing of this contract and will remain in effect for a minimum of 24 months</li>
<li>  The Advertiser and its agency may not resell any advertising or advertising space unless authorized to do so in writing.</li>
<li>	Charges for changes [not corrections] from original layout and copy will be based on current composition rates.</li>
<li>	A 75% cancellation fee of the total amount will apply to all cancellations. All cancellation fees are paid upfront and immediately.</li>
<li>	The Publisher will not be responsible for errors appearing in advertisements that are placed too late for proofs to be submitted or for errors due to delivery of printing materials past publishing deadlines from the advertiser or advertising agency or from a third party designated by the advertiser or advertising agency as a source for printing material.</li>
<li>	Advertisers are responsible for checking the accuracy of the proofs they request. The advertiser should carefully check the entire ad proof, including areas in which changes or corrections were not requested.</li>
<li>	All orders are firm and are not subject to cancellation unless agreed upon by both parties.</li>
<li>	The signatory declares that he/she has the authorization to sign for and place advertisements on behalf of the client and is aware of the costs for such advertisements.</li>
<li>	Entry types not selected will be processed by default for the lowest pricing option.</li>
<li>	All Advertising contracts are automatically renewed and must be cancelled in writing at least two months before the term ends. A valid cancellation will only be applicable upon receipt of a cancellation reference number.</li>
<li>  All cancellations are required on a company letterhead prior to its renewal.</li>
<li>	Cancellations or changes cannot be guaranteed in classified advertising between the time the ad is ordered and the initial publication.In the event that the advertiser has multiple agreements with the publisher ,each agreement is be terminated individually</li>
<li>  Multi-insertion orders will be accepted only when in writing. Cancellation of multi-insertion orders must be confirmed in writing.</li>
<li>	The Publisher does not assume any liability for the return of printing material in connection with advertising unless a specific written request is received to hold such material subject to order for a period not exceeding 30 days.</li>
<li>	In the event that the advertiser does not provide new content for the renewal, the existing advert/content will be advertised for another year.</li>
<li>	Claims for errors must be made within 30 days following publication date.</li>
<li>	On advertising where a debit order is allowed, monthly accounts are due and payable on or before the fifteenth [15th] of the month following the booking. When any part of an account for advertising becomes delinquent, then the entire amount owed shall become due and payable and The Publisher may refuse to publish further advertising. In this event, the advertiser or agency shall pay for advertising space actually used according to the rate earned at the time of the delinquency.</li>
<li>	Extension of credit to advertising agencies is based on the agency’s acceptance of sole liability for all advertising placed by it and billed to its account. No endorsement, statement or disclaimer on any insertion order, cheque or letter shall act as an accord or settlement, or as a waiver of this condition unless and until it is accepted by The Publisher by a separate written agreement signed by a duly authorized representative of The Publisher. In the event of nonpayment of any agency account, prior to referring said account for third party collections, The Publisher reserves the right to contact the agency’s client(s), as disclosed principal(s), for payment. If the outstanding balance is still not settled, The Publisher may proceed with collections against both the agency and its client(s). No such action on the part of The Publisher shall relieve the agency of liability for the debt.</li>
<li>	Payment of all undisputed invoices must be made within The Publishers terms. All outstanding accounts will attract an interest fee of not less than 1% per month and is usually calculated at the prime lending rate plus 3% per annum.</li>
<li>	There will be a ZAR500.00 charge for any cheque not honored by the bank and for debit order payments that do not go through. Returned cheque/s and debit orders must be replaced with internet transfer funds within 48 hours of notification. The Publisher reserves the right to withhold further advertising pending receipt of replacement funds.</li>
<li>	In the event an account is referred to a third party for collection, advertiser agrees to pay collection and/or attorney fees, as well as court costs incurred to effect collection.</li>
<li>	Payment of account is not dependent upon receipt of invoices, either physical or electronic.</li>
<li>	Incorrect rates that do not correspond to the rate card will be regarded as clerical errors and the advertisements will be published and charged at the applicable rates in effect at the time of publication.</li>
<li>	A complimentary design and maintenance service are included with each solution. Any complimentary products will be processed upon receipt of payment.</li>
<li>	All artwork proof sheets need to be attended to as soon as possible and returned within a 7-day period. Kindly inform the publisher in writing if an extension period is required</li>
              
        </ol>
        <p><a style="color:#092f48" href="mailto:copyright@gautenggov.com">copyright@gautenggov.com</a></p>
      </div>
    </div>
  </div>



  

<!----------------------------------------------------------------------------- form ----------------------------------------------------------------------------------->

  <br/> 
 <br/>




 
    <div> 

     
      
      
      
      </div>




     

      
     

      

      


      </div>

      <div class="col-md-3" style="margin-top:-20px;">
      

<h4  style="color:{{$backColor}};"><b>Featured Classifieds</b></h4>


@foreach ($random_class as $rand)
<a href="/company/{{$rand->company_id}}">   <img src="https://cdn.adslive.com/{{$rand->url}}" style="height: 240px;width:100%;margin-bottom:20px;border:solid 1px silver;border-radius:10px;"  class="shadow"/>  </a> 

<br/>

@endforeach




      </div>



    

  </div>  


  

  <!------------------------------------------cats-------------------------------------------------->
     <br/>
  <!------------------------------------------ads-------------------------------------------------->


  
  <!------------------------------------------ads-------------------------------------------------->


</div>


@include('partials.footer')

</body>
</html>
