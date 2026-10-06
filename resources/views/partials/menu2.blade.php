

<button type="button" class="btn btn-default btn-sm mobile_icon" id="mobile_icon">
  <span class="glyphicon glyphicon-menu-hamburger"></span>  
</button>
  <!-------------------------Header------------------------->

  <div class="row" style="margin-top:10px;">
    <div class="col-md-3">
      <a href="/"> <img src="{{URL::asset('logo.png')}}" style="height:40px;" /> </a>
    </div>
    <div class="col-md-7">
     
     <div class="menu">
       <a href="/search_sub/3/Car"> <span class="glyphicon glyphicon-home"></span> &nbsp; Home</a>
       <a href="/add">              <span class="glyphicon glyphicon-folder-open"></span> &nbsp; Add Listing</a>
       <a href="/Gazette">          <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Gazette</a>       
       <a href="/Tenders" >         <span class="glyphicon glyphicon-folder-close"></span> &nbsp; Tenders</a>
       <a href="/contact" class="download" style="color: white;"> <span class="glyphicon glyphicon-phone"></span> Contact Us </a>  
     </div>

    </div>
    <div class="col-md-2">
     
     <div class="weather">
       <center>
         <table style="height: 10px !important;">
          <tr>
            <td style="padding-top:7px;">
              <b style="font-size:19px;margin-right:5px;"> <span class="glyphicon glyphicon-cart"   style="font-size:14px;"></span>R0 </b>
            </td>
            <td>|</td>
            <td style="padding-top:7px;">
              <b style="font-size:19px;margin-left:5px;" id="time_">08:52</b>

              <!-- <table  style="height: 10px !important;margin-left:5px;">
                <tr><td> <b style="font-size:19px;">08:52</b></td></tr>
                <tr><td> <span style="font-size:9px;margin-top:-15px;">Thu, 30 Oct</span></td></tr>
              </table> -->
              
            </td>
          </tr>
         </table>
        </center>
     </div>

    </div>
 </div>

 

 
<script>
  function updateTime() {
          const now = new Date();
          const hours = String(now.getHours()).padStart(2, '0');
          const minutes = String(now.getMinutes()).padStart(2, '0');
          const currentTime = `${hours}:${minutes}`;
          
          document.getElementById('time_').textContent = currentTime;
          // alert(currentTime);
      }

      // Update time every minute, 60000
      updateTime();
      setInterval(updateTime, 6000);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

<br/> <br/>

 <div class="row" ng-app="App2">
   <div class="col-md-3"></div>
   <div class="col-md-6">
     
     <div class="search" ng-Controller="MainController">
 
         <table style="width:100%;margin-top:-4px;">
           <tr>
             <td style="width:30px"> <span class="glyphicon glyphicon-search" style="font-size:25px;margin-left:5px;"></span> </td>
             <td> <input type="text" placeholder="Search" id="whatQuery2" name="what" > </td>
             <td> <button ng-click="search_back()">Search</button></td>
           </tr>
         </table>
   
         <div id="whatSuggestions2" class="suggestions">    
         
          <table style="margin-top:0px;z-index:999999;width:100%;">
            <tr ng-repeat="suggest in Items">
                <td><a class="j-link" href="/search_sub/1/@{{suggest.name}}"><span class="glyphicon glyphicon-chevron-right"></span> @{{suggest.name}}</a></td>
            </tr>
            
            <tr ng-if="Items.length==0"><td>Did you mean: </td></tr>
            <tr ng-if="Items.length==0" ng-repeat="Meant in Meant">
              
              <td class="meaning">             
             
              <a class="j-link click_back suggestWhat" ng-click="click_back(Meant)" style="cursor:pointer"> <span class="glyphicon glyphicon-chevron-right"></span>  @{{Meant}}</a> 
          
        
            </td>
            </tr>  
          </table>
        </div>

     </div>

   </div>
   <div class="col-md-3"></div>
 </div>

   <!-------------------------Header------------------------->



   <script>
    var app = angular.module('App2', []);
    
    app.controller('MainController', function($scope, $http) {
  
         $scope.click_back=function(text){
          // alert(text);
          $("#whatQuery2").val(text);
         }
  
         $scope.search_back=function(){
          let text=$("#whatQuery2").val();
          window.location='/search_sub/1/'+text;
         }
        
        $("#whatSuggestions2").hide();
        $("#whereSuggestions2").hide();
    
     
    
       
    
      $("#test").click(function(){
    
              // Auto-correct suggestions
              const matches = getClosestMatches(text, dictionary);
                console.log('Auto-correct suggestions for "whatQuery":', matches);
                // Display suggestions to user if needed (e.g., update UI)
    
        alert(matches);
      });
    
      
      // ----------------------------------------------------------- advanced search----------------------------------------------------------------
    
    
      $("#companiesTable").hide();
    
    
    
      $http.get("/cats")
                .then(function(response) {
                $scope.cats = response.data; 
      });
    
           
                $scope.category  = '0';
                $scope.province  = '0';
                $scope.alphabet  = '0';
                $scope.date      = '0';
                $scope.limit     = '150';
                $scope.companies = [];
    
                $scope.search_title="";
    
                $scope.search = function(alphabet, category, province,date, limit) {
                
                $("#myTable").hide();
                $("#myTable_wrapper").hide();
    
                $("#companiesTable").show();
                $("#companiesTable_wrapper").show();
    
                $(".search_title").hide();
    
              
    
                   //  $scope.search_title="CATEGORY:"+category+", PROVINCE:"+province+", ALPHABET:"+alphabet+",DATE:"+date+",LIMIT:"+limit;
    
                    // Call the backend API using $http.get
                    $http.get("/advanced_search/" + alphabet + "/" + category + "/" + province+ "/" + date+ "/" + limit)
                        .then(function(response) {
                            $scope.companies = response.data;
    
                            // Check if DataTable is already initialized
                            if ($.fn.DataTable.isDataTable('#companiesTable')) {
                                // Destroy DataTable before reinitializing
                                $('#companiesTable').DataTable().destroy();
                            }
    
                            // Reinitialize DataTable after AngularJS updates the DOM
                            setTimeout(function() {
                                $('#companiesTable').DataTable();
                            }, 0);
                            
                        });
                };
    
    
        
      // ----------------------------------------------------------- advanced search----------------------------------------------------------------
            
  
    
        // Function to calculate Levenshtein distance
        function levenshtein(a, b) {
            var tmp, i, j, alen = a.length, blen = b.length, row, d = [];
            if (alen === 0) { return blen; }
            if (blen === 0) { return alen; }
            for (i = 0; i <= blen; i++) { d[i] = [i]; }
            for (j = 0; j <= alen; j++) { d[0][j] = j; }
            for (i = 1; i <= blen; i++) {
                row = d[i] = [i];
                for (j = 1; j <= alen; j++) {
                    tmp = (a[j - 1] === b[i - 1]) ? 0 : 1;
                    row[j] = Math.min(row[j - 1] + 1, Math.min(d[i - 1][j] + 1, d[i - 1][j - 1] + tmp));
                }
            }
            return row[alen];
        }
    
        // Function to get closest matches from dictionary
        function getClosestMatches(input, dictionary) {
            return dictionary.map(word => ({
                word,
                distance: levenshtein(input, word)
            })).sort((a, b) => a.distance - b.distance)
              .slice(0, 5)  // Limit to top 5 closest matches
              .map(item => item.word);
        }

        
    
    
    });
    </script>
  
  