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
		height:570px;
		margin-left:10px;
		margin-top:30px;
		border-radius:40px;
		padding:20px;
		}
		.fu{
		background-color:azure;
		width:450px;
		height:570px;
		margin-left:930px;
		margin-top:-570px;
		border-radius:40px;
		padding:20px;
		}
		.of{
		background-color:azure;
		width:450px;
		height:570px;
		margin-left:470px;
		margin-top:-570px;
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
		<h3 style="text-align:center;color:red;padding:2px;"><b><i>Student Details List</i></b></h3>
		<div class="fo">
		<label  class="form-label"><b><i>Roll No</i></b> </label>
		<input type="text"  class="form-control"  name="rn" style="width:400px;"><br>
		<label  class="form-label"><b></i>Name</i> </b></label>
		<input type="text"  class="form-control"  name="namei" style="width:400px;"><br>
	    <label  class="form-label"><b><i>Gender</i></b></label><br>
		<input type="radio"    name="gender" value="Male" >&nbsp;Male&nbsp;&nbsp;
		<input type="radio"   name="gender" value="Female">&nbsp;Female<br><br>
		<label  class="form-label"><b><i>blood group</i></b> </label>
		<input type="text"  class="form-control"  name="bg" style="width:400px;"><br>
		<label  class="form-label"><b><i>branch and degree</i> </b></label>
		<input type="text"  class="form-control"  name="bad" style="width:400px;"><br>
		<label  class="form-label"><b></i>Father's Name</i> </b></label>
		<input type="text"  class="form-control"  name="fn" style="width:400px;"><br>
		</div>
		<div class="of">
		<label  class="form-label"><b></i>Mother's Name</i> </b></label>
		<input type="text"  class="form-control"  name="mn" style="width:400px;"><br>
		<label  class="form-label"><b></i>Annual Income</i> </b></label>
		<input type="number"  class="form-control"  name="mai" style="width:400px;"><br>
		<label  class="form-label"><b></i>Mother Tongue</i> </b></label>
		<input type="text"  class="form-control"  name="mt" style="width:400px;"><br>
		<label  class="form-label"><b></i>Religion</i> </b></label>
		<input type="text"  class="form-control"  name="r" style="width:400px;"><br>
		<label  class="form-label"><b></i>Address</i> </b></label>
		<textarea class="form-control"  id="exampleFormControlTextarea1"  name="nat" rows="3" style="width:400px;resize:none;"></textarea><br>
		</div>
		<div class="fu">
		<label  class="form-label"><b></i>Parent Mobile No</i> </b></label>
		<input type="number"  class="form-control"  name="pmn" style="width:400px;"><br>
		<label  class="form-label"><b></i>Student Mobile No</i> </b></label>
		<input type="number"  class="form-control"  name="smn" style="width:400px;"><br>
		<label  class="form-label"><b></i>Community</i> </b></label>
		<input type="text"  class="form-control"  name="com" style="width:400px;"><br>
		<label  class="form-label"><b></i>Date Of Birth</i> </b></label>
		<input type="date"  class="form-control"  name="dob" style="width:400px;"><br>
		<label  class="form-label"><b></i>Aadhar Number</i> </b></label>
		<input type="number"  class="form-control"  name="an" style="width:400px;"><br>
<?php 
	 if(isset($_POST['update']))
    {
	$rollno=$_POST['rn'];
	$name=$_POST['namei'];
	$gender=$_POST['gender'];
	$bloodgroup=$_POST['bg'];
	$branchanddegree=$_POST['bad'];
	$fathername=$_POST['fn'];
	$mothername=$_POST['mn'];
	$annualincome=$_POST['mai'];
	$mothertongue=$_POST['mt'];
	$religion=$_POST['r'];
	$Community=$_POST['com'];
	$ParentMobile=$_POST['pmn'];
	$studentMobile=$_POST['smn'];
	$address=$_POST['nat'];
	$aadhar=$_POST['an'];
	$dob=$_POST['dob'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$dis="UPDATE `studentdetails` SET `name`='$name',`gender`='$gender',`bloodgroup`='$bloodgroup',
	`branchanddegree`='$branchanddegree',`fathername`='$fathername',`mothername`='$mothername',`annualincome`='$annualincome',`mothertongue`='$mothertongue',
	`religion`='$religion',`community`='$Community',`parentnumber`='$ParentMobile',`studentnumber`='$studentMobile',`address`='$address',
	`dateofbirth`='$dob',`aadhar`='$aadhar' WHERE `rollno`='$rollno'";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Update successfully')</script>";
	}
	else{
		echo "<script>alert('please enter valid rollno')</script>";
	}
}
?><br>
<a href="tutormain.php" id="gb"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buti">Go Back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-primary" id="buti" name="update">Update</button>
	  </form> </div>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	 
</body>
</html>