@php
$backColor="#092f48";  //#0386ae
@endphp

<script>


    $(document).ready(function(){
        
        let width = window.innerWidth;
        let height = window.innerHeight;
        // alert(`Screen Size: Width = ${width}px, Height = ${height}px`);
        // $("#report").html(width);
        
    });

</script>

<style>

    /* Hide on small screens */
/* @media (max-width: 575.98px) {
    .desktop-only {
        display: none;
    }

    .footer {
        font-size:11px;
    }
} */

/* Show on large screens only */

@media (max-width:768px) {

.footer {
    padding-top:0px;
}

.footer .col0 img {
    width:200px;
}


.footer .col0 {
    margin-top:0px;margin-left:25px;
}

.footer .col1 {
    margin-top:10px;
    float:left;
    margin-left:20px;
}

.footer .col2 {
    margin-top:10px;
    float:left;
    margin-left:20px;
}

.footer .col3 {
    margin-top:10px;
    float:left;
    margin-left:20px;
}

.footer .col4 {
    margin-top:10px;
    float:left;
    margin-left:20px;
}


}



@media screen and (max-width: 1592px), screen and (max-width: 1024px) {
    .footer {
        font-size:11px;
    }
}



.footer{
    padding-top:60px;padding-bottom:30px;
    background-color:{{$backColor}}; 
    text-align:start;
    color: white;
}

.footer b {
    /* text-shadow: 0 0 5px black; */
    color: white;
}

.footer img{
    border-radius:5px; cursor: pointer;
}

.menu_table  {
float: right;
}

.menu_table td {
    font-weight:bold;
    padding:8px;
}


.menu_table td a{
color:white; 
}
</style>    

<footer class="footer">

    <div id="report"></div>
    
    <br>


   <center>     
    <div class="container row">
        
        

        
        
        <div class="col-md-3 col0"> 
            <br/>
      
         <a href="#logo" >  <img src="{{URL::asset('mrbrand.png')}}" style="width:80%;padding-bottom:0px;float:left;"> </a>
       
            <br/><br/><br/>

            <div style="text-align:left;font-size:12px;;">
             <br/><br/><br/>
             At Mr Brand™, we are more than just an advertising agency—we are your strategic partner in creating impactful connections between businesses and their audiences. 
            </div>
        </div>
        <div class="col-md-2 col1" style="text-align:left;padding-left:5%;font-size:12px;width:auto!important;">
     
        <table class="menu_table" style="margin-top:8px;"> 
        <tr><td colspan="2"> <b>Get in touch</b> </td></tr>   
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-envelope" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="mailto:info@adslive.com" style="font-size:12px;color:white;"> info@adslive.com </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-earphone" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="tel:0861 368 266" style="font-size:12px;color:white;"> 0861 368 266 </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-phone" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="tel:+27 11 333 6000" style="font-size:12px;color:white;"> +27 11 333 6000 </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-map-marker" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="#" style="font-size:12px;color:white;">  Johannesburg </a</td></tr>     
        </table>

        </div>
      
        <div class="col-md-2 col2"  style="text-align:left;padding-left:5%;font-size:12px;width:auto!important;">

        <table class="menu_table" style="margin-top:8px;"> 
        <tr><td colspan="2"> <b>Home</b> </td></tr>   
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-user" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="/register_login" style="font-size:12px;color:white;"> Login </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-user" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="/register_login" style="font-size:12px;color:white;"> Sign in </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-phone" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="/contact" style="font-size:12px;color:white;"> Contact Us </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-folder-open" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="/add" style="font-size:12px;color:white;">  Add Listing </a</td></tr>     

        </table>


        </div>

        <div class="col-md-2 col3"  style="text-align:left;padding-left:5%;font-size:12px;width:auto!important;">
            
            
        <table class="menu_table" style="margin-top:8px;"> 
        <tr><td colspan="2"> <b>Other Platforms</b> </td></tr>   
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td  style="padding-left:6px;"><a href="https://medimag.co.za/" style="font-size:12px;color:white;"> medimag.co.za </a</td></tr>     
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td style="padding-left:6px;"><a href="https://leadsbank.co.za/" style="font-size:12px;color:white;"> leadsbank.co.za </a</td></tr>              
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td ><td style="padding-left:6px;"><a href="https://nwgov.co.za" style="font-size:12px;color:white;"> nwgov.co.za </a</td></tr>              
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td><a href="https://ncgov.co.za" style="font-size:12px;color:white;"> ncgov.co.za </span> </b></a</td></tr>        
        </table>
            
        
        </div>

        <div class="col-md-2 col4"  style="text-align:left;padding-left:3.5%;font-size:12px;width:auto!important">
            
            
        <table class="menu_table" style="margin-top:8px;"> 
        <tr><td colspan="2"> <b>More Platforms</b> </td></tr>   
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td><a href="https://ecgov.co.za" style="font-size:12px;color:white;"> ecgov.co.za </span> </b></a</td></tr> 
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td><a href="https://fsgov.com" style="font-size:12px;color:white;"> fsgov.com </span> </b></a</td></tr> 
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td><a href="https://limpopogov.com" style="font-size:12px;color:white;"> limpopogov.com </span> </b></a</td></tr> 
        <tr><td style="font-size:12px;color:white;"><span class="glyphicon glyphicon-globe" style="font-size:12px;color:white;"></span></td><td><a href="https://mpumalangagov.com" style="font-size:12px;color:white;"> mpumalangagov.com </span> </b></a</td></tr> 
        </table>
                    
                
 </div>

    
    </div>
   </center>


    <br><br>




    <div class="row">

        <div class="col-md-12">

            <center>    

            <br/><br/>
            <p style="padding-left:20px;padding-right:20px;"> © {{date("Y")}} Adslive™  of South Africa - powered by 

            <a href="https://www.dotcomafrica.com/" style="color:white;"> Dotcom Africa </a> |

            <a href="/terms" style="color:white; ">Privacy Policy </a> | <a href="/terms" style="color:white; ">Terms.</a></p>
            </center>

        </div>

    </div>



   
</footer>


   






   
