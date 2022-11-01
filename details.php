<!DOCTYPE html>
<html>
<head>
    <title>confirme page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
    .mySlides {display: none}
    .content{
        background: rgba( 202, 202, 202, 0.3 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 3px );
        -webkit-backdrop-filter: blur( 3px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        
    }
    .btn{
        font-size: 1rem;
    padding:15px;
    border-radius: 2rem;
    width:20%;
    margin-top: 1rem;
    margin-left: 50%;
    background:none;
    color:#333;
    cursor: pointer;
    border:.2rem solid hsl(228,15%,50%);
    }
    .btn:hover{
        background:hsl(228,15%,50%);
    color: #fff;
    font-size: 20px;
    transition: .3s;
    }

    h2,h3{
        text-align:center;
        color:hsl(228,15%,50%);
    }
    </style>
</head>
<body>

        

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main content" style="margin:5rem">

        

    <!-- Slideshow Header -->
    <div class="w3-container" id="apartment">
        <h2><b>The Apartment</b></h2>
        <div class="w3-display-container mySlides">
        <img src="images/Living Room5.jpg" width="500px" height="500px" style="margin-left:20rem;">
        <div class="w3-display-bottomleft w3-container w3-black">
            <p>Living Room</p>
        </div>
        </div>
        <div class="w3-display-container mySlides">
        <img src="images/Dining Room2.jpg" width="500px" height="500px" style="margin-left:20rem;">
        <div class="w3-display-bottomleft w3-container w3-black">
            <p>Dining Room</p>
        </div>
        </div>
        <div class="w3-display-container mySlides">
        <img src="images/23.jpg" width="500px" height="500px" style="margin-left:20rem;">
        <div class="w3-display-bottomleft w3-container w3-black">
            <p>Bedroom</p>
        </div>
        </div>
        <div class="w3-display-container mySlides">
        <img src="images/15.jpg" width="500px" height="500px" style="margin-left:20rem;">
        <div class="w3-display-bottomleft w3-container w3-black">
            <p>bathroom</p>
        </div>
        </div>
    </div>
    <div class="w3-row-padding w3-section">
            <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="images/Living Room5.jpg" width="280px" height="280px" style="cursor:pointer" onclick="currentDiv(1)" title="Living room">
            </div>
            <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="images/Dining Room2.jpg" width="280px" height="280px" style="cursor:pointer" onclick="currentDiv(2)" title="Dining room">
            </div>
            <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="images/23.jpg" width="280px" height="280px" style="cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
            </div>
            <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="images/15.jpg" width="280px" height="280px" style="cursor:pointer" onclick="currentDiv(4)" title="Second Living Room">
            </div>
        </div>

        <div class="w3-container">
            <h3><strong>The space</strong></h3>
            <div class="w3-row w3-large" style="margin-left:8rem">
                <div class="w3-col s6">
                    <p><i class="fa fa-fw fa-male"></i> Max people: 4</p>
                    <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 2</p>
                </div>
                <div class="w3-col s6">
                    <p><i class="fa fa-fw fa-clock-o"></i> Check : 3:00PM - 8:00PM</p>
                    <p><i class="fa fa-fw fa-clock-o"></i>Bedrooms: 2 </p>
                </div>
            </div>
        <hr>
        
        <h3><strong>Amenities</strong></h3>
        <div class="w3-row w3-large" style="margin-left:8rem">
        <div class="w3-col s6">
            <p><i class="fa fa-fw fa-shower"></i> Shower</p>
            <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
            <p><i class="fa fa-fw fa-tv"></i> TV</p>
        </div>
        <div class="w3-col s6">
            <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
            <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
            <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
        </div>
        </div>
        <hr>
        
        <h3><strong>Extra Info</strong></h3>
        <div style="margin-left:5rem;margin-right:5rem;">
        <p>Our apartment is really clean and we like to keep it that way. Enjoy the lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>

        
        <hr>
        
        <h3><strong>Rules</strong></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        
        </div>  
        <p><a href="remplir.php"><button class="btn"  style="margin-left:25rem;">continue</button></a></p>
    </div>
    <hr>
  
  
        <!-- End page content -->
    </div>


    
    </div>
  </div>
</div>

<script>

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
  
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// add to data base rent and buy form

$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");
var start = $('#start').val();
var end = $('#end').val();
var adults = $('#adults').val();
var kids = $('#kids').val();
if(start!="" && end!="" && adults!="" && kids!=""){
	$.ajax({
		url: "fonction.php",
		type: "POST",
		data: {
			start: start,
			end: end,
			adults: adults,
			kids: kids				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
});
</script>

</body>
</html>
