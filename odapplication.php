<html lang="en">
<head>
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
		 #alig{
		 margin-left:200px;
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
		<a href="tutormain.php"><button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Student Database&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
		<a href="leaveapplication.php"><button class="nav-link  " id="v-pills-profile-tab"
		data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" 
		aria-controls="v-pills-profile" aria-selected="false" >Leave Application&nbsp;&nbsp;
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
              xhttp.open("GET", "medicalcount.php", true);
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
              xhttp.open("GET", "casualcount.php", true);
              xhttp.send();
             },0);
           }
		   loadDoc();
            </script></button></a>
			<a href="odapplication.php"><button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" 
			data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
			Od Application&nbsp;&nbsp;&nbsp;<i class="bi bi-bell-fill"></i>&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<script type="text/javascript">
		  function loadDoc(){          
             setInterval(function(){
           
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                document.getElementById("noti_number").innerHTML = this.responseText;
               }
              };
              xhttp.open("GET", "data639001.php", true);
              xhttp.send();
             },1000);
           }
		   loadDoc();
            </script></button></a>
		<a href="itmain.html"><button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
        </div>
      </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
		  <!--started first box-->
		  <div id="alig">
		  <h2 style="color:black;"><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;OD APPLICATION</i></b></h2><br>
	        <a href="tutorinternalod.php"><button id="ub">Internal</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <a href="tutorexternalod.php"><button id="bu">External</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="tutorpending.php"><button id="bu">Pending</button></a><br><br>
				<!---->
		  <!--ended first box-->
		  </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

