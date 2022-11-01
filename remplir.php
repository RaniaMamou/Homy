<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			background:#EAEDF2;
		}
		#fupForm{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border-radius: 10px;
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			width:70%;
			align-items: center;
			margin-left:15%;
			padding: 17px;
		}
		h1{
			text-align:center;
        	color:hsl(228,15%,50%);
			padding:10px;
		}
		.btn{
        font-size: 1rem;
    padding:15px;
    border-radius: 2rem;
    width:20%;
    margin-top: 1rem;
    margin-left: 37%;
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

    
	#success{
		width:50%;
		margin:auto;
		padding:15px;
		text-align:center;
		font-size:25px;
		color:#fff;
	}
	</style>
</head>
<body>
	<h1><b>Give us your information</b></h1>
	<div class="w3-panel w3-pale-green w3-border" id="success" style="display:none;"></div>
    <form target="_blank" id="fupForm"  method="post">

        <p><label><i class="fa fa-calendar-check-o"></i> start living:</label></p>
        <input type="date" class="w3-input w3-border" id="start" placeholder="jj/mm/aaaa" name="start" required>


        <p><label><i class="fa fa-calendar-o"></i> end of living :</label></p>
        <input type="date" class="w3-input w3-border" id="end" placeholder="jj/mm/aaaa" name="end" required>


        <p><label><i class="fa fa-male"></i> Adults</label></p>
        <input type="number" class="w3-input w3-border" id="adults" placeholder="nember of adults" value="1" name="adults" min="1">


        <p><label><i class="fa fa-child"></i> Kids</label></p>
        <input type="number" class="w3-input w3-border" id="kids" placeholder="nember of kids" value="0" name="kids" min="0">

        <p><input type="button"  name="save" class="btn"  id="butsave" value="done"></p>
	</form>


<script>
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