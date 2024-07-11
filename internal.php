<html lang="en">
<head>
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
    <style>
	.fo{
		background-color:azure;
		width:500px;
		height:470px;
		margin-left:110px;
		margin-top:30px;
		border-radius:40px;
		padding:20px;
		}
		.of{
		background-color:azure;
		width:500px;
		height:470px;
		margin-left:690px;
		margin-top:-470px;
		border-radius:40px;
		padding:20px;
		}
     button{
      width:250px;
     }
	 a{
	  color: rgb(147, 248, 236);
	  text-decoration:none;
	 }
	 body{
	 background-color:rgb(235, 236, 183);
	 }
   #buti{
		width:100px;
   }
		h3{
			color:red;
			text-align:center;
			font-size:30px;
		}
		#com{
		color:red;
		font-size:20px;
		}
    </style>
</head>
<body>
		<form   action="" method="POST" >
		<h3 style="text-align:center;color:red;padding:2px;"><b><i>On Duty Application</i></b></h3>
		<div class="fo">
		<label  class="form-label"><b><i>Name</i></b> </label>
		<input type="text"  class="form-control"  name="namei" style="width:400px;"><br>
	    <label  class="form-label"><b><i>Roll No </i></b></label>
		<input type="text"  class="form-control"  name="rn" style="width:400px;"><br>
		<label  class="form-label"><b><i>Department</i></b> </label>
		<select  name="ds" class="form-select" style="width:300px;">
			<option selected >Choose.....</option>
			<option name="ds" value="aies" >AIES</option>
			<option name="ds" value="cse" >CSE</option>
			<option name="ds" value="ece" >ECE</option>
			<option name="ds" value="eee" >EEE</option>
			<option name="ds" value="it" >IT</option>
			<option name="ds" value="mech" >MECH</option>
			<option name="ds" value="mct" >MCT</option>
		</select><br>
		<label  class="form-label"><b><i>Year</i> </b></label>
		<select  name="years" class="form-select" style="width:300px;">
			<option selected >Choose.....</option>
			<option name="years" value="1st year" >1st year</option>
			<option name="years" value="2nd year" >2nd year</option>
			<option name="years" value="3rd year" >3rd year</option>
			<option name="years" value="4th year" >4th year</option>
		</select><br></div>
		<div class="of">
		<label  class="form-label"><b></i>Type Of Works</i> </b></label><br>
		<input type="radio"  name="tow" value="NSS">&nbsp;<i>NSS</i>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio"  name="tow" value="Sports" >&nbsp;<i>Sports</i>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio"  name="tow" value="Events" >&nbsp;<i>Events</i>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio"  name="tow" value="Placement" >&nbsp;<i>Placement</i>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio"  name="tow" value="others" >&nbsp;<i>Others</i><br>
		<b id="com">*</b>&nbsp;<input type="text"  name="others"  placeholder="yes or no" style="width:80px;"><input type="text"  name="reason" placeholder="reason for onduty" style="width:300px;"><br><br>
		<label  class="form-label"><b><i>Starting date</b></i></label>
		<input type="datetime-local" name="st"  class="form-control"  style="width:400px;"><br>
		<label  class="form-label"><b><i>Ending date</b></i></label>
		<input type="datetime-local"  name="et"  class="form-control" style="width:400px;"><br>
		<label  class="form-label"><b></i>No.Of.Days</i> </b></label>
		<input type="number"  class="form-control"  name="nod" style="width:400px;"><br>
<?php 
	 if(isset($_POST['request']))
    {
	$name=$_POST['namei'];
	$department=$_POST['ds'];
	$rollno=$_POST['rn'];
	$years=$_POST['years'];
	$tow=$_POST['tow'];
	$sd=$_POST['st'];
	$ed=$_POST['et'];
	$nod=$_POST['nod'];
	$yn=$_POST['others'];
	$con=mysqli_connect("localhost:3306","root","","college");
	if($yn=='no'){
	$dis="INSERT INTO `internalod`(`name`, `rollno`, `department`, `years`, `type of works`, 
	`others`, `reason`, `startingdate`, `endingdate`, `no of days`, `tutor`, `hod`) VALUES 
	('$name','$rollno','$department','$years','$tow','$yn','none',
	'$sd','$ed','$nod','none','none')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Request sended succesfully');</script></i></b>";
	}
	else
	{
		echo "<script>alert('please fill the application properly');</script>";
	}
}
else if($yn=='yes'){
	$reason=$_POST['reason'];
	$din="INSERT INTO `internalod`( `name`, `rollno`, `department`, `years`, `type of works`, `others`, `reason`, `startingdate`, `endingdate`, `no of days`,`tutor`,`hod`) VALUES ('$name','$rollno',
	'$department','$years','$tow','$yn','$reason','$sd','$ed','$nod','none','none')";
	$r=mysqli_query($con,$din);
	if($r)
	{
		echo "<script>alert('Request sended succesfully');</script>";
	}
	else
	{
		echo "<script>alert('Please fill the application properly');</script>";
	}
}
}
?>
<a href="studentmain.php" id="gb"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buti">Go Back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-primary" id="buti" name="request">Request</button>
	  </form> </div>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	 
</body>
</html>