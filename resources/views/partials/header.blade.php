<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(isset($page))
            <title>Adslive Online™ - {{$page}} </title>
    @else 
            <title>Adslive Online™ - Search Page</title>
    @endif
 
    <link rel="icon" href="{{URL::asset('logo.ico')}}" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 --}}


    @php
        $backColor="#0054a6";  //#0386ae
    @endphp





    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        /* font-family: "Poppins", serif; */
        color:#222;
        }

        .menu {
        margin-top:10px;
        }

        .menu a{
        color:black; padding-left:20px; padding-right:20px;
        }

        .menu a:hover{
        box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
        background-color:#0082c9;border-radius: 10px;padding-top:5px;padding-bottom:5px;
        color:white;text-decoration: none;
        }

        .menu:hover{
        cursor: pointer;

        }

        .menu2 a{
            color: black;text-decoration:none;
        }


        .mobile_menu{
            display:none; margin-top:30px;width:90%;
            margin-inline-start:-10px!important;
        }

        .mobile_menu span {
            position:relative; float:left;margin-left:50px;
            text-align:justify;
     
        }

        .mobile_icon {
            background-color: #00a1d4;
            position: absolute; top:30px;right:20px;
            display:none;
            cursor: pointer;
        }

                /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {

        .mobile_buttons {
            padding-left:40px;
        }   


        .container {
            padding-right:20px;
        }
    

        .mobile_icon {
            display:block;cursor: pointer;
        }  
        
            
        .weather {
            margin-top:20px;
        }    

        .menu {
            display: none;
        }    

        .mobile_menu{
            /* background-color:#66d0e5;
            border:solid 1px #00a1d4; */
            border-radius:5px;
            float:right;position: absolute;top:10px;right:10px;z-index:999;
            padding:7px;
            margin-top:4px;          
            width:94%;
        } 

        .mobile_menu a {
            border:solid 2px white;
            background-color:#0082c9; color:white; width:100%; display: block;
            border-radius: 5px;           
            padding:7px;
            height:35px; 
            text-align: center;
        }

        .more {
            margin-top:20px;
        }    

        .logout_btn {
            margin-left:20px;
        }    

        .works_ span {
            margin-top:30px;
        }

        .menu {        
        font-size:10px;
        margin-top:20px;margin-bottom:20px;width:100%;

        
        }
 

        .menu a {
        margin-top:4px;    
        padding: 10px 15px; /* Adjust padding for smaller screens */
        width: 100%; /* Make links stretch across */
        text-align: center; /* Center-align text */
        }

        .menu2{
            visibility: hidden;

        }

        .hidden_ {
      
          z-index:99999;
        }

        .mobile_classified{
           padding-right:16%;
        }

        .mobile_classified img{
            /* width: 100%; */
            margin-bottom:5px;
            /* text-align: center; */
        }

      
        .row .images {
            text-align: center;
        }
        .row .images img {
            width:50%!important;
            height:auto!important;
        }


        .featured_logos {
            width:50%;
        }

        .thumbnail img {
            width:80%!important;margin-left:0px!important;
            height:auto!important;
        }

        .search_img{
            width:50px!important;
            height:20px!important;
        }


        .company_table span{
            float:left!important;
        }




        .search {
            margin-inline-start:0px!important; inline-size:125%!important;
        }

        

        
        }
        /*---------------------------------------- responsive ----------------------------------------------------*/

        .search_img{
            width:95%;height:81px;
        }


        .featured_logos {
            height:160px;
            width:100%;height:81px;margin-bottom:30px;
        }

        

        .mobile_classified {
            text-align: right;
        }



        .download {
        background-color:#0082c9;border-radius: 10px;padding-top:5px;padding-bottom:5px;
        }
        .download:hover {
        /*background: linear-gradient(180deg,white,#0082c9);
        border:solid 1px #0082c9; */
        cursor: pointer;
        color:black;text-decoration: none;
        box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);

        }

        .download a {
        color:white;text-decoration: none;
        }
        .download a:hover {
        color:black;
        }

        .weather{
        background-color:#66d0e5;
        border-radius: 20px;height: 50px;
        padding:6px;
        }
        .weather:hover {
        /* background: linear-gradient(180deg,white 5%,#66d0e5 95%); 
        border: solid 1px #00a1d4;
        */
        cursor: pointer; 

        box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
        }

        .search{
        border:solid 1px silver;padding:5px;
        border-radius: 5px;height: 50px;

        width:70%;margin-top:50px;margin-left:300px;
        }

        .search:hover{
        box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3); 
        /* border:solid 1px #0082c9; */
        }

        .search button{
        background-color:#00a1d4;color:white;height: 45px;width:100%;border:none;
        border-radius:0px 5px 5px 0px;
        }

        .search input{
        border:none;height: 40px;width: 100%;
        }

        .cat{
        border-radius: 10px;box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3); margin-top:10px;
        }
        .cat:hover{
        cursor: pointer;box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
        }
        .cat img {
        border-radius:20px;
        }

        .cat a{
            color:#222;
        }

        .cat a:hover{
            text-decoration:none; 
        }

        .images img {
        border:solid 2px silver;border-radius:10px;
        }

        .images img:hover {
        cursor: pointer; 
        /*border:solid 1px #00a1d4; */
        }

        .shadow_point:hover{
        cursor: pointer;box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);

        }

        .point{
        cursor: pointer;
        }

        .shadow:hover{
        cursor: pointer;box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
        }
        .shadow_point:hover{
        cursor: pointer;box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);

        }
      

        .video_{
            border:solid 2px #636262;padding:5px;
            margin-bottom: 10px;
        }

        .video_ iframe{
                height:50px;width:90px;float: right;
        }
        .video_ table td:nth-child(1){
            width: 70%;
        }

        .ebooks_
        {
            border:solid 2px #636262;padding:5px;
        }

        .ebooks_ table{
            width: 100%;           
        }

        .ebooks_ table td{
            padding:3px;
        }

        .ebooks_ b{
            padding-left:3px;
        }


        
        .ebooks_ img {
            border:solid 2px #636262;margin:3px;
            width:106px!important;
            height: 106px;
        }


        #companiesTable{
            width: 100%;
        }

        .feedback_form {
            border: solid 1px silver; padding:20px;border-radius:5px;
        }

     



        /* --------------------------------------search api--------------------------------------- */
        
.suggestions {
            
            position: absolute;
            background-color: white;
           
            max-height: 450px;
            width:93%;
            margin-top:3px; 
            z-index: 9999;
            padding:3px;
 
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
            border-radius:0px 0px 10px 10px;
            
        }

        .suggestions2 {
            
            position: absolute;
            background-color: white;
           
            max-height: 450px;
            width:17.5%;
            margin-top: -3px;
            z-index: 9999;
            margin-left: 17.9%;

 
            
        }

      
        .suggestions, .suggestions2 {
            display: none;
        }
 

        .suggestions td, .suggestions2 td  {
            padding: 2px;
            cursor: pointer;
            list-style:none;
            text-align:center;
            inline-size:100%;
        }
        .suggestions tr:hover {
            background-color: #ddd;width:100%;
        }

        .j-link:hover {
          color:#777777;
            text-decoration: none;
    
        }
        .j-link{
          color:#777777;
          text-decoration: none;
          float: left;
          font-size: 12px;
          
         
        }

        .suggestWhat li{
            background-color: #ddd;width:100%;
            float:left;
        }
        
        /* --------------------------------------search api--------------------------------------- */
        


        .shadow_box {
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            margin:10px;padding: 15px;
        }

        
        .shadow_box input {
            width:100%;height: 40px;
            margin-top:5px;margin-bottom:5px;
        }





        /* ---------------------------------- pagination -------------------------------------------------*/

        /* Refine the scope to only target DataTables pagination buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding:  5px 10px; /* Remove inner spacing */
        width: 40px; /* Set a fixed width */
        height: 25px; /* Optional: Set a consistent height */
        font-size: 10px; /* Optional: Adjust font size for readability */
        text-align: center; /* Center align the text */
        line-height: 25px; /* Match line-height to height for centering */
        border: 1px solid #ddd; /* Add a border for better visibility */
        border-radius: 4px; /* Optional: Rounded corners */
        background-color: #f9f9f9; /* Light background */
        color: #333; /* Text color */
        margin: 2px; /* Space between buttons */
        
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color:white;
        }

        div.dataTables_wrapper {
            width:90%;
            margin: 0 auto;
        }

     






</style>



<style>


@media screen and (min-width: 3000px) {

    body {
        font-size:12px;
    }

    .menu_table a {
        font-size:13px; color:red;
    }

    .thumbnail {
        font-size:12px;
    }


}




@media screen and (max-width: 480px) {


.ebooks_ table {
    margin-left: 5%!important;
  }


}

 @media screen and (max-width: 1592px), screen and (max-width: 1024px) {


      .ebooks_ table {
        margin-left: 5%!important;
      }
  
     .cat {
      font-size:12px!important;
     }

     .video_ iframe {
          inline-size:70px!important; width:100%!important;
     }

     .video_  {
          font-size:13px;
     }

     .menu a {
            padding-right:8px; font-size:12px;
     }

     /* caption for the articles box  */
     .caption  {
        font-size:12px;
     }


     .tenders  {
        font-size:12px;
     }

     .feature_class {
        inline-size:100px;
     }



      
      }
  
  
</style>  


</head>