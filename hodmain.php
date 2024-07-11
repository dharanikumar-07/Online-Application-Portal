<html lang="en">
<head>
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
		 #alig{
		 margin-left:250px;
		 margin-top:10px;
	 }
	 #bu{
			background-color:grey;
			color:white;
			width:180px;;
			height:30px;
			border-radius:50px;
		}
		#bu:hover{
			background-color:white;
			color:black;
		}
			 #ub{
			background-color:grey;
			color:white;
			width:180px;
			height:32px;
			border-radius:50px;
		}
		#ub:hover{
			background-color:white;
			color:black;
		}
      #bd{
        background-color: rgba(17, 17, 17, 0.79);
        height:850px;
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
		.nav-link active{
		background-color:rgb(225, 217, 60);
		}
		.nav-link:hover{
		background-color:rgb(225, 217, 60);
		}
		table,th,td{
			width:970px;
			margin-left:100px;
			border-radius:10px;
			border-width:5px;
			border:2px solid;
			padding:7px;
			cellpadding:2px 2px;
		}
    </style>
</head>
<body>
     
    <div class="d-flex align-items-start">
      <div id="bd">
        <h2><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CIET</b></i></h2>
		<hr>
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<button class="nav-link  active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" >
		Faculity Database&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <a href="hodleaveapplication.php"><button class="nav-link" id="v-pills-home-tab"
		data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" 
		aria-controls="v-pills-home" aria-selected="true">Leave Application&nbsp;&nbsp;
		<i class="bi bi-heart-pulse-fill" id="noti_number"></i>&nbsp;
          </i><script type="text/javascript">
		  function loadDoc(){          
             setInterval(function(){
           
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                document.getElementById("noti_number").innerHTML = this.responseText;
               }
              };
              xhttp.open("GET", "medicalcounthod.php", true);
              xhttp.send();
             },0);
           }
		   loadDoc();
		   </script>
			<i class="bi bi-arrow-up-circle-fill" id="noti_numberc"></i>		
		   <script>
		   	  function loadDoc(){          
             setInterval(function(){
           
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                document.getElementById("noti_numberc").innerHTML = this.responseText;
               }
              };
              xhttp.open("GET", "casualcounthod.php", true);
              xhttp.send();
             },0);
           }
		   loadDoc();
            </script></button></a>
			<a href="hododapplication.php"><button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" 
			data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" 
			aria-selected="true">Od Application&nbsp;&nbsp;
			<i class="bi bi-arrow-bar-down" id="noti_numberi"></i>
			<script type="text/javascript">
		  function loadDoc(){          
             setInterval(function(){
           
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                document.getElementById("noti_numberi").innerHTML = this.responseText;
               }
              };
              xhttp.open("GET", "internalcounthod.php", true);
              xhttp.send();
             },0);
           }
		   loadDoc();
		   </script>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<i class="bi bi-arrow-bar-up" id="noti_numbere"></i>
			<script>
		   	  function loadDoc(){          
             setInterval(function(){
           
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                document.getElementById("noti_numbere").innerHTML = this.responseText;
               }
              };
              xhttp.open("GET", "externalcounthod.php", true);
              xhttp.send();
             },0);
           }
		   loadDoc();
            </script>
		   </button></a>
		<a href="itmain.html"><button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
        </div>
      </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
		  <!--started first box-->
		  <div id="alig">
	        <a href="editfaculitydetails.php"><button id="ub">Edit Faculity Details</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <a href="addnewfaculity.php"><button id="bu">Add New Faculity</button></a><br><br>
			 <form class="d-flex" role="search" action="" method="POST">
				<input class="form-control me-2" type="search" placeholder="Enter Faculityid to view Faculity details"
				aria-label="Search" style="margin-left:-200px;width:800px" name="fi">
				<button class="btn btn-outline-success" type="submit" name="viewtutor">View</button>
			</form>
				<!---->
		  <!--ended first box-->
		  </div>
		  <div class="fo">
		  <table>
				<?php 
				if(isset($_POST['viewtutor']))
				{
					$faculityid=$_POST['fi'];
					$con=mysqli_connect("localhost:3306","root","","college");
					$dis="SELECT * FROM `faculitydetails` WHERE `faculity id`='$faculityid'";
					$r=mysqli_query($con,$dis);
				if($r)
				{
					$row=$r->fetch_assoc();
					echo"
					<tr><th>Faculity ID</th><td>". $row['faculity id'] ."</td></tr>
					<tr><th>Name</th><td>". $row['name'] ."</td></tr>
					<tr><th>Date Of Birth</th><td>". $row['date of birth'] ."</td></tr>
					<tr><th>Gender</th><td>". $row['gender'] ."</td></tr>
					<tr><th>Blood Group</th><td>". $row['blood group'] ."</td></tr>
					<tr><th>Educational Qualification</th><td>". $row['education'] ."</td></tr>
					<tr><th>Branch</th><td>". $row['branch'] ."</td></tr>
					<tr><th>Address</th><td>". $row['address'] ."</td></tr>
					<tr><th>Mobile No</th><td>". $row['mobile no'] ."</td></tr>
					<tr><th>Login Password</th><td>". $row['login password'] ."</td></tr>
					<tr><th>Appointed As Tutor</th><td>". $row['appointed as'] ."</td></tr>
					<tr><th>Year</th><td>". $row['year'] ."</td></tr>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type='button' id='bu'  ><a href='hodmain.php' style='color:black';><b><i>Clear</i></b></a></button>";
				}
				else
				{
				   echo"<h3>please enter valid faculityid</h3>";
				}
			}
			?>
			</table><br><br>
	      </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

