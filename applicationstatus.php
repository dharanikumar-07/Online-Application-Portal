<html>
<head>
<title>application status</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
	 #alig{
		 margin-left:350px;
		 margin-top:210px;
	 }
	 #bu{
			background-color:grey;
			color:white;
			width:200px;
			height:40px;
			border-radius:50px;
		}
		#bu:hover{
			background-color:white;
			color:black;
		}
			 #ub{
			background-color:grey;
			color:white;
			width:200px;
			height:40px;
			border-radius:50px;
		}
		#ub:hover{
			background-color:white;
			color:black;
		}
      #bd{
        background-color: rgba(17, 17, 17, 0.79);
        height:1350px;
        width:250px;
      }
     .nav-link {
      color: rgb(147, 248, 236);
     }
     button{
      width:250px;
     }
	 .but{
	 height:40px;
	 }
	 a{
	  color: rgb(147, 248, 236);
	  text-decoration:none;
	 }
	 h2{
	 color:white;
	 }
	 hr{
	 color:white;
	  border-width:2px;
	 }
	 body{
	 background-color:rgb(235, 236, 183);
	 }
	 #sec{
	 width:20px;
	 background-color:black;
	 }
   #buti{
		width:100px;
		}
		h1{
		color:red;
		}
		label{
		color:black;
		}
		#b{
		width:30px;
		height:28px;
		background-color:transparent;
		border-style:none;
		}
		.nav-link active{
		background-color:rgb(225, 217, 60);
		}
		.nav-link:hover{
		background-color:rgb(225, 217, 60);
		}
		#bual{
		margin-left:150px;
		}
</style>
</head>
<body>
<div class="d-flex align-items-start">
      <div id="bd">
        <h2><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CIET</b></i></h2>
		<hr>
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a href="studentmain.php"><button class="nav-link  " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" >APPLY FOR LEAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <a href="studentmain.php"><button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" >APPLY FOR OD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
		 <a href="applicationstatus.php"><button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" 
		 type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">&nbsp;&nbsp;&nbsp;&nbsp;
		CHECK YOUR APPLICATION 
		 <br>STATUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
		<a href="itmain.html"><button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
        </div>
      </div>
