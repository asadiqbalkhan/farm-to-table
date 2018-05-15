<!-- ====================================== -->
<!--       NAVIGATION LOGGED IN PHP FILE    -->
<!-- ====================================== -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Farmable</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#services">OUR BELIEF</a></li>
        <li><a href="#portfolio">PRODUCTS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT US</a></li>
        <li><a href="#"  id="myBtn"><span class="glyphicon glyphicon-log-in"></span>LOG IN</a></li>
          <!-- User logged in session starts here -->
        <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span> 
                      <strong>Logged In</strong>
                      <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <div class="navbar-login">
                              <div class="row">
                                  <!-- <div class="col-lg-4">
                                      <p class="text-center">
                                          <span class="glyphicon glyphicon-user icon-size"></span>
                                      </p>
                                  </div> -->
                                  <div class="col-lg-12">
                                      <p class="text-center"><strong>User</strong></p>
                                      <!-- Only show admin panel if UserType is admin STARTS HERE -->
                                      <p class="text-center">
                                          <a href="\farm\admin\index.php" class="btn btn-info btn-block btn-sm">Admin Panel</a>
                                      </p>
                                      <!-- Only show admin panel if UserType is admin ENDS HERE -->
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <div class="navbar-login navbar-login-session">
                              <div class="row">
                                  <div class="col-lg-12">
                                    <!-- Send user back to index.php page if they loggout from the session -->
                                      <p>
                                          <a href="index.php" class="btn btn-danger btn-block" onClick="Logout()">Logout</a>
                                      </p>
                                      <script>
                                      function Logout(){
                                        alert("You are now logged out of Farmable!\n We hope to see you again soon!");
                                      }
                                      </script>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                <!-- User logged in session ends here -->
            </ul>
    </div>
  </div>
</nav>
