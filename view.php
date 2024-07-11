    <?php
	          $conn = mysqli_connect('localhost','root','','college');
               $query2 = "SELECT * FROM `filedownload` ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <a href="download.php?file=<?php echo $rows['filename'] ?>">Download</a><br>
               <?php
               }
               ?>