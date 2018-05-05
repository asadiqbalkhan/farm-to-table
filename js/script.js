function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

// Session storage function starts here
function infoReq(sub){
  saveSubject(sub);
  window.location = "index.php";
}

function saveSubject(sub){
  sessionStorage.subject = sub;
}

function allocateSubject(){
  var field = document.getElementByID("field");
  var confirm = document.getElementByID("confirmSection");
    if(field){
      if(sessionStorage.subject != ""){
        field.value = "[Enquiry]: "+sessionStorage.subject;
      }
    }
}

//Data transfer with in the same page
function transfer(){
  var option=document.getElementByID('productP').value;
  sessionStorage.subject=option;
  allocateSubject();

}
window.onload=allocateSubject();
// Just working on JS functions and exploring
function testSignUp(){
  alert("Signed up successfully: "+document.getElementByID('productP'.value));
}