<div id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" 
		  tabindex="0">
		  <form action="" method="POST">
				<label style="margin-left:150px;"><b><i>Roll No</i></b></label>
				<input class="form-control" type="text" placeholder="Enter rollno to view your application"  
				style="margin-left:150px;width:800px" 
				name="rollno"><br>
				<label style="margin-left:150px;"><b><i>Enter Your Application Starting Date</i></b></label>
				<input class="form-control" type="datetime-local" style="margin-left:150px;width:800px" name="sd">
				<br>
				<div class="btn-group" role="group" id="bual">
					<button type="submit" class="btn btn-outline-primary" style="width:185px;" 
					name="internalod">Internalod</button>
					<button type="submit" class="btn btn-outline-primary" style="width:185px;" 
					name="externalod">Externalod</button>
					<button type="submit" class="btn btn-outline-primary" style="width:185px;" 
					name="medicalleave">Medicalleave</button>
					<button type="submit" class="btn btn-outline-primary" style="width:185px;"
					name="casualleave">Casualleave</button>
				</div>
			</form>
			<table>
			<?php 
				if(isset($_POST['internalod']))
				{
					$rollno=$_POST['rollno'];
					$sd=$_POST['sd'];
					$con=mysqli_connect("localhost:3306","root","","college");
					$dis="SELECT * FROM `internalod` WHERE `rollno`='$rollno' AND `startingdate`='$sd'";
					$r=mysqli_query($con,$dis);
				if($r)
				{
					$row=$r->fetch_assoc();
					echo"
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type='button' id='bu'  ><a href='applicationstatus.php' style='color:black';><b><i>Clear</i></b></a></button>
					<tr><th>Sno</th><td>". $row['sno'] ."</td></tr>
					<tr><th>Name</th><td>". $row['name'] ."</td></tr>
					<tr><th>Roll NO</th><td>". $row['rollno'] ."</td></tr>
					<tr><th>Department</th><td>". $row['department'] ."</td></tr>
					<tr><th>Year</th><td>". $row['years'] ."</td></tr>
					<tr><th>Type Of Work</th><td>". $row['type of works'] ."</td></tr>
					<tr><th>Others</th><td>". $row['others'] ."</td></tr>
					<tr><th>Reason</th><td>". $row['reason'] ."</td></tr>
					<tr><th>Starting date</th><td>". $row['startingdate'] ."</td></tr>
					<tr><th>Ending Date</th><td>". $row['endingdate'] ."</td></tr>
					<tr><th>No Of Days</th><td>". $row['no of days'] ."</td></tr>
					<tr><th>Tutor response</th><td>". $row['tutor'] ."</td></tr>
					<tr><th>Hod response</th><td>". $row['hod'] ."</td></tr>
					";
				}
				else
				{
				   echo"<script>alert('please enter valid rollno and date')</script>";
				}
			}
			else if(isset($_POST['externalod']))
				{
					$rollno=$_POST['rollno'];
					$sd=$_POST['sd'];
					$con=mysqli_connect("localhost:3306","root","","college");
					$din="SELECT * FROM `externalod` WHERE `roll no`='$rollno' AND `startingdate`='$sd'";
					$e=mysqli_query($con,$din);
				if($e)
				{
					$row=$e->fetch_assoc();
					echo"
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type='button' id='bu'  ><a href='applicationstatus.php' style='color:black';><b><i>Clear</i></b></a></button>
					<tr><th>Sno</th><td>". $row['sno'] ."</td></tr>
					<tr><th>Name</th><td>". $row['name'] ."</td></tr>
					<tr><th>Roll NO</th><td>". $row['roll no'] ."</td></tr>
					<tr><th>Department</th><td>". $row['department'] ."</td></tr>
					<tr><th>Year</th><td>". $row['year'] ."</td></tr>
					<tr><th>Type Of Work</th><td>". $row['typeofworks'] ."</td></tr>
					<tr><th>Having a certificate or not</th><td>". $row['qa'] ."</td></tr>
					<tr><th>Certificate</th><td>". $row['certificate'] ."</td></tr>
					<tr><th>Starting date</th><td>". $row['startingdate'] ."</td></tr>
					<tr><th>Ending Date</th><td>". $row['endingdate'] ."</td></tr>
					<tr><th>No Of Days</th><td>". $row['noofdays'] ."</td></tr>
					<tr><th>Tutor response</th><td>". $row['tutor'] ."</td></tr>
					<tr><th>Hod response</th><td>". $row['hod'] ."</td></tr>
					";
				}
			}
			else if(isset($_POST['casualleave']))
				{
					$rollno=$_POST['rollno'];
					$sd=$_POST['sd'];
					$con=mysqli_connect("localhost:3306","root","","college");
					$did="SELECT * FROM `casualleave` WHERE `rollno`='$rollno' AND `startingdate`='$sd'";
					$s=mysqli_query($con,$did);
				if($s)
				{
					$row=$s->fetch_assoc();
					echo"
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type='button' id='bu'  ><a href='applicationstatus.php' style='color:black';><b><i>Clear</i></b></a></button>
					<tr><th>Sno</th><td>". $row['sno'] ."</td></tr>
					<tr><th>Name</th><td>". $row['name'] ."</td></tr>
					<tr><th>Roll NO</th><td>". $row['rollno'] ."</td></tr>
					<tr><th>Department</th><td>". $row['department'] ."</td></tr>
					<tr><th>Year</th><td>". $row['year'] ."</td></tr>
					<tr><th>Type Of Issues</th><td>". $row['typeofissues'] ."</td></tr>
					<tr><th>Starting date</th><td>". $row['startingdate'] ."</td></tr>
					<tr><th>Ending Date</th><td>". $row['endingdate'] ."</td></tr>
					<tr><th>No Of Days</th><td>". $row['noofdays'] ."</td></tr>
					<tr><th>Tutor response</th><td>". $row['tutor'] ."</td></tr>
					<tr><th>Hod response</th><td>". $row['hod'] ."</td></tr>
					";
				}
				else
				{
				   echo"<script>alert('please enter valid rollno and date')</script>";
				}
			}
			else if(isset($_POST['medicalleave']))
				{
					$rollno=$_POST['rollno'];
					$sd=$_POST['sd'];
					$con=mysqli_connect("localhost:3306","root","","college");
					$dil="SELECT * FROM `medicalleave` WHERE `rollno`='$rollno' AND `startingdate`='$sd'";
					$nu=mysqli_query($con,$dil);
				if($nu)
				{
					$row=$nu->fetch_assoc();
					echo"
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type='button' id='bu'  ><a href='applicationstatus.php' style='color:black';><b><i>Clear</i></b></a></button>
					<tr><th>Sno</th><td>". $row['sno'] ."</td></tr>
					<tr><th>Name</th><td>". $row['name'] ."</td></tr>
					<tr><th>Roll NO</th><td>". $row['rollno'] ."</td></tr>
					<tr><th>Department</th><td>". $row['department'] ."</td></tr>
					<tr><th>Year</th><td>". $row['year'] ."</td></tr>
					<tr><th>Type Of Issues</th><td>". $row['typeofissues'] ."</td></tr>
					<tr><th>Certificate</th><td>". $row['certificate'] ."</td></tr>
					<tr><th>Starting date</th><td>". $row['startingdate'] ."</td></tr>
					<tr><th>Ending Date</th><td>". $row['endingdate'] ."</td></tr>
					<tr><th>No Of Days</th><td>". $row['noofdays'] ."</td></tr>
					<tr><th>Tutor response</th><td>". $row['tutor'] ."</td></tr>
					<tr><th>Hod response</th><td>". $row['hod'] ."</td></tr>
					";
				}
			}
			?>
			</table><br><br>
			</div>
</body>
</html>