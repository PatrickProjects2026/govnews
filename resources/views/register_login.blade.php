@include('partials.header')


@php
$backColor="#0054a6";  //#0386ae
@endphp



<style>
  .check_table{
    width: 100%;
  } 
  .check_table td{
    padding:5px;
  } 
  
  .check_table td:nth-child(2){
    float: right;  
  }


  .login_ {
    border:solid 1px silver;
    padding:10px;
    /* padding-top:30px;  */
    padding-top:40px;
    margin-bottom:20px; margin-top:10px;
    height: 140px;
  }
  
  .login_ b { 
     font-size:18px;
  }

  .login_ p { 
     font-size:18px;
  }

  .login_ button { 
     font-size:12px;
     background-color:{{$backColor}};color: white;
     border:none; width:100px;height: 40px;
  }

  .login_ input { 
     font-size:12px;width:30%;height: 40px;
  }




  
  .login_2 {
    border:solid 1px silver;
    padding:10px;
    /* padding-top:30px;  */
    padding-top:40px;
    margin-bottom:20px; margin-top:10px;
    height: auto;
  }
  
  .login_2 b { 
     font-size:18px;
  }

  .login_2 p { 
     font-size:18px;
  }

  .login_2 button { 
     font-size:12px;
     background-color: {{$backColor}};color: white;
     border:none; width:200px;height: 40px;
  }

  .login_2 input { 
     font-size:12px;width:60%;height: 40px;
  }


  .checkout {
    font-size:12px;
     background-color: {{$backColor}};color: white;
     border:none; width:100%;height: 40px;
     margin-top:5px;
  }

  form {
    padding-left:40px;
  }

  
  
</style>   

<style> 

  @media (max-width: 768px) {
  
        .shadow_box{
           min-height:190px;
        }

        .shadow_box:nth-child(1) input{
           width:40%;
        }

        .shadow_box:nth-child(2) input{
           width:80%;
        }

        .shadow_box:nth-child(3) input{
           width:80%;
        }

        .newsletter{
          inline-size:250px;
          margin-block-start:2px;
        }
  
  
  }
  
</style>

    


<div class="container"   ng-app="Home" ng-controller="HomeController">

  @include('partials.menu')





<br/> <br/> <br/> <br/>

 <div class="row">
   <div class="col-md-12">


    <div class="login_ shadow_box" style="height:248px;">
      @if(isset($log_msg))
      <div class="alert alert-success" style="width:55%;margin-left:35px;">{{$log_msg}}</div>
      @endif

    <div class="row"> 
        <div class="col-md-9">
            <form action="/register_login" method="POST">
             @csrf
            <b> <span class="glyphicon glyphicon-user"  style="font-size:12px;"></span> Have an account?</b><br/> 
            <input type="text" placeholder="Username" name="username" required/> &nbsp;    <input type="password" placeholder="Password" name="password" required/> 

            &nbsp;
            <button  type="submit" name="login_account">SIGN IN</button>
            </form>
        </div>


          
        
        
    </div>
   </div> 
     
     
   <div class="login_2 shadow_box"  style="margin-top:40px;">

    

    <form action="/register_login" method="POST">

        <b>  <span class="glyphicon glyphicon-user" style="font-size:12px;"></span> Register Account</b>
        
        @csrf
      <label>Company</label><br/>
      <input type="text" placeholder="Company" name="company" required/> <br/>
      
      <label>Email Address</label><br/>
      <input type="email" placeholder="Email Address"  name="email" required/> <br/>

      <label>Contact Number</label><br/>
      <input type="text" placeholder="Contact Number"  name="number" required/> <br/>

      <label>Username</label><br/>
      <input type="text" placeholder="Username"  name="username" required/> <br/>

      <label>Password</label><br/>
      <input type="password" placeholder="Password" name="password" required/> <br/>

      <label>Confirm Password</label><br/>
      <input type="password" placeholder="Confirm  Password" name="confirm" required/> <br/>  <br/>
 
      <button type="submit" name="register_account">REGISTER ACCOUNT</button>

      @if(isset($reg_msg))
      &nbsp;
      <div class="alert alert-success">{{$reg_msg}}</div>
      @endif   

    </form>    

   </div> 

   

   <br/>
        





      
         <hr/>
         
        

         {{-- <hr/> --}}

         {{-- <input type="checkbox"/> <b>SHIPPING</b> --}}
         
         <form>
           <label></label>
         </form>   
         
  

   </div>
{{-- 
   <div class="col-md-4">

    
    <div class="shadow_box">

      <b>EMAIL</b>   <br/>      <br/>
      <input type="text" placeholder="Email" class="newsletter" /> <br/>
      <p><span class="glyphicon glyphicon-send"  style="font-size:12px;"></span> Get notifications on new similar products with prices and discounts.</p>

    </div>  
    
    <br/>

    <div class="shadow_box">

        <div class="row"> 
            <div class="col-md-6"><img src="{{URL::asset('pix/software.png')}}" style="width:100%"/></div>
            <div class="col-md-6" style="font-size:13px;"> <b><u> Welcome to Leadsbank </u></b> <br/> The best in offline search,
                Leadsbank is a proudly South African product guaranteed to drive new sales opportunities for all businesses.</div>
         </div>
         
         <hr style="border-bottom:solid 1px {{$backColor}}"/>
        
    <table class="check_table">
        <tr><td> <b>Subtotal </b></td><td>1,995.00</td></tr>
        <tr><td> <b>Shipping </b></td><td>0.00</td></tr>
        <tr><td> <b>Tax </b></td><td>0.00</td></tr>
        <tr style="border-bottom:solid 1px silver;"><td></td><td></td></tr>
        <tr><td> <b>Total </b></td><td>1,995.00</td></tr>
        <tr style="border-bottom:solid 1px silver;"><td></td><td></td></tr>
    </table>

    <br/>
 

       
    @if(isset(Session::get('user')[0]->company))
    <a href="https://payfast.dotcom.africa/?invoice_num={{Session::get('user')[0]->company}}&invoice_amt=1995">
       <button class="checkout">Check Out</button> 
    </a>
    @else
    <a href="/register_login">
        <button class="checkout">Check Out</button> 
    </a>    
    @endif

   <p><span class="glyphicon glyphicon-lock"></span> <u>Secure payment with high-level-SSL-encryption</u></p>  
    

    </div>

   </div> --}}


 </div>


</div>


@include('partials.footer')