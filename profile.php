<?php include ("headernavbar.php"); ?>
<?php include ("mainsidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <h1 >Profile</h1>
    </section>

    <section class="content">
      <form role="form" method="post" name="profile" action="update-profile.php">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="fName">First Name</label>
              <input type="text" class="form-control" name="fName" placeholder="First name">
            </div>
            <div class="col-md-6">
              <label for="lName">Last Name</label>
              <input type="text" class="form-control" name="lName" placeholder="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="inputAddr">Address</label>
              <input type="text" class="form-control" name="inputAddr" placeholder="Address">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="telno">Telephone Number</label>
              <input type="text" class="form-control" name="telno" placeholder="Telephone Number">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> 
              <label for="bday">Birthday</label>
              <input type="date" class="form-control" name="bday" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-4"> 
              <label for="gender">Gender</label>
              <div class="row">
                
                <form>
                <div class="col-md-6">
                  <input type="radio" name="gender" value="Male">Male
                </div>
                <div class="col-md-6">
                  <input type="radio" name="gender" value="Female">Female
                </div>
                
              </form>
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="uname">Username</label>
              <input type="text" class="form-control" name="uname" placeholder="Username">
            </div>
            <div class="col-md-6">
              <label for="pw">Password</label>
              <input type="password" class="form-control" name="pw" placeholder="Password">
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php include ("mainfooter.php"); ?>
