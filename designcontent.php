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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome to Design Tutorial
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	<img src = "pics/design.svg" class="pic center-block">
        <p>“Innovators have to be open. They have to be able to imagine things that others cannot and be willing to challenge their own preconceptions. They also need to be conscientious. An innovator who has brilliant ideas but lacks the discipline and persistence to carry them out is merely a dreamer … But crucially, innovators need to be disagreeable … They are people willing to take social risks—to do things that others might disapprove of.” –Malcolm Gladwell</p>
    
	<h3> Tutorials </h3>           
  <table class="table table-hover">
    <thead>
      <tr>
		    <th>Topics</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Typography in Graphic Design.</td>
        <td>
          <div class="col-md-7 col-md-offset-5">
                <button data-toggle="collapse" data-target="#sp" class="btn btn-primary">Available Service Providers</button>
                <div id="sp" class="collapse">
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
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">Submit a request</a></span>
                      
                      <span class="row col-md-12"><a href="#popup1" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">View Profile</a>
                      <div id="popup1" class="overlay">
	                       <div class="popup">Service Provider
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                             <p> Name: Ellen Camoy </p>
                             <p> Gender: F </p>
                             <p> Email: ellencamoy@yahoo.com </p>
                             <p> Telephone Number: 399658 </p>
			
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
        </td>
        
      </tr>
      <tr>
         <td>Web Design.</td>
        <td>
          <div class="col-md-7 col-md-offset-5">
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
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">Submit a request</a></span>
                      
                      <span class="row col-md-12"><a href="#popup1" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">View Profile</a>
                      <div id="popup1" class="overlay">
	                       <div class="popup">Service Provider
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                             <p> Name: Ellen Camoy </p>
                             <p> Gender: F </p>
                             <p> Email: ellencamoy@yahoo.com </p>
                             <p> Telephone Number: 399658 </p>
			
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
        </td>
        
      </tr>
      <tr>
         <td>Prototyping and Design.</td>
        <td>
          <div class="col-md-7 col-md-offset-5">
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
                      <span class="row col-md-12"><a href="" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">Submit a request</a></span>
                      
                      <span class="row col-md-12"><a href="#popup1" class="btn btn-primary btn-sm col-md-5" style="margin: 2px;">View Profile</a>
                      <div id="popup1" class="overlay">
	                       <div class="popup">Service Provider
                           <a class="close" href="#">&times;</a>
                           <div class="content">
                             <p> Name: Ellen Camoy </p>
                             <p> Gender: F </p>
                             <p> Email: ellencamoy@yahoo.com </p>
                             <p> Telephone Number: 399658 </p>
			
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
        </td>
      </tr>
    </tbody>
  </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->