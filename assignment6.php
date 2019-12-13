<!DOCTTYPE html>
<html>
<head>

<title>Assignment 6</title>
<style>

hr {
	border:1px solid black;
}

body{
background-color:purple;
}

.mainContent{
width:60%;
display: block;
border : 10px solid black;
padding:20px;
position:absolute;
left:200px;
top:50px;
background-color:white;

	
}

.backtohome button{

border:3px solid black;
padding:10px;
background-color:white;

}
.backtohome a{

text-decoration:none;
font-weight:bold;

}

</style>

</head>






<body>

	<div class = "mainContent">
	<h1>Payment Summary</h1>
	<hr>
		<p><b>Your payment has been submitted with the following data:</b>
		<br>
		<br>
		<b>Card Type:</b> <?php echo $_POST['cc_type'];?>
		<br>
		<br>
		<b>Card Number:</b> <?php echo $_POST['cc_no'];?>
		<br>
		<br>
		<b>Expiration Date:</b> <?php echo $_POST['exp_month'];?>
		<br>
		<br>
		
		<?php 
			if(!empty($_POST['auth']))
				echo "&#10004; This is an authorized purchase."
			
		;?> 
		<br>
		<br>
		&#10004; This is a <?php echo $_POST['cc_owner'];?> card.
		</p> 
	</div>

<div class="backtohome">
<button><a href="index.html">Return to Homepage</a></button>
</div>











</body>
</html>