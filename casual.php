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
		height:440px;
		margin-left:110px;
		margin-top:30px;
		border-radius:40px;
		padding:20px;
		}
		.of{
		background-color:azure;
		width:500px;
		height:440px;
		margin-left:690px;
		margin-top:-440px;
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
		
    </style>
</head>
<body>
		<form   action="" method="POST" >
		<h3 style="text-align:center;color:red;padding:2px;"><b><i>APPLYING FOR CASUAL<br> LEAVE</i></b></h3>
		<div class="fo">
		<label  class="form-label"><b><i>Name</i></b> </label>
		<input type="text"  class="form-control"  name="namei" style="width:400px;"><br>
	    <label  class="form-label"><b><i>Roll No </i></b></label>
		<input type="text"  class="form-control"  name="rn" style="width:400px;"><br>
		<label  class="form-label"><b><i>Department</i></b> </label>
		<select  name="ds" class="form-select" style="width:300px;">
			<option selected >Choose.....</option>
			<option value="aies" >AIES</option>
			<option value="cse" >CSE</option>
			<option value="ece" >ECE</option>
			<option value="eee" >EEE</option>
			<option value="it" >IT</option>
			<option value="mech" >MECH</option>
			<option value="mct" >MCT</option>
		</select><br>
		<label  class="form-label"><b><i>Year</i> </b></label>
		<select  name="ys" class="form-select" style="width:300px;">
			<option selected >Choose.....</option>
			<option value="1st year" >1st year</option>
			<option value="2nd year" >2nd year</option>
			<option value="3rd year" >3rd year</option>
			<option value="4th year" >4th year</option>
		</select><br></div>
		<div class="of">
		<label  class="form-label"><b></i>Type Of Issues</i> </b></label>
		<input type="text"  class="form-control"  name="toi" style="width:400px;"><br>
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
	$rollno=$_POST['rn'];
	$dept=$_POST['ds'];
	$year=$_POST['ys'];
	$toi=$_POST['toi'];
	$sd=$_POST['st'];
	$ed=$_POST['et'];
	$nod=$_POST['nod'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$dis="INSERT INTO `casualleave`( `name`, `rollno`, `department`, `year`, `typeofissues`, `startingdate`, `endingdate`, `noofdays`,`tutor`,`hod`) VALUES
	('$name','$rollno','$dept','$year','$toi','$sd','$ed','$nod','none','none')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Your request sended successfully')</script>";
	}
	else
	{
		echo "<script>alert('Please fill all the details')</script>";
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