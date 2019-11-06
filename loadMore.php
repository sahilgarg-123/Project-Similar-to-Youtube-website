
<?php
include("connect.php");

$videoId=$_GET['videoId'];


						$sqlcmt="SELECT * FROM `comments` WHERE  videoid='".$videoId."'";
						$rcmt=mysqli_query($conn,$sqlcmt);
						while($cmtRow=mysqli_fetch_array($rcmt))
						{
						
						?>	
                            
                <div class="channel">
                        <figure><img src="images/vastu.jpg"></figure>
                        <div class="para">
                          <h2>
						  <?php echo $cmtRow['user']; ?></h2>
                          <p><?php echo $cmtRow['comment']; ?></p>
                          <h3><a href="#">Like</a> <a href="#">Reply</a></h3>
                        </div>
                      </div>
                      <?php
				}
						?>
 