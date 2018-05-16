<!DOCTYPE html>
<html lang="en">
<!-- Include php files here for header and navigation -->
<?php include_once 'include/header.php'; ?>
<?php include_once 'include/nav_register.php'; ?>
<!-- ============================================ -->
<!--       BODY OF THE 'myPage' PAGE              -->
<!-- ============================================ -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="jumbotron text-center">
  <video  id="video-background" preload muted autoplay loop>
    <source src="vid/farm.mp4" type="video/mp4">
    <source src="vid/farm.ogg" type="video/ogg">
  <h1>Farmable - Sign up</h1>
  <p>We specialize in farming</p>
</div>
  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>Sign Up</h2><br>
        <br>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-grey">
        <div class="row">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-user logo slideanim"></span>
            <p>Purchasing and providing organic products for your family from <strong>Farmable</strong> is not only a lifestyle!, Sign up today and be a part of our family.</p>
          </div>
        <div class="col-sm-8">
          <form class="form-horizontal" action="reg.php" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
            </div>
            <!-- Username field -->
          <div class="form-group">
                <label class="control-label col-sm-2" for="email">Username:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username"
                  name="username" placeholder="Enter your user name">
                </div>
          </div>
          <!-- Password field -->
          <div class="form-group">
              <label class="control-label col-sm-2" for="email">Password:</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="****************">
                </div>
              </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <!-- <div class="checkbox">
              <label><input type="checkbox">Remember me</label>
            </div> -->
          </div>
        </div>
        <!-- Submit field -->
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Include javascript file here  -->
<script src="js/script.js" type="text/javascript"></script>
<!-- Include footer php here -->
<?php include_once 'include/footer.php';?>
</body>
<!-- ============================================ -->
<!--       BODY OF THE 'myPage' PAGE ENDS         -->
<!-- ============================================ -->

</html>
