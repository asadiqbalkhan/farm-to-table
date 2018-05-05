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
  <!-- <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">C</button>
      </div>
    </div>
  </form> -->
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>We farm to provide our customers with the best quality fresh products, STRAIGHT OUTA GREEN fields of Farmable.</h4><br>
      <p>Farmable was established in 2018, integrating technology with organic cultivated products. More details to be included later</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-grain logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to provide high quality fresh grown products at the farms to restaurants.</h4><br>
      <p> The life of a farmer has never been easy, with long hours daily, be it plowing away at the soil or rearing the animals under the swealtering heat, praying for a bountiful harvest every season; life is not easy for them. With the advent of supermarkets and chemically enhanced vegetables and animal meat, the numbers of farmers are slowly dwindling. They are having difficulty sustaining their livelihood.

          What we aim to do is to create a website that allows the farmers to better connect with clients. The website will be a medium for chef's to order fresh produce straight from the farmer. These days, farmers are still reliant on the Farmer's market to sell their produce, but customers would rather the convenience of purchasing their groceries through supermarkets. While farmers can still sell their produce to supermarkets, they lose profits as the supermarkets would want those produce at a discounted rate.

          What we are offering is an alternative that maximizes the farmers profit margins, as we do not take percentage cuts but rather, a one-time payment. So in the long run, farmers would definitely have a better profit margin overall.</p>
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
      <h4 style="color:#303030;">VISIBILITY</h4>
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
          <h4>per month</h4>
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
          <h4>per month</h4>
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
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
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
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
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

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgBqCQXrAo2gFdUmpWfkDzRD66cHhmu78&callback=initMap">
    </script>
<!-- Include javascript file here  -->
<script src="js/script.js" type="text/javascript"></script>
<!-- Include footer php here -->
<?php include_once 'include/footer.php';?>
</body>
<!-- ============================================ -->
<!--       BODY OF THE 'myPage' PAGE ENDS         -->
<!-- ============================================ -->

</html>
