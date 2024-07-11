<!DOCTYPE html>
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
			table,th,td{
			width:970px;
			border-width:3px;
			padding:7px;
			cellpadding:2px 2px;
		}
		#u{
			border-radius:20px;
			color:grey;
			background-color:white;
		}
		#u:hover{
			background-color:black;
			color:white;
		}
    </style>
</head>
<body>
		<h3 style="text-align:center;color:red;padding:2px;"><b><i>External Onduty Requests</i></b></h3>
		<div id="s">
		  <table class="table table-dark table-hover" >
			<tr>
			<th>Sno</th>
			<th>Roll No</th>
			<th>Name</th>
			<th>Department</th>
			<th>Year</th>
			<th>Type Of Works</th>
			<th>Having a Certificate or Not</th>
			<th>Starting Date</th>
			<th>Ending Date</th>
			<th>No Of Days</th>
			<th style="color:red;">Certificate</th>
			<th style="color:red;">Response</th>
			</tr>
			<?php
		$con=mysqli_connect("localhost:3306","root","","college");
		$dis="SELECT * FROM `externalod` WHERE `tutor`='pending'";
		$r=mysqli_query($con,$dis);
		if($r)
		{
		while($row=$r->fetch_assoc())
		{
		echo "<tr><td>". $row['sno'] ."</td>
		<td>". $row['name'] ."</td>
		<td>". $row['roll no'] ."</td>
		<td>". $row['department'] ."</td>
		<td>". $row['year'] ."</td>
		<td>". $row['typeofworks'] ."</td>
		<td>". $row['qa'] ."</td>
		<td>". $row['startingdate'] ."</td>
		<td>". $row['endingdate'] ."</td>
		<td>". $row['noofdays'] ."</td>
		<td>
		<form action='downloadfileod.php' method='POST' >
		<input type='number'  placeholder='enter sno' name='sno'> 
		<input type='submit'  id='u' name='submit' value='Download'>
		</form>
		</td>
		<td>
		<form action='' method='POST'>
		<input type='number' placeholder='enter sno' name='sno'> 
		<input value='Approve'  id='u' type='submit' name='approve'>
		<input value='Decline'  id='u' type='submit' name='decline'>
		</form></td></tr>";
		}
		}
		else
		{
		echo "values not displayed";
		}
		?>
		  </table>
<?php 
	if(isset($_POST['approve']))
    {
	$sno=$_POST['sno'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$dis="UPDATE `externalod` SET `tutor`='approved' WHERE `sno`='$sno'";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Onduty approved');</script>";
		
	}
	else{
		echo "<script>alert('Please enter valid sno')</script>";
	}
}
	else if(isset($_POST['decline']))
    {
	$sno=$_POST['sno'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$dis="UPDATE `externalod` SET `tutor`='declined' WHERE `sno`='$sno'";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Onduty declined');</script>";
		
	}
	else{
		echo "<script>alert('Please enter valid sno')</script>";
	}
}
?>
		  </div>
		<a href="odapplication.php" id="gb"><button type="button" class="btn btn-secondary"
		data-bs-dismiss="modal" id="buti">Go Back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="tutorexternalod.php" id="gb"><button type="button" class="btn btn-secondary" 
		data-bs-dismiss="modal" id="buti">Reload</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<!--<button type="submit" class="btn btn-primary" id="buti" name="request">Request</button>-->
		</div>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	 
</body>
</html>