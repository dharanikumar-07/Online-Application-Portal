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
		height:500px;
		margin-left:110px;
		margin-top:30px;
		border-radius:40px;
		padding:20px;
		}
		.of{
		background-color:azure;
		width:500px;
		height:500px;
		margin-left:690px;
		margin-top:-500px;
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
		<form   action="" method="POST" enctype="multipart/form-data">
		<h3 style="text-align:center;color:red;padding:2px;"><b><i>APPLYING FOR MEDICAL <br> LEAVE</i></b></h3>
		<div class="fo">
		<label  class="form-label"><b><i>Name</i></b> </label>
		<input type="text"  class="form-control"  name="namei" style="width:400px;"><br>
	    <label  class="form-label"><b><i>Roll No </i></b></label>
		<input type="text"  class="form-control"  name="rn" style="width:400px;"><br>
		<label  class="form-label"><b><i>Department</i></b> </label>
		<select  name="ds" class="form-select" style="width:300px;">
			<option selected >Choose.....</option>
			<option  name="ds" value="aies" >AIES</option>
			<option name="ds" value="cse" >CSE</option>
			<option name="ds" value="ece" >ECE</option>
			<option name="ds" value="eee" >EEE</option>
			<option name="ds" value="it" >IT</option>
			<option name="ds" value="mech" >MECH</option>
			<option name="ds" value="mct" >MCT</option>
		</select><br>
		<label  class="form-label"><b><i>Year</i> </b></label>
		<select  name="ys" class="form-select" style="width:300px;">
			<option selected >Choose.....</option>
			<option name="ys" value="1st year" >1st year</option>
			<option name="ys" value="2nd year" >2nd year</option>
			<option name="ys" value="3rd year" >3rd year</option>
			<option name="ys" value="4th year" >4th year</option>
		</select><br>
		<label  class="form-label"><b></i>Type Of Issues</i> </b></label>
		<input type="text"  class="form-control"  name="toi" style="width:400px;"><br></div>
		<div class="of">
		<label  class="form-label"><b><i>Certificate </i></b></label>
		<input type="file"  class="form-control"  name="file" style="width:400px;"><br>
		<label  class="form-label"><b><i>Starting date</b></i></label>
		<input type="datetime-local" name="st"  class="form-control"  style="width:400px;"><br>
		<label  class="form-label"><b><i>Ending date</b></i></label>
		<input type="datetime-local"  name="et"  class="form-control" style="width:400px;"><br>
		<label  class="form-label"><b></i>No.Of.Days</i> </b></label>
		<input type="number"  class="form-control"  name="nod" style="width:400px;"><br>
<?php 
	 if(isset($_POST['insert']))
    {
	$name=$_POST['namei'];
	$rollno=$_POST['rn'];
	$department=$_POST['ds'];
	$year=$_POST['ys'];
	$typeOfissues=$_POST['toi'];
	$startingdate=$_POST['st'];
	$endingdate=$_POST['et'];
	$noofdays=$_POST['nod'];
	$fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;
	$con=mysqli_connect("localhost:3306","root","","college");
	$dis="INSERT INTO `medicalleave`( `name`, `rollno`, `department`, `year`, `typeofissues`, `certificate`, 
	`startingdate`, `endingdate`, `noofdays`,`tutor`,`hod` ) VALUES ('$name','$rollno','$department',
	'$year','$typeOfissues','$fileName','$startingdate','$endingdate','$noofdays','none','none')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		move_uploaded_file($fileTmpName,$path);
		echo "<script>alert('Your request sended successfully')</script>";
	}
	else
	{
		echo "<script>alert('Please fill all the details')</script>";
	}
}
?><br>
<a href="studentmain.php" id="gb"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buti">Go Back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-primary" id="buti" name="insert">Request</button>
	  </form> </div>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	 
</body>
</html>