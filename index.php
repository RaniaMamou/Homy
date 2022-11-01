<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo2.png">
    <title>HOMY</title>

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="images/logo1.png" alt=""></a>

    <div id="menu-bar" class="fas fa-home"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="index.php">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#menu">service</a></li>
            <li><a href="#popular">rent</a></li>
            <li><a href="#gallery">buy</a></li>
            <li><a href="#order">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-right">
        <h3>Find home find happiness</h3>
        <a href="#"><button class="btn">get started</button></a>
    </div>

    <div class="image" data-aos="fade-up">
        <img src="images/13.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image" data-aos="fade-right"></div>

    <div class="content" data-aos="fade-left">
        <h3>a word about us</h3>
        <p>The real estate valuation represents a real advantage for the seller and the buyer. It reinforces the attractiveness of a property for sale, while reassuring the buyer in the choice of an investment adapted to the reality of the real estate market.</p>
        
        <a href="about.html"><button class="btn">learn more</button></a>
    </div>

</section>

<!-- about section ends -->

<section class="menu" id="menu">

<h1 class="heading"> our best <span>services</span> </h1>

<ul class="list" data-aos="fade-down">
    <li class="btn" data-src="images/home2.jpg">Villa</li>
    <li class="btn active" data-src="images/Living Room2.jpg">Apartement</li>
    <li class="btn" data-src="images/oo.jpg">cottage</li>
</ul>

<div class="row" data-aos="fade-right">

    <div class="image" data-aos="fade-left">
        <img src="images/ff.jpg" id="menu-img" alt="">
    </div>

    <div class="content">
        <div class="info">
            <h3> <span>01.</span> we deal with you with all confidence </h3>
            <p>We always ready to help by providing the best service for you. We believe a good place to live can make your life better.</p>
        </div>
        <div class="info">
            <h3> <span>02.</span> Security of your data </h3>
            <p>Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that may come.</p>
        </div>
        <div class="info">
            <h3> <span>03.</span> Best prices on the market </h3>
            <p>Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that may come.</p>
        </div>
    </div>

</div>

</section>

<!-- popular section starts  -->

<section class="popular" id="popular">

<h1 class="heading"> most <span>rent</span> houses </h1>

<div class="box-container">

    <div class="box" data-aos="fade-right">
        <img src="images/photo1.jpg" alt="">
        <h3>House 1</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">25 000 DA</div>
        <!-- <a href="#"><button class="btn">add to cart</button></a> -->
    </div>

    <div class="box" data-aos="fade-left">
        <img src="images/home1.jpg" alt="">
        <h3>House 2</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">30 000 DA</div>
    </div>

    <div class="box" data-aos="fade-right">
        <img src="images/home3.jpg" alt="">
        <h3>House 3</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">20 000 DA</div>
    </div>

    <div class="box" data-aos="fade-left">
        <img src="images/home2.jpg" alt="">
        <h3>House 4</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">10 000 DA</div>
    </div>
    

</div>
<a href="rent.html" data-aos="fade-left"><button class="btn btn1">see more</button></a>

</section>

<!-- popular section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading"> Most <span>Buy</span> Houses </h1>

<div class="box-container">

    <div class="box" data-aos="fade-up">
        <img src="images/home1.jpg" alt="">
        <h3><div class="price">10 000 DA</div></h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="images/home2.jpg" alt="">
        <h3><div class="price">13 000 DA</div></h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="images/home3.jpg" alt="">
        <h3><div class="price">12 000 DA</div></h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="images/home4.jpg" alt="">
        <h3><div class="price">11 000 DA</div></h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="images/home5.jpg" alt="">
        <h3><div class="price">15 000 DA</div></h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="images/home6.jpg" alt="">
        <h3><div class="price">17 000 DA</div></h3>
    </div>

</div>
<a href="buy.html" data-aos="fade-left"><button class="btn btn1">See more</button></a>
</section>

<!-- gallery section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h1 class="heading"> Contact <span> US</span> </h1>

<div class="row">

    <div  id="success" style="display:none;"></div>
    <form  method="post" action="" data-aos="fade-right" id="contact">
        <input type="text" id="name" placeholder="your name" class="box" name="name">
        <input type="email" id="email" placeholder="your email" class="box" name="email">
        <input type="text" id="number" placeholder="your number" class="box" name="number">
        <input type="text" id="address" placeholder="your address" class="box" name="address">

        <input type="button"  name="save" class="btn"  id="butsave" value="send">
    </form>

    <div class="image" data-aos="fade-left">
        <img src="images/vv.jpg" alt="">
    </div>

</div>

</section>

<!-- order section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Boumesrdess, Algeria  </p>
            <p> <i class="fas fa-envelope"></i> homycompany@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-phone"></i> +111-222-333 </p>
        </div>

        <div class="box">
            <h3>branch location</h3>
            <a href="#">Boumerdess</a>
            <a href="#">Tizi-ouzou</a>
            <a href="#">Bouira</a>
            <a href="#">Ouargla</a>
            <a href="#">Tipaza</a>
        </div>

        <div class="box">
            <h3>quick links </h3>
            <a href="#">About</a>
            <a href="#">rent</a>
            <a href="#">Buy</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">instagram</a>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit">create by <a href="#">team work &#9400;</a> all rights reserved 2022 </h1>

</div>

<!-- footer section ends -->



<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

<!-- initializing aos  -->

<script>

    AOS.init({
        delay:400,
        duration:1000
    })


</script>

<!-- add data base -->
<script>
$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");
var name = $('#name').val();
var email = $('#email').val();
var number = $('#number').val();
var address = $('#address').val();
if(name!="" && email!="" && number!="" && address!=""){
	$.ajax({
		url: "contact.php",
		type: "POST",
		data: {
			name: name,
			email: email,
			number: number,
			address: address				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#butsave").removeAttr("disabled");
				$('#contact').find('input:text').val('');
				$("#success").show();
				$('#success').html('thanks for contacting us we will replay you soon !'); 						
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

</body>
</html>