<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      $host = "localhost";
      $user = "root";
      $passwd = "";
      $db = "webtek-database-finals";
      $connect = mysqli_connect($host, $user, $passwd);
      mysqli_select_db($connect,$db); 
    ?>

    <!-- Main content -->
    <section class="content">
      <img src = "chef.jpg" class="pic center-block">
      <p>Cooking or cookery is the art, technology and craft of preparing food for consumption with or without the use of heat. Cooking techniques and ingredients vary widely across the world, from grilling food over an open fire to using electric stoves, to baking in various types of ovens, reflecting unique environmental, economic, and cultural traditions and trends. The ways or types of cooking also depend on the skill and type of training an individual cook has.</p>
      <p>There are very many methods of cooking, most of which have been known since antiquity. These include baking, roasting, frying, grilling, barbecuing, smoking, boiling, steaming and braising. A more recent innovation is microwaving. Various methods use differing levels of heat and moisture and vary in cooking time. The method chosen greatly affects the end result because some foods are more appropriate to some methods than others.</p>
        <h3> Tutorials </h3>           
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Topics</th>  
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>How to cook Chicken Adobo.</td>
            <td>
              <div class="row">
              <div class="col-md-7">
                <button data-toggle="collapse" data-target="#sp" class="btn btn-primary">Available Service Providers</button>
                <div id="sp" class="collapse">
                  <ul>
                    <?php
                    $query = mysqli_query($connect, "SELECT lname,fname, gender, tel_no, email_address FROM `service provider`");
                    
                    // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                    $row = mysqli_fetch_array($query);
                    
                      
                    $btag = '   
                    <div class="row">
                      <li class="col-md-2">
                    <span class="hidden-xs">';
                    $etag = '</span></li>
                      <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                         <div class="popup">
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                           
                                <h1>Request Successful</h1>
                                </div>
                              </div>
                          </div>
                      </span>
                        
                      <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                      <div id="popup-profile" class="overlay">
                         <div class="popup">Service Provider
                           <a class="close" href="#">&times;</a>
                           <div class="content">                  
                          </div>
                        </div>
                      </div>
                      </span>
                    </div>';
                    
                    if (mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_assoc($query)){
                        echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                      }
                    }
                    ?>
                  </ul>
                </div>
              </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>How to cook Beef Curry.</td>
            <td>
              <div class="row">
              <div class="col-md-7">
                <button data-toggle="collapse" data-target="#sp1" class="btn btn-primary">Available Service Providers</button>
                <div id="sp1" class="collapse">
                  <ul>
                    <?php
                    $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                    // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                    $row = mysqli_fetch_array($query);
                    $btag = '
                    <div class="row">
                      <li class="col-md-2">
                    <span class="hidden-xs">';
                    $etag = '</span></li>
                      <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                         <div class="popup">Request Successful
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                           
                        
                                </div>
                              </div>
                          </div>
                      </span>
                        
                      <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                      <div id="popup-profile" class="overlay">
                         <div class="popup">Service Provider
                           <a class="close" href="#">&times;</a>
                           <div class="content">                 
                          </div>
                        </div>
                      </div>
                      </span>
                    </div>';
                    if (mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_assoc($query)){
                        echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                        
                      }
                    }
                  ?>
                  </ul>
                </div>
              </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>How to cook Calamares.</td>
            <td>
              <div class="row">
              <div class="col-md-7">
                <button data-toggle="collapse" data-target="#sp2" class="btn btn-primary">Available Service Providers</button>
                <div id="sp2" class="collapse">
                  <ul>
                    <?php
                    $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                    // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                    $row = mysqli_fetch_array($query);
                    $btag = '
                    <div class="row">
                      <li class="col-md-2">
                    <span class="hidden-xs">';
                    $etag = '</span></li>
                      <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
	                       <div class="popup">Request Successful
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                           
		                    
                            		</div>
                            	</div>
                          </div>
                      </span>
                        
                        <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                      <div id="popup-profile" class="overlay">
	                       <div class="popup">Service Provider
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                            
                                                 
                            
		</div>
	</div>
</div>
                      </span>
                    </div>';
        
                    
                    if (mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_assoc($query)){
                        echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                      }
                    }
                  ?>
                  </ul>
                </div>
              </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>How to bake mini cakes
              <ol>
                <li>How to Make Cake Pops</li>
                <li>How to Make S'more Cupcakes</li>
                <li>How to Make Doughnuts</li>
                <li>How to Make Sponge Cake</li>
              </ol>
            </td>
            <td>
              <div class="row">
                <div class="col-md-7">
                  <button data-toggle="collapse" data-target="#sp3" class="btn btn-primary">Available Service Providers</button>
                  <div id="sp3" class="collapse">
                    <ul>
                      <!--<div class="row">
                        <li class="col-md-3">SP1</li>
                        <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                      </div>-->
                      <?php
                          $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                          // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                          $row = mysqli_fetch_array($query);
                          $btag = '
                          <div class="row">
                            <li class="col-md-2">
                          <span class="hidden-xs">';
                          $etag = '</span></li>
                            <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                               <div class="popup">Request Successful
                                 <a class="close" href="#">&times;</a>
                                 <div class="content">
                                 
                              
                                      </div>
                                    </div>
                                </div>
                            </span>
                              
                            <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                            <div id="popup-profile" class="overlay">
                              <div class="popup">Service Provider
                                  <a class="close" href="#">&times;</a>
                                <div class="content">
                                </div>
                              </div>
                            </div>
                            </span>
                          </div>';
              
                          
                          if (mysqli_num_rows($query) > 0){
                            while ($row = mysqli_fetch_assoc($query)){
                              echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                            }
                          }
                        ?>
                    </ul>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
             <td>How to decorate a cake with frosting and Cake Decorating Ideas and Tips
               <ol>
               <li>Create a "watercolored" cake using gel food coloring and a paintbrush.</li>
               <li>Sugared Rosemary and Citrus Cake</li>
               <li>Flower Vase Cake</li>
               <li>Edible Flowers Cake</li>
               <li>Buttercream frosting in a variety of colors using a decorating tip to completely cover a cake with stars. </li>
               </ol>
             </td>
            <td>
              <div class="row">
                <div class="col-md-7">
                  <button data-toggle="collapse" data-target="#sp4" class="btn btn-primary">Available Service Providers</button>
                  <div id="sp4" class="collapse">
                    <ul>
                      <!--<div class="row">
                        <li class="col-md-3">SP1</li>
                        <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                      </div>-->
                      <?php
                          $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                          // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                          $row = mysqli_fetch_array($query);
                          $btag = '
                          <div class="row">
                            <li class="col-md-2">
                          <span class="hidden-xs">';
                          $etag = '</span></li>
                            <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                              <div class="popup">Request Successful
                                <a class="close" href="#">&times;</a>
                                <div class="content">
                                 
                              
                                </div>
                              </div>
                              </div>
                            </span>
                              
                            <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                            <div id="popup-profile" class="overlay">
                              <div class="popup">Service Provider
                                <a class="close" href="#">&times;</a>
                                  <div class="content"> 

                                  </div>
                                </div>
                              </div>
                            </span>
                          </div>';
              
                          
                          if (mysqli_num_rows($query) > 0){
                            while ($row = mysqli_fetch_assoc($query)){
                              echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                            }
                          }
                        ?>
                    </ul>

                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
             <td>Ways How to cook Pasta Recipes
              <ol>
                 <li>Carbonara</li>
                 <li>Alfredo</li>
                 <li>Creamy, Light Macaroni and Cheese</li>
                 <li>Fettuccine Alfredo with Bacon</li>
                 <li>Mushroom Bolognese Pasta</li>
              </ol>
             </td>
            <td>
              <div class="row">
                <div class="col-md-7">
                  <button data-toggle="collapse" data-target="#sp5" class="btn btn-primary">Available Service Providers</button>
                  <div id="sp5" class="collapse">
                    <ul>
                      <!--<div class="row">
                        <li class="col-md-3">SP1</li>
                        <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                      </div>-->
                      <?php
                          $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                          // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                          $row = mysqli_fetch_array($query);
                          $btag = '
                          <div class="row">
                            <li class="col-md-2">
                          <span class="hidden-xs">';
                          $etag = '</span></li>
                            <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                               <div class="popup">Request Successful
                                 <a class="close" href="#">&times;</a>
                                 <div class="content">
                                 
                              
                                      </div>
                                    </div>
                                </div>
                            </span>
                              
                              <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                            <div id="popup-profile" class="overlay">
                               <div class="popup">Service Provider
                                <a class="close" href="#">&times;</a>
                                <div class="content">

                                </div>
                            </div>
                            </div>
                            </span>
                          </div>';
              
                          
                          if (mysqli_num_rows($query) > 0){
                            while ($row = mysqli_fetch_assoc($query)){
                              echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                            }
                          }
                        ?>
                    </ul>
                  </div>
                </div>
              </div>
            </td>
            </tr>
            <tr>
              <td>Ways How to cook Chicken
                <ol> 
                  <li>Roasted and Grilled Chicken</li>
                  <li>Braised and Stewed Chicken</li>
                  <li>Slow Cooker Chicken</li>
                  <li>Stovetop Chicken</li>
                </ol>
              </td>
            <td>
              <div class="row">
                <div class="col-md-7">
                  <button data-toggle="collapse" data-target="#sp6" class="btn btn-primary">Available Service Providers</button>
                  <div id="sp6" class="collapse">
                    <ul>
                      <!--<div class="row">
                        <li class="col-md-3">SP1</li>
                        <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                      </div>-->
                      <?php
                          $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                          // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                          $row = mysqli_fetch_array($query);
                          $btag = '
                          <div class="row">
                            <li class="col-md-2">
                          <span class="hidden-xs">';
                          $etag = '</span></li>
                            <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                               <div class="popup">Request Successful
                                 <a class="close" href="#">&times;</a>
                                 <div class="content">
                                 
                              
                                      </div>
                                    </div>
                                </div>
                            </span>
                              
                              <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                            <div id="popup-profile" class="overlay">
                                <div class="popup">Service Provider
                                  <a class="close" href="#">&times;</a>
                                  <div class="content">  

                                  </div>
                                </div>
                            </div>
                            </span>
                          </div>';
              
                          
                          if (mysqli_num_rows($query) > 0){
                            while ($row = mysqli_fetch_assoc($query)){
                              echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                            }
                          }
                        ?>
                    </ul>
                  </div>
                </div>
              </div>
            </td>
            </tr>
            <tr>
              <td>Ways How to cook Filipino Recipes
                <ol>
                  <li>Chicken/Pork Adobo</li>
                  <li>Chopseuy</li>
                  <li>Pork Binagoongan</li>
                  <li>Sinigang na ulo ng Salmon</li>
                  <li>Baked Tahong</li>
                  <li>Chili Crab Recipe</li>
                  <li>Beef Caldereta</li>
                  <li>Bulalo</li>
                  <li>Bicol express</li>
                </ol>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-7">
                    <button data-toggle="collapse" data-target="#sp7" class="btn btn-primary">Available Service Providers</button>
                    <div id="sp7" class="collapse">
                      <ul>
                        <!--<div class="row">
                          <li class="col-md-3">SP1</li>
                          <a href="" class="btn btn-primary btn-sm col-md-3">Submit a request</a>
                        </div>-->
                        <?php
                            $query = mysqli_query($connect, "SELECT lname,fname FROM `service provider`");
                            // WHERE sp_id NOT IN (SELECT sp_id FROM arrangement)
                            $row = mysqli_fetch_array($query);
                            $btag = '
                            <div class="row">
                              <li class="col-md-2">
                            <span class="hidden-xs">';
                            $etag = '</span></li>
                              <span class="row col-md-12"><a href="#popup-request" class="btn btn-primary btn-sm" style="margin: 2px;">Submit a request</a>   <div id="popup-request" class="overlay">
                                 <div class="popup">Request Successful
                                   <a class="close" href="#">&times;</a>
                                   <div class="content">
                                   
                                
                                        </div>
                                      </div>
                                  </div>
                              </span>
                                
                              <span class="row col-md-12"><a href="#popup-profile" class="btn btn-primary btn-sm" style="margin: 2px;">View Profile</a>
                                <div id="popup-profile" class="overlay">
                                  <div class="popup">Service Provider
                                    <a class="close" href="#">&times;</a>
                                  <div class="content">

                                  </div>
                                  </div>
                              </div>
                              </span>
                            </div>';
                
                            
                            if (mysqli_num_rows($query) > 0){
                              while ($row = mysqli_fetch_assoc($query)){
                                echo $btag . $row["fname"] . " " . $row["lname"] . $etag . "<br>";
                              }
                            }
                          ?>
                      </ul>
                    </div>
                  </div>
              </div>
            </td>
             </tr>
        </tbody>
      </table>


    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  </div>