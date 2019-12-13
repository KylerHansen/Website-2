<!DOCTTYPE html>
<html>
<head>

<title>Payment Summary</title>
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

text-decoration: none;
font-weight: bold;

}


.hideContent {
    display: none;
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
			
			
			
		
	
			<div class= "<?php if($_POST['cc_owner'] != 'personal'){echo 'hideContent';} ?>" id="CreditContent_ID" >
			<b>Card Type:</b> <?php echo $_POST['cc_type'];?>
			<br>
			<br>
			<b>Card Number:</b> <?php echo $_POST['cc_no'];?>
			<br>
			<br>
			<b>Expiration Date:</b> <?php echo $_POST['exp_month']; echo " 20"; echo $_POST['exp_year'];?>
			<br>
			<br>
			
			<?php 
				if(!empty($_POST['auth']))
					echo "&#10004; I understand that this purchase is non-refundable."
				
			;?> 
			<br>
			<br>
			&#10004; This is a <?php echo $_POST['cc_owner'];?> card.
			</p> 
		
		</div>
		
		
		<div class="<?php if($_POST['cc_owner'] == 'personal'){echo 'hideContent';} ?>"  id="BillContent_ID">
			<b>Name: </b><?php echo $_POST['name'];?>
			<br>
			<br>
			<b>Address:</b><?php echo $_POST['address'];?>
			<br>
			<br>
			<?php 
				if(!empty($_POST['auth']))
					echo "&#10004; I understand that this purchase is non-refundable."
				
			;?>
			<br>
			<br>
			&#10004; This is a <?php echo $_POST['cc_owner'];?> card.
			</p> 
		
		</div>
		
		
	</div>

<div class="backtohome">
<button><a href="index.html">Return to Homepage</a></button>
</div>











</body>
</html>