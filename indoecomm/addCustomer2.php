<?php
	require 'db/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<title>Add Customer</title>
</head>
<body class="w3-green">
	<?php include 'elements/navbar.php'; ?>
	


<?php
error_reporting(0);
	switch ($_SESSION['login_access']) {
		case '1':
		case '2':
		case '3':
			// Start cases 1,2,3
			$error = "";
			try {
				if (isset($_POST['submit'])) {
					$first_name=$_POST['first_name'];
					$last_name=$_POST['last_name'];
					$contact_no=$_POST['contact_no'];
					$house_no=$_POST['house_no'];
					$street1=$_POST['street1'];
					$city=$_POST['city'];
					$district=$_POST['district'];
					$postal_code=$_POST['postal_code'];

					$insert = $db->query("INSERT INTO `tab_customer` (`cust_no`, `first_name`, `last_name`, `contact_no`, `house_no`, `street1`, `city`, `district`, `postal_code`) VALUES (NULL, '$first_name', '$last_name', '$contact_no', '$house_no', '$street1', '$city', '$district', '$postal_code')");		
					$error = "User $first_name $last_name added";
				}
			} catch (Exception $e) {
				
			}
			 
?>
			
			<header class="w3-display-container w3-content w3-hide-small" style="max-width:1700px">
			  <!-- <img class="" src="images/london2.jpg" alt="red" width="1700" height="800"> -->
			  <div class="w3-white" style="margin: 5% auto; width:65%">
			    
			    <!-- Tabs -->
			    <form action="" method="POST">
			    <div id="search" class="w3-container w3-white w3-padding-16 myLink" style="display: block;">
			      <h2>Add a new customer</h2>
			      <p>Fill the details of the customer</p>
			      <div class="w3-row-padding" style="margin:0 -16px;" id="name">
			        <div class="w3-half">
			          <label>Full Name</label>
			          <input class="w3-input w3-border" name="first_name" id="fname" type="text" placeholder="First Name" required>
			        </div>
			        <div class="w3-half">
			          <label>&nbsp;</label>
			          <input class="w3-input w3-border" name="last_name" id="lname" type="text" placeholder="Last Name" required>
			        </div>
			      </div>
			      <div class="w3-row-padding" style="margin:10px -16px;" id="address">
			        <div class="w3-col l2">
			          <label>Address</label>
			          <input class="w3-input w3-border" name="house_no" id="house" type="text" placeholder="House" required>
			        </div>
			        <div class="w3-col l7">
			          <label>&nbsp;</label>
			          <input class="w3-input w3-border" name="street1" id="street" type="text" placeholder="Street" required>
			        </div>
			        <div class="w3-col l3">
			          <label>&nbsp;</label>
			          <input class="w3-input w3-border" name="city" id="city" type="text" placeholder="City" required>
			        </div>
			        <div class="w3-col l3">
			          <label>&nbsp;</label>
			          <input class="w3-input w3-border" name="district" id="district" type="text" placeholder="District" required>
			        </div>
			        <div class="w3-col l2">
			          <label>&nbsp;</label>
			          <input class="w3-input w3-border" name="postal_code" id="zip" type="text" placeholder="Postal Code" required>
			        </div>
			      </div>
			      <div class="w3-row-padding" style="margin:0 -16px;" id="contact">
			        <div class="w3-third">
			          <label>Contact Number</label>
			          <input class="w3-input w3-border" name="contact_no" id="phone" type="text" placeholder="Contact number" pattern=".{10,10}" required title="Contact number must be 10 digits">
			        </div>
			      </div>
			      <p class="w3-margin-top"><input type="submit" name="submit" value="Add" class="w3-button w3-ripple w3-dark-grey"></p>
			      <span><?php echo '<i class="w3-text-red">', $error, '</i>'; ?></span>
			    </div>
			    </form>
			</header>

</body>
</html>				
			
<?php
			break;
			// End cases		
		default:
			// echo "<br><br>Access Denied";
?>
			<header class="w3-display-container w3-content" style="max-width:1700px">
				<!-- <img class="" src="images/london2.jpg" alt="red" width="1700" height="800"> -->
				<div class="w3-white" style="margin: 5% auto; width:65%">

				<!-- Tabs -->
				<form action="" method="POST">
				<div id="search" class="w3-container w3-white w3-padding-16 myLink" style="display: block;">
				  <h2>Access Denied</h2>
				  <p>Your account may not have sufficient access to view this page</p>
			</header>
<?php
			break;
	}
?>	