<!DOCTYPE html>
<html lang="en">
<!-- Include php files here for header and navigation -->
<?php include_once 'include/header.php'; ?>
<?php include_once 'include/navigation.php'; ?>
<!-- ============================================ -->
<!--       BODY OF THE 'myPage' PAGE              -->
<!-- ============================================ -->

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center">
  <video  id="video-background" preload muted autoplay loop>
    <source src="vid/farm.mp4" type="video/mp4">
    <source src="vid/farm.ogg" type="video/ogg">
  <h1>Farmable</h1>
  <p>We specialize in farming</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>We farm to provide our customers with the best quality fresh products, STRAIGHT OUTA GREEN fields of Farmable.</h4><br>
      <p>Farmable distributes locally grown farm products to area restaurants, commercial kitchens, cafeterias, and independent grocery stores.
      Our products include fruits, vegetables, cage-free eggs, herbs, cheese, grass-fed beef and lamb and pasture-raised chicken all raised without hormones or antibiotics.
      We partner with the very best farmers in Kuching Sarawak that utilize sustainable agriculture and ranching methods to produce the highest quality, most flavorful product found on the market.</p>
      <br>
      <!-- TEST STARTS HERE -->
      <button type="button" class="btn btn-default btn-lg" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <img src="img/cheflogo.png" alt="Avatar" class="center">
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <p>Not a member? <a href="#">Sign Up</a></p>
              <p>Forgot <a href="#">Password?</a></p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- JS for the modal -->
    <script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
    </script>
      <!-- TEST ENDS HERE -->
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-grain logo"></span>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values, Why Farmable?</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to provide high quality fresh grown products at the farms to restaurants.</h4><br>
      <p> The life of a farmer has never been easy, with long hours daily, be it plowing away at the soil or rearing the animals under the swealtering heat, praying for a bountiful harvest every season; life is not easy for them. With the advent of supermarkets and chemically enhanced vegetables and animal meat, the numbers of farmers are slowly dwindling. They are having difficulty sustaining their livelihood.
          What we aim to do is to create a website that allows the farmers to better connect with clients. The website will be a medium for chef's to order fresh produce straight from the farmer. These days, farmers are still reliant on the Farmer's market to sell their produce, but customers would rather the convenience of purchasing their groceries through supermarkets. While farmers can still sell their produce to supermarkets, they lose profits as the supermarkets would want those produce at a discounted rate.
          What we are offering is an alternative that maximizes the farmers profit margins, as we do not take percentage cuts but rather, a one-time payment. So in the long run, farmers would definitely have a better profit margin overall.</p>
          <h3>Taste & Nutrition</h3>
      <p>Because local products do not have to travel far to reach the consumer, the produce can be picked when it is ripest. When a fruit or vegetable is given the time to completely ripen, it fully develops and retains its vitamins and minerals, giving it a more vibrant flavor and maximizing the nutritional content.</p>
          <h3>Optimal Freshness</h3>
      <p>Our produce is generally harvested within 36 hours of delivery. They have a longer time to ripen “on the vine” and are ready to eat when delivered. They are not picked and processed and then spend a week or more traveling. Other non-local farms pick their produce when it’s still green or unripe. A common practice is to “gas” green tomatoes so they turn red. The result is a red tomato with the taste and texture of a green tomato.</p>
          <h3>Economy</h3>
      <p>Buying local keeps your money in the local economy. According to the London-based New Economics Foundation, a local farm’s income generated twice as much money for the local economy as a supermarket’s income in the same area.</p>
          <h3>Community</h3>
      <p>Each item that we carry has its own unique story. Buying locally means you are supporting the family farmers and ranchers that raised your food. Connecting to the sources of your food is a very meaningful part of enjoying your meals.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>OUR BELIEF</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Availability of products at your touch</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Treating our customers with love</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Delivery services for all our products within 5 hours of placing the order</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>100% Organic Products </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Certified by all Food authorities in Malaysia.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-eye-open logo-small"></span>
      <h4>VISIBILITY</h4>
      <p>We invite all of our premium customers to visit our farms, to have a look at our farm setup.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>PRODUCTS</h2><br>
  <h4>What we provide!</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/food_1.jpg" alt="Paris" width="400" height="300">
        <p><strong>A steak which surpases Nusret</strong></p>
        <p>Yes, It's our farm-bred Australian Beef medium rare steak</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/farm_2.jpg" alt="New York" width="400" height="300">
        <p><strong>Mooooooo!!!! Australian Bulls!</strong></p>
        <p>Highest quality bred cows</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/restaurant_1.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Door-Delivery-Service</strong></p>
        <p>Step up your game by providing your customers with our exquisite beef!</p>
      </div>
    </div>
  </div><br>

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>SILVER</h1>
        </div>
        <div class="panel-body">
          <p><strong>BENEFIT 1 - Products 1</strong> SHORT DESCRIPTION 1</p>
          <p><strong>BENEFIT 1 - Products 1</strong> SHORT DESCRIPTION 1</p>
          <p><strong>BENEFIT 1 - Products 1</strong> SHORT DESCRIPTION 1</p>
          <p><strong>BENEFIT 1 - Products 1</strong> SHORT DESCRIPTION 1</p>
          <p><strong>BENEFIT 1 - Products 1</strong> SHORT DESCRIPTION 1</p>
        </div>
        <div class="panel-footer">
          <h3>PRICE DETAILS 1</h3>
          <p>per month</p>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>GOLD</h1>
        </div>
        <div class="panel-body">
          <p><strong>BENEFIT 2 - Products 2</strong> SHORT DESCRIPTION 2</p>
          <p><strong>BENEFIT 2 - Products 2</strong> SHORT DESCRIPTION 2</p>
          <p><strong>BENEFIT 2 - Products 2</strong> SHORT DESCRIPTION 2</p>
          <p><strong>BENEFIT 2 - Products 2</strong> SHORT DESCRIPTION 2</p>
          <p><strong>BENEFIT 2 - Products 2</strong> SHORT DESCRIPTION 2</p>
        </div>
        <div class="panel-footer">
          <h3>PRICE DETAILS</h3>
          <p>per month</p>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>PLATINUM</h1>
        </div>
        <div class="panel-body">
          <p><strong>BENEFIT 3 - Products 3</strong> SHORT DESCRIPTION 3</p>
          <p><strong>BENEFIT 3 - Products 3</strong> SHORT DESCRIPTION 3</p>
          <p><strong>BENEFIT 3 - Products 3</strong> SHORT DESCRIPTION 3</p>
          <p><strong>BENEFIT 3 - Products 3</strong> SHORT DESCRIPTION 3</p>
          <p><strong>BENEFIT 3 - Products 3</strong> SHORT DESCRIPTION 3</p>
        </div>
        <div class="panel-footer">
          <h3>PRICE DETAILS</h3>
          <p>per month</p>
          <!-- WILL WORK ON IT LATER -->
          <a name="product" onClick="return testSignUp()" id="productP">
          <button class="btn btn-lg">Sign Up</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<form name="enquiry_form" action="database/enquiry_process.php" method="POST">
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Kuching,Sarawak, MY</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 100000000000</p>
      <p><span class="glyphicon glyphicon-envelope"></span> CustomerService@datax.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <!-- WORKING ON IT lol -->
        <div class="col-sm-4 form-group">
          <input class="form-control" id="field" name="subject" type="field" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Just need to get Google Maps API and edit it into the src link, it'll work -->
<iframe  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDz_1Rk4az74eXiXXKUyC3VHcsSA4q7Q6o&amp;q=Swinburne+University,Kuching+Sarawak;" allowfullscreen="" id="map">	</iframe>

<!-- Include javascript file here  -->
<script src="js/script.js" type="text/javascript"></script>
<!-- Include footer php here -->
<?php include_once 'include/footer.php';?>
</body>
<!-- ============================================ -->
<!--       BODY OF THE 'myPage' PAGE ENDS         -->
<!-- ============================================ -->

</html>
