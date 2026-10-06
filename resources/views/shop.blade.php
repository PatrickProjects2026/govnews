<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">      
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    @include('partials.header')

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        .menu_{
          background-color:#092f48;margin-bottom:5px;color:white;
          height:35px;border-radius:5px;padding:5px; font-size:12px;
        }
       
        .menu_ table{
          width:100%;
        }
        .menu_ table td:nth-child(1){
          width:5%;
        }
        .menu_ table td:nth-child(2){
          padding-left:5px;
        }
      
        .menu_ table td:nth-child(3){
          width:5%;
        }
       </style>


    
<style>
    .product-card {
      border: 1px solid #e0e0e0;
      border-radius: 12px;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      margin-bottom: 20px;
      transition: all 0.2s ease;
    }
  
    .product-card:hover {
      transform: translateY(-4px);
    }
  
    .product-image {
      height: 180px;
      object-fit: cover;
      width: 100%;
    }
  
    .product-body {
      padding: 15px;
    }
  
    .product-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 5px;
    }
  
    .product-status {
      font-size: 0.85rem;
      color: #888;
    }
  
    .product-price {
      font-weight: bold;
      color: #28a745;
    }
  </style>

    <body>


          <!-------------------------Header------------------------->
          @include('partials.menu')
          <!-------------------------Header------------------------->
  
          <br/><br/> <br/><br/>

          <div class="row">

            <div class="col-md-1"> </div>
            <div class="col-md-2">
                
                @foreach ($product_cats as $cat)
            <a href="/shop/{{$cat->name}}">  <div class="menu_"><table><tr><td><span class="glyphicon glyphicon-menu-hamburger"></span></td><td> {{$cat->name}}</td><td><span class="glyphicon glyphicon-chevron-right"></span></td></tr></table></div> </a>            
                @endforeach

            </div>
            <div class="col-md-8">
                
                <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Welcome to Adslive Shopping
                </button>
                <br/>  <br/>

  

              <?php 
                $userSettings = Session::get('user'); 
                //print_r($userSettings); 
                // echo $userSettings[0]->company;
                // echo $userSettings[0]->name;
              
              ?>
       

              @foreach ($products as $row)
              
            
              <div class="col-md-3">
                <div class="product-card">
                  <a  data-toggle="modal" data-target="#myModal{{$row->id}}">
                  <img src="/<?php echo $row->url; ?>" alt="Product Image" class="product-image">
                 </a>
                  <div class="product-body">
                    <div class="product-title"><?php echo htmlspecialchars($row->name); ?></div>
                    <div class="mb-1" style="text-align:justify;"><?php echo htmlspecialchars(substr($row->descr,0,80)); ?></div>
                    <div class="mb-1 product-price">R<?php echo htmlspecialchars($row->price); ?></div>
                    <div class="mb-1">Quantity: <?php echo htmlspecialchars($row->quantity); ?></div>
                    <div class="product-status">Status:  <?php echo htmlspecialchars($row->status); ?></div>
                  </div>
                </div>
              </div>
          



            <div id="myModal{{$row->id}}" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ $row->name }}</h4>
                  </div>
                  <div class="modal-body">
                    <img src="/<?php echo $row->url; ?>" alt="Product Image" class="product-image" style="border:solid 1px silver;margin-bottom:10px;border-radius:5px;">
                    <p>{{ $row->descr }}</p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-primary add-to-cart-btn"
                            data-id="{{$row->id}}"
                            data-name="{{$row->name}}"
                            data-price="{{$row->price}}" value="Add to Cart"/>
                      
                    

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
            
              </div>
            </div>

              @endforeach
                


              <script>
                let cart = [];

                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
              
                $('.add-to-cart-btn').click(function () {

                  const product = {
                    id: $(this).data('id'),
                    name: $(this).data('name'),
                    price: $(this).data('price')
                  };

                  $(this).val("Added to Cart...");
                 // alert("hello:"+product.name);
                 
              
                  cart.push(product);
              
                  // $('#cart-count').text(cart.length);
                  // alert(product->name+" Added."+cart);
                  // $(this).val("Added...");
              
                  
                  
                  $.post('/add_cart', product, function(response) {
                    //alert('Added to cart!');
                  });
                  
                });
              </script>
              
 


            </div>

          </div>

          <br/><br/>
      
          
          @include('partials.footer')

    </body>

</html>    
