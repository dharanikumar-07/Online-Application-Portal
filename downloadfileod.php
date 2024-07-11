<!DOCTYPE html>
<html>
<head>
<title>download</title>
<style>
body{
	background-color:grey;
}
a{
	text-align:center;
	font-size:60px;
	color:white;
	text-decoration:none;
}
#u{
	text-decoration:none;
	margin-left:650px;
	font-size:30px;
	color:blue;
	text-decoration:none;
}
#u:hover{
	color:red;
}
a:hover{
	color:aqua;
}
img{
	 margin-left:300px;
}
</style>
</head>
<body>
<img src="message.jpg" height="400px;" >
    <?php
	if(isset($_POST['submit']))
	{
		 $sno=$_POST['sno'];
	          $conn = mysqli_connect('localhost','root','','college');
               $query2 = "SELECT `certificate` FROM `externalod` WHERE `sno`=$sno";
               $run2 = mysqli_query($conn,$query2);
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
				   <br>
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;             
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			<b><i><a href="download.php?file=<?php echo $rows['certificate'] ?>">Download</a></b></i><br>
			 <b><i><a href="tutorexternalod.php" id="u">Go Back</a></b></i><br>
               <?php
               }
	}
	         
               ?>
</body>
</html>