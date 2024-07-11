<html lang="en">
<head>
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
    <style>
	.fo{
		background-color:azure;
		width:450px;
		height:585px;
		margin-left:130px;
		margin-top:30px;
		border-radius:40px;
		padding:20px;
		}
		.of{
		background-color:azure;
		width:450px;
		height:585px;
		margin-left:730px;
		margin-top:-580px;
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
		<h3 style="text-align:center;color:red;padding:2px;"><b><i>Faculity Details List</i></b></h3>
		<div class="fo">
		<label  class="form-label"><b><i>Facultiy ID</i></b> </label>
		<input type="text"  class="form-control"  name="fi" style="width:400px;"><br>
		<label  class="form-label"><b></i>Name</i> </b></label>
		<input type="text"  class="form-control"  name="namei" style="width:400px;"><br>
		<label  class="form-label"><b></i>Date Of Birth</i> </b></label>
		<input type="date"  class="form-control"  name="dob" style="width:400px;"><br>
	    <label  class="form-label"><b><i>Gender</i></b></label><br>
		<input type="radio"    name="gender" value="Male" >&nbsp;Male&nbsp;&nbsp;
		<input type="radio"   name="gender" value="Female">&nbsp;Female<br><br>
		<label  class="form-label"><b><i>Blood group</i></b> </label>
		<input type="text"  class="form-control"  name="bg" style="width:400px;"><br>
		<label  class="form-label"><b><i>Education qualification</i></b> </label>
		<input type="text"  class="form-control"  name="education" style="width:400px;"><br>
		</div>
		<div class="of">
		<label  class="form-label"><b><i>Branch</i> </b></label>
		<input type="text"  class="form-control"  name="bad" style="width:400px;"><br>
		<label  class="form-label"><b></i>Address</i> </b></label>
		<textarea class="form-control"  id="exampleFormControlTextarea1"  name="addr" rows="3" style="width:400px;resize:none;"></textarea><br>
		<label  class="form-label"><b></i>Mobile No</i> </b></label>
		<input type="number"  class="form-control"  name="mon" style="width:400px;"><br>
		<label  class="form-label"><b></i>login password</i> </b></label>
		<input type="number"  class="form-control"  name="smon" style="width:400px;"><br>
		<label  class="form-label"><b></i>Appointed AS Tutor</i> </b></label><br>
		<select  name="qa" style="width:200px;">
			<option selected >Choose.....</option>
			<option name="qa" value="yes" >Yes</option>
			<option name="qa" value="no" >No</option>
		</select>
 		<select  name="ds" style="width:200px;">
			<option selected >Choose.....</option>
			<option name="ds" value="1st year" >First Year</option>
			<option name="ds" value="2nd year" >Second Year</option>
			<option name="ds" value="3rd year" >Third Year</option>
			<option name="ds" value="4th year" >Fourth Year</option>
			<option name="ds" value="4th year" >Nothing</option>
		</select><br>
		
<?php 
	 if(isset($_POST['insert']))
    {
	$faculityid=$_POST['fi'];
	$name=$_POST['namei'];
	$dateofbirth=$_POST['dob'];
	$gender=$_POST['gender'];
	$bloodgroup=$_POST['bg'];
	$educationalqual=$_POST['education'];
	$branch=$_POST['bad'];
	$address=$_POST['addr'];
	$Mobileno=$_POST['mon'];
	$secondMobileno=$_POST['smon'];
	$qa=$_POST['qa'];
	$year=$_POST['ds'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$dis="INSERT INTO `faculitydetails`(`faculity id`, `name`, `date of birth`, 
	`gender`, `blood group`, `education`, `branch`, `address`, `mobile no`, `login password`,
	`appointed as`, `year`) VALUES ('$faculityid','$name','$dateofbirth','$gender','$bloodgroup',
	'$educationalqual','$branch','$address','$Mobileno','$secondMobileno','$qa','$year')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('details added successfully')</script>";
	}
	else{
		echo "<script>alert('please enter all details')</script>";
	}
}
?><br>
<a href="Hodmain.php" id="gb"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buti">Go Back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-primary" id="buti" name="insert">Add</button>
	  </form> </div>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	 
</body>
</html>