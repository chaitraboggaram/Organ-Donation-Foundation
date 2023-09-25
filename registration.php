<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		small {color:red;}
		p {color:red;}
		h1 {color: #0000CD;}
	</style>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php';
	if (!empty($_POST)) {
			if(mysql_connect('localhost','root','')){
				if(mysql_select_db('organ_transplant'))	{
					$sql="INSERT INTO `registration`(`FirstName`, `LastName`, `DOB`, `Age`, `Sex`, `E-mail`, `BloodGroup`, `OrgansDonate`, `Address`, `HouseNo`, `City`, `State`, `Country`, `Pincode`, `Mobile`, `Phone`, `EmergencyPersonName`, `EmergencyEmail`, `EmergencyMobile`, `EmergencyPhone`, `Agreement`) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['age']."','".$_POST['sex']."','".$_POST['email']."','".$_POST['blood']."','".$_POST['organ']."','".$_POST['address']."','".$_POST['house']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."','".$_POST['pincode']."','".$_POST['mobile']."','".$_POST['phone']."','".$_POST['ename']."','".$_POST['eemail']."','".$_POST['emobile']."','".$_POST['ephone']."','".$_POST['agree']."')";
					if(mysql_query($sql)){
						
					}
				}
			}
			echo '<script type="text/javascript">';
			echo 'alert("You have registered successfully. Your ID is"+$_row["id"])';
			echo '</script>';
			header("Location: http://localhost/organdonar/main.php");	
		}
	
	?>
</head>
<body background="images/background.jpg">
<form method="POST">
<h1>GO AHEAD AND REGISTER!</h1>
<big><h3>Register to Pledge Your Organs</b></h3>
<br><br>Our mission is to spread awareness about Organ Donation in India. Once you register your wish on this website, you can download and print your donor card which will state your consent to having your organs and tissue made available for transplantation upon your death.
<br><br>Print and keep this card with you at all times. Do understand that this card is not a legal document, but an acknowledgement of your wish to donate your organs. Remember that your family and dear ones would be the ones to who will give the final consent.
<br><br>All information submitted will be kept completely confidential. We will not share, sell or otherwise compromise this information. Please note that the person you have nominated as an emergency contact will also receive an email informing him/her about your wish to donate. For more information, please read our Privacy Policyand Terms & Conditions
<br><br></big>
	<div class="col-sm-8 col-sm-offset-3" style="margin-top: 50px;" class="align">
		<div class="panel panel-primary">
			<h1> Registration</h1>
				<div class="panel-heading">
					<b>Register yourself save life</b>
				</div>
				<p> Contents marked * are manditary</p>
				<div class="panel-body">
					<div class="form-group">
						<label>First Name: <small>*</small></label>
						<input type="text" name="fname" id="fname" required><small><small> max 15 characters</small></small><br><br>
					</div>
					<div class="form-group">
						<label>Last Name: <small>*</small> </label>
						<input type="text" name="lname" id="lnameame" required/><small><small> max 15 characters</small></small><br><br>
					</div>
					<div class="form-group">
						<label>Date of Birth:<small>*</small> </label>
						<input type="text" name="dob" id="dob" size="8" required/><small><small> dd/mm/yy</small></small><br><br>
					</div>
					<div class="form-group">
						<label>Age:<small>*</small> </label>
						<input type="text" name="age" id="age" size="8" required/><br><br>
					</div>
					<div class="form-group">
						<label>Sex:<small>*</small> </label>
						Male<input type="radio" name="sex" value="male" id="sex"/>
						Female<input type="radio" name="sex" value="female" id="sex"/><br><br>
					</div>
					<div class="form-group">
						<label>E-mail:<small>*</small> </label>
						<input type="text" name="email" id="email" required/><br><br>
					</div>
					<div class="form-group">
						<label>Blood group:<small>*</small> </label>
						<select name="blood" id="blood">
							<option selected value="A+" name="A+" id="A+">A+</option>
							<option value="A-" name="A-" id="A-">A-</option>
							<option value="B+" name="B+" id="B+">B+</option>
							<option value="B-" name="B-" id="B-">B-</option>
							<option value="AB+" name="AB+" id="AB+">AB+</option>
							<option value="AB-" name="AB-" id="AB-">AB-</option>
							<option value="O+" name="O+" id="O+">O+</option>
							<option value="O-" name="O-" id="O-">O-</option>
							<option value="Others" name="Others" id="Others">Others</option>
						</select><br><br>
					</div>
					<div class="form-group">
						<label>Organs that I wish to donate upon my death:<small>*</small> </label><br>
						<input type="checkbox" name="organ" value="all" id="organ" />All organs<br>
						<input type="checkbox" name="organ" value="eye" id="organ"/>Cornea( Eyes)<br>
						<input type="checkbox" name="organ" value="kidney" id="organ"/>Kidney<br>
						<input type="checkbox" name="organ" value="heart" id="organ"/>Heart<br>
						<input type="checkbox" name="organ" value="lungs" id="organ"/>Lungs<br>
						<input type="checkbox" name="organ" value="liver" id="organ"/>Liver<br>
						<input type="checkbox" name="organ" value="pancreas" id="organ"/>Pancreas<br><br>
					</div>
					<div class="form-group">
						<label>Address:<small>*</small> </label>
						<textarea name="address" rows="5" cols="30" id="address">
						
						</textarea><br>
					</div>
					<div class="form-group">
						<br><label>House No:<small>*</small>    </label>
						<input type="text" name="house" id="house" required/><br><br>
					</div>
					<div class="form-group">
						<br><label>City:<small>*</small>    </label>
						<input type="text" name="city" id="city" required/><br><br>
					</div>
					<div class="form-group">
						<label>State:<small>*</small>   </label>
						<input type="text" name="state" id="state" required/><br><br>
					</div>
					<div class="form-group">
						<label>Country:<small>*</small> </label>
						<input type="text" name="country" id="country" required/><br><br>
					</div>
					<div class="form-group">
						<label>Pincode:<small>*</small> </label>
						<input type="text" name="pincode" id="pincode" required/><br><br>
					</div>
					<div class="form-group">
						<label>Mobile: <small>*</small>   </label>
						<input type="text" name="mobile" id="mobile" /><br><br>
					</div>
					<div class="form-group">
						<label>Phone:   </label>
						<input type="text" name="phone" id="phone"/><br><br>
					</div>
					<div class="form-group">
						<label>Emergency contact person:<small>*</small> </label>
						<input type="text" name="ename" id="ename" required/><br><br>
				 	</div>
				 	<div class="form-group">
						<label>E-mail: </label>
						<input type="text" name="eemail" id="eemail"/><br><br>
					</div>
					<div class="form-group">
						<label>Mobile:   </label>
						<input type="text" name="emobile" id="emobile" /><br><br>
					</div>
					<div class="form-group">
						<label>Phone:   </label>
						<input type="text" name="ephone" id="ephone" /><br><br>
					</div>
					<div class="form-group">	
						<input type="checkbox" name="agree" value="agreement"  id="agree" required/>
						<label>Yes, I wish to agree for organs donation after my death to save lives </label><br><br><br>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" valign="middle" name="btnsubmit" value="Submit" id="submit" onclick="click()" />
						<input type="reset" class="btn btn-primary" valign="middle" name="btnreset" value="Reset" id="reset"/><br>
					</div>
				</div>
				</div>
			</div>
		</form>
	</body>
</html>	