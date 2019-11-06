<?php include ('header.php'); ?>
<div class="container prabhuvideos">
	<div class="row first-part">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="left">

				<!-- checking for the desktop -->
				<?php if (!$DEVICE) { ?>
					<div class="video">
						<center>
							<iframe class="video_frame" width="100%" height="500px" src="https://www.youtube.com/embed/<?php echo $videoid; ?>?start=06&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope" allowfullscreen></iframe>
						</center>
					</div>
					<!-- checking for the mobile -->
				<?php } else { ?>
					<!-- end of checking desktop and mobile -->
					<div class="video">
						<center>
							<iframe style="margin-left:0.1rem;" class="video_frame" width="356px" height="200px" src="https://www.youtube.com/embed/<?php echo $videoid; ?>?start=06&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope" allowfullscreen></iframe>
						</center>
					</div>
				<?php } ?>



				          <div class="content">
					                  <div class="col-md-8 col-sm-6 col-xs-12 sub">
						<!-- Views are start from here  -->
						<?php
						$sql="SELECT * FROM `videos` WHERE videoid='".$videoid."'";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($result))
						{?>
							<!-- checking for desktop -->
							<?php if(!$DEVICE) { ?>

								<h2><?php echo $row['videoT']; ?></h2>
								<div id="loadDescme"></div>
 				          <span id="show_more" style="cursor:pointer;color:#fff;font-weight:bold;" onClick="loadDesc('<?php echo $videoid; ?>',2)"> show more</span>
 				          <span id="show_less" style="display:none;cursor:pointer;color:#fff;font-weight:bold;" onClick="loadDesc('<?php echo $videoid; ?>',3)"> show less</span>

									<!-- checking for mobile -->
							<?php }
							 else { ?>
								     <div  class="mobile_title_vid">
								      <h2><?php echo $row['videoT'];?></h2>
										  <span id="show_more" style="cursor:pointer;color:#FF7E01;font-weight:bold;">आगे पढ़े..</span>
											<div id="video_desc_mobile"  style="display:none;">
											 <?php echo $row['video_desc']; ?>
										 </div>
										 <span id="show_less" style="display:none;cursor:pointer;color:#ccc;font-weight:bold;">Show Less</span>
									 </div>
							<?php }} ?>


 				           </div>


									 <!-- checking for Desktop  sharing options start -->
									 <?php if(!$DEVICE) { ?>
 				          			 <div class="col-md-4 col-sm-6">
 				           <div class="social">
 				           <a href="#"> <i class="fa fa-thumbs-up" onClick="addLikes('<?php echo $videoid; ?>')"></i></a>

 				<!-- AddToAny BEGIN -->
 				<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://prabhubhakti.com/mytube.php?videoid=NV408cXXzDM" data-a2a-title="Prabhu Bhakti">
 				<a class="a2a_dd" href="https://www.addtoany.com/share"><i class="fa fa-share-alt"></i></a>
 				</div>
 				<script>
 				var a2a_config = a2a_config || {};
 				a2a_config.onclick = 1;
 				a2a_config.num_services = 5;
 				</script>
 				<script async src="https://static.addtoany.com/menu/page.js"></script>
 				<!-- AddToAny END -->
 				           <a href="#"> <i class="fa fa-eye"></i></a>
 				           <!-- <a href="#"> <i class="fa fa-comment"></i></a> -->
 				         </div>
 				           </div>
									 <!-- checking for mobile -->

								 <?php } else { ?>
									 <div class="social">
										<a href="#">
											<i><img src="images/icons/Like_icon.png"></i>
										</a>
										<a href="#">
											<i><img src="images/icons/comment.png"></i>
										</a>
										<?php $video_id = $_GET['videoid'];
                          $cat = $_GET['cat'];
													$sub_cat = $_GET['subcat'];
										     ?>
										<a href="https://wa.me/?text= https://www.prabhubhakti.com/mytube.php?videoid=<?php echo $video_id; ?>&cat=<?php echo $cat; ?>&subcat=<?php echo $sub_cat; ?>">
											<i><img src="images/icons/prabhu_whatsapp.png"></i>
										</a>
										<a href="#">
											<i><img src="images/icons/eyes.png"></i>
										</a>
									</div>

									 <div class="social_views_count">
										<span class="total_likes" style="font-size:12px !important"> 141</span>
										<span class="total_likes" style="font-size:12px !important"> 141</span>
										<span class="total_likes" style="font-size:12px !important"> 141</span>
										<span class="total_views" style="font-size:12px !important">
											<?php
											$sqlView="SELECT * FROM `views` WHERE videoid='".$videoid."'";
											$ViewResult=mysqli_query($conn,$sqlView);
											while($Vrow=mysqli_fetch_array($ViewResult))
											{
												echo $Vrow['view'];
											}
											?>
										</span>
									</div>
									 <div class="hor_3_Az">
										<hr class="horizontal_line">
									</div>
								 <?php  } ?>
                                 <!-- sharing option ends -->


 				           </div>

								 <!--checking for Desktop -->


              <?php if(!$DEVICE) { ?>
								<div class="tag">
								<?php
			 $tagSql="SELECT * FROM `videoseo` WHERE videoID='".$videoid."'";
			 $norepeat="";
			 $tagResult=mysqli_query($conn,$tagSql);
			 while($tagRow=mysqli_fetch_array($tagResult))
			 {
			 if($norepeat==$tagRow['tag'])
			 {
			 }
			 else
			 {
				$norepeat=$tagRow['tag'];
			 ?>
											 <li><a href="#"><?php echo $tagRow['tag']; ?></a></li>
										<?php
			 }
			 }
			 ?>

			 <div class="comment_wrap">
				<div class="total-comment">
				 <?php
$cSr=0;
$sqlC="SELECT * FROM `comments` WHERE videoid='".$videoid."'";
$CResult=mysqli_query($conn,$sqlC);
while($Crow=mysqli_fetch_array($CResult))
{
 $cSr=$cSr+1;

}
echo "Total Comments:-  ".$cSr;
?>
				</div>
				 <div class="comment">
					<!-- <i class="fa fa-user"></i>  -->
					 <div class="sub-part">
					<!-- <textarea id="cmtTxt" name="cmtTxt" style="color:#000" placeholder="Add a public comment..."> --></textarea></div>
				 </div>
				 <div class="submit">
				<!-- <input type="submit" value="Submit" style="display:none" class="bg-success" style="background:#e97426; color:#fff; border:none; text-transform:uppercase; padding:8px 16px; margin-top:5px;margin-bottom: 20px;font-size: 16px;border-radius: 4px;" onClick="saveComment(' echo $videoid; ','New user')"> -->
				 </div>
				 <div class="load-comment">
                 <!-- comments start from here -->
				 <div id="loadmore">
				 <?php
				$sqlcmt="SELECT * FROM `comments` WHERE  videoid='".$videoid."' LIMIT 5";
				$rcmt=mysqli_query($conn,$sqlcmt);
				while($cmtRow=mysqli_fetch_array($rcmt))
				{
				?>

			 <div class="channel">
				 <figure><img src="images/vastu.jpg"></figure>
				 <div class="para">
					 <h2><?php echo $cmtRow['user']; ?></h2>
					 <p><?php echo $cmtRow['comment']; ?></p>
					 <h3><a href="#">Like</a> . <a href="#">Reply</a></h3>
				 </div>
			 </div>
				<?php
					}
					?>
				 </div>
				<!-- comments close from here -->


			<!--  <button data-toggle="collapse" data-target="#demo" onClick="loadMore(' echo $videoid; ?>')">Load More Comments</button>  -->
			 <div id="demo" class="collapse">

			 </div>
			 </div>
			</div>

			</div>

				<!-- checking for mobile -->
				<?php }else { ?>


				<?php } ?>

 				   </div>

 				  </div>






            <?php if(!$DEVICE)
			{
			?>
            <!-- videos section -->
            <!-- Tag based Product-->

               <!-- Product by tag base -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!-- Featured 1 Product -->
              <?php
				 $sql34="SELECT * FROM `videoseo` WHERE videoid='".$videoid."'";
				 $rs34=mysqli_query($conn,$sql34);
				 while($row34=mysqli_fetch_array($rs34))
				 {
					 $sql35="SELECT * FROM `product` WHERE skucode='".$row34['tag']."'";
					 $rs35=mysqli_query($conn,$sql35);
					 $check35=mysqli_num_rows($rs35);
					 if($check35<=0)
					 {
					 }
					 else
					 {
						 while($row35=mysqli_fetch_array($rs35))
						 {
				?>
							 <a href="prod_desc.php?prod_type=<?php echo $row35['sr']; ?>">
 				      <div class="right">
 				         <div class="block">
 				            <figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $row35['url']; ?>" class="img-responsive"></figure>
 				            <div class="content col-md-6 col-sm-6 col-xs-12">
 				               <h2 style="font-size:14px"><?php echo $row35['name']; ?></h2>
                               <cite><?php echo '<i class="fa fa-rupee">'.$row35['sprice'].'</i>'; ?></cite>

 				            </div>
 				         </div>
                         </div></a>
                         <?php
						 }
					 }
				 }
				 ?>
            <!-- Featured 1 Product  -->
            <!-- tag based show 4 products -->
             <?php
				 $sql31="SELECT * FROM `videoseo` WHERE videoid='".$videoid."'";
				 $rs31=mysqli_query($conn,$sql31);
				 $check31=mysqli_num_rows($rs31);

					 while($row31=mysqli_fetch_array($rs31))
					 {
					 $sql32="SELECT * FROM `pseo` WHERE tag='".$row31['tag']."'";
					 $rs32=mysqli_query($conn,$sql32);
					 $check32=mysqli_num_rows($rs32);

						 while($row32=mysqli_fetch_array($rs32))
						 {
					 $sql33="SELECT * FROM `product` WHERE sr='".$row32['pid']."' LIMIT 4";
					 $rs33=mysqli_query($conn,$sql33);
					 $check33=mysqli_num_rows($rs33);

						 while($row33=mysqli_fetch_array($rs33))
						 {
							 ?>
							 <a href="prod_desc.php?prod_type=<?php echo $row33['sr']; ?>">
 				      <div class="right">
 				         <div class="block">
 				            <figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $row33['url']; ?>" class="img-responsive"></figure>
 				            <div class="content col-md-6 col-sm-6 col-xs-12">
 				               <h2 style="font-size:14px"><?php echo $row33['name']; ?></h2>
                               <cite><?php echo "Rs. ".$row33['sprice']; ?></cite>

 				            </div>
 				         </div>
                         </div></a>
                         <?php
						 }
						 }
					 }
				 ?>
            <!-- ends tag based 4 product list in Desktop view -->

                          <?php
 				$duplicacy=0;
 				$relatedVideoQuery="SELECT * FROM `videoseo` WHERE videoID='".$videoid."'";
 				$RVQresult=mysqli_query($conn,$relatedVideoQuery);
 				while($RVQrow=mysqli_fetch_array($RVQresult))
 				{

 				// now query and loop run for tags
 				$sqlTag="SELECT * FROM `videoseo` WHERE tag='".$RVQrow['tag']."'";
 				$rTag=mysqli_query($conn,$sqlTag);
 				while($rRow=mysqli_fetch_array($rTag))
 				{
 				if($rRow['videoID']==$videoid)
 				{
 				}
 				else
 				{
 				$RVQmainQuery="SELECT * FROM `videos` WHERE videoid='".$rRow['videoID']."'";
 				$RVQmainResult=mysqli_query($conn,$RVQmainQuery);
 				while($RVQrow1=mysqli_fetch_array($RVQmainResult))
 				{
 				?>
 				  <a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
 				      <div class="right">
 				         <div class="block">
 				            <figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $RVQrow1['thumbnail']; ?>" class="img-responsive"></figure>
 				            <div class="content col-md-6 col-sm-6 col-xs-12">
 				               <h2 style="font-size:14px"><?php echo $RVQrow1['videoT']; ?></h2>

 				            </div>
 				         </div>
                         </div></a>
 			    <?php
 				}
 				}
 				}
 				}
 				?>
                <!--  -->


	 				<!-- Related video here  as per latest 2 videos-->
	 				<?php
	 				$RVQmainQuery="SELECT * FROM `videos` ORDER BY `sr` DESC LIMIT 2";
	 				$RVQmainResult=mysqli_query($conn,$RVQmainQuery);
	 				while($RVQrow1=mysqli_fetch_array($RVQmainResult))
					{
					?>
	 				<a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
	 				   <div class="right">
	 				      <div class="block">
	 				         <figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $RVQrow1['thumbnail']; ?>" class="img-responsive"></figure>
	 				      <div class="content col-md-6 col-sm-6 col-xs-12">
	 				            <h2 style="font-size:14px"><?php echo $RVQrow1['videoT']; ?></h2>
	 				      </div>
	 				      </div>
                       </div>
                      </a>
	 				<?php
	 				}
	 				?>
	 				    <!-- end Related videos search -->

						<!--  Related videos by Latest category -->
	 				 <?php
	 				$RVQmainQuery="SELECT * FROM `videos` WHERE vsubcat='".$subcat."' LIMIT 5";
	 				$RVQmainResult=mysqli_query($conn,$RVQmainQuery);
	 				while($RVQrow1=mysqli_fetch_array($RVQmainResult))
	 				{
	 				?>
	 				<a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
	 				   <div class="right">
	 				      <div class="block">
	 				         <figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $RVQrow1['thumbnail']; ?>" class="img-responsive"></figure>
	 				         <div class="content col-md-6 col-sm-6 col-xs-12">
	 				            <h2 style="font-size:14px"><?php echo $RVQrow1['videoT']; ?></h2>

	 				         </div>
	 				      </div>
                          </div>
                          </a>
	 				<?php
	 				}
	 				?>
                    </div>
			<?php
			}
			else
			{
		    ?>

			<div class="container-fluid" style="padding-right: 0px !important;padding-left:30px !important;">

							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12">
  								<h4 style="margin-left: 0.1rem;color: hsl(0,0%,6.7%) !important;">Related Videos</h4>
								</div>
							</div>

<!-- Product search by skucode video seo tag -->

<?php
$sql34="SELECT * FROM `videoseo` WHERE videoid='".$videoid."'";
$rs34=mysqli_query($conn,$sql34);
while($row34=mysqli_fetch_array($rs34))
{
$sql35="SELECT * FROM `product` WHERE skucode='".$row34['tag']."'";
$rs35=mysqli_query($conn,$sql35);
$check35=mysqli_num_rows($rs35);
if($check35<=0)
{
}
else
{
while($row35=mysqli_fetch_array($rs35))
{
?>
 <a href="prod_desc.php?prod_type=<?php echo $row35['sr']; ?>">
<div class="right">
	 <div class="block">
			<figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $row35['url']; ?>" class="img-responsive"></figure>
			<div class="content col-md-6 col-sm-6 col-xs-12">
				 <h2 style="font-size:14px"><?php echo $row35['name']; ?></h2>
								 <cite><?php echo '<i class="fa fa-rupee">'.$row35['sprice'].'</i>'; ?></cite>

			</div>
	 </div>
					 </div></a>
					 <?php
}
}
}
?>
<!-- Product search by skucode video seo tag -->
<!-- tag based show 4 products -->
 <?php
$sql31="SELECT * FROM `videoseo` WHERE videoid='".$videoid."'";
$rs31=mysqli_query($conn,$sql31);
$check31=mysqli_num_rows($rs31);

while($row31=mysqli_fetch_array($rs31))
{
$sql32="SELECT * FROM `pseo` WHERE tag='".$row31['tag']."'";
$rs32=mysqli_query($conn,$sql32);
$check32=mysqli_num_rows($rs32);

 while($row32=mysqli_fetch_array($rs32))
 {
$sql33="SELECT * FROM `product` WHERE sr='".$row32['pid']."' LIMIT 4";
$rs33=mysqli_query($conn,$sql33);
$check33=mysqli_num_rows($rs33);

 while($row33=mysqli_fetch_array($rs33))
 {
	 ?>
	 <a href="prod_desc.php?prod_type=<?php echo $row33['sr']; ?>">
	<div class="right">
		 <div class="block">
				<figure class="col-md-6 col-sm-6 col-xs-12" style="border-color:#FFF; border:medium"><img src="<?php echo $row33['url']; ?>" class="img-responsive"></figure>
				<div class="content col-md-6 col-sm-6 col-xs-12">
					 <h2 style="font-size:14px"><?php echo $row33['name']; ?></h2>
									 <cite><?php echo "Rs. ".$row33['sprice']; ?></cite>

				</div>
		 </div>
						 </div></a>
						 <?php
 }
 }
}
?>
<!-- ends tag based 4 product list in Desktop view -->


          <?php
 				$duplicacy=0;
 				$relatedVideoQuery="SELECT * FROM `videoseo` WHERE videoID='".$videoid."'";
 				$RVQresult=mysqli_query($conn,$relatedVideoQuery);
 				while($RVQrow=mysqli_fetch_array($RVQresult))
 				{

 				// now query and loop run for tags
 				$sqlTag="SELECT * FROM `videoseo` WHERE tag='".$RVQrow['tag']."'";
 				$rTag=mysqli_query($conn,$sqlTag);
 				while($rRow=mysqli_fetch_array($rTag))
 				{
 				if($rRow['videoID']==$videoid)
 				{
 				}
 				else
 				{
 				$RVQmainQuery="SELECT * FROM `videos` WHERE videoid='".$rRow['videoID']."'";
 				$RVQmainResult=mysqli_query($conn,$RVQmainQuery);
 				while($RVQrow1=mysqli_fetch_array($RVQmainResult))
 				{
 				?>
                <div class="row mob_vide_bg" style="margin-bottom:0.3em;">
                <div class="col-sm-7 col-xs-7">
 				  <a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
 				      <img src="<?php echo $RVQrow1['thumbnail']; ?>" class="img-responsive">
                      </a>
                      </div>

 				           <div class="col-sm-5 col-xs-5 padding-0">
                           <a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
 				              <h4><?php echo $RVQrow1['videoT']; ?></h4>
                              <h5>114 views</h5>
</a>
 				       </div>

			<hr class="horizontal_line">
                 </div>
 			    <?php
 				}
 				}
 				}
 				}
 				?>
				<!--  Search latest 2 videos in Mobile view -->
				<?php
				$RVQmainQuery="SELECT * FROM `videos` ORDER BY `sr` DESC LIMIT 2";
				$RVQmainResult=mysqli_query($conn,$RVQmainQuery);
				while($RVQrow1=mysqli_fetch_array($RVQmainResult))
				{
				?>
				<div class="row mob_vide_bg" style="margin-bottom:0.3em;">

					<div class="col-sm-7 col-xs-7">
						<a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
						<img src="<?php echo $RVQrow1['thumbnail']; ?>" class="img-responsive">
					</a>
					</div>

					<div class="col-sm-5 col-xs-5 padding-0">
						<a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
							<h4><?php echo $RVQrow1['videoT']; ?></h4>
							<h5>114 views</h5>
						</a>
					</div>
				</div>
				<?php
				 }
				?>


		<!-- Related to subcat displaying 5 videos as regular form for Mobile view -->
		<?php
		$RVQmainQuery="SELECT * FROM `videos` WHERE vsubcat='".$subcat."' LIMIT 5";
		$RVQmainResult=mysqli_query($conn,$RVQmainQuery);
		while($RVQrow1=mysqli_fetch_array($RVQmainResult))
		{
		?>
		<div class="row mob_vide_bg" style="margin-bottom:0.3em;">
			<div class="col-sm-7 col-xs-7">
				<a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
				<img src="<?php echo $RVQrow1['thumbnail']; ?>" class="img-responsive">
			</a>
			</div>

			<div class="col-sm-5 col-xs-5 padding-0">
				<a href="mytube.php?videoid=<?php echo $RVQrow1['videoid']; ?>">
					<h4><?php echo $RVQrow1['videoT']; ?></h4>
					<h5>114 views</h5>
				</a>
			</div>

			<hr class="horizontal_line">

		</div>
		<?php
		}
		?>


        </div>
       <?php } ?>




        <!-- comment section -->
           			     	 <div class="container">
						<div class="row">
							<hr class="horizontal_line">
							<div class="col-xs-12 col-sm-12">
								<div class="footer_a_c">
									<span class="comments-footer" style="color:#000 !important;font-weight:bold">Commments</span>
									<span><i class="fa fa-caret-down" aria-hidden="true" style="float:right;color:#000 !important;font-weight:bold;margin-top:0.4rem;" id="comment_show_up"></i></span>
										<span><i class="fa fa-caret-up" aria-hidden="true" style="float:right;color:#000 !important;font-weight:bold;display:none;margin-top:0.4rem;" id="comment_show_down"></i></span>
								</div>
							</div>
						</div>

						<div class="row" id="u_comment_show" style="display:none;">
							<div class="col-sm-12 col-xs-12">
								<div class="comment_wrap">
  				        <div class="total-comment">
  				<?php
  				$cSr=0;
  				$sqlC="SELECT * FROM `comments` WHERE videoid='".$videoid."'";
  				$CResult=mysqli_query($conn,$sqlC);
  				while($Crow=mysqli_fetch_array($CResult))
  				{
  				 $cSr=$cSr+1;
  				}
  				echo "Total Comments:-  ".$cSr;
  				?>
  				        </div>
  				         <div class="comment">
  				           <i class="fa fa-user"></i>
  				           <div class="sub-part">
  				           <textarea id="cmtTxt" name="cmtTxt" style="color:#000" placeholder="Add a public comment..."></textarea>
                           </div>
  				         </div>
  				         <div class="submit">
  				         <input type="submit" value="Submit" class="bg-success" style="background:#e97426; color:#fff; border:none; text-transform:uppercase; padding:8px 16px; margin-top:5px;margin-bottom: 20px;font-size: 16px;border-radius: 4px;" onClick="saveComment('<?php echo $videoid; ?>','New user')">
  				         </div>
  				         <div class="load-comment">
  				         <div id="loadmore">
  				         <?php
  				$sqlcmt="SELECT * FROM `comments` WHERE  videoid='".$videoid."' LIMIT 5";
  				$rcmt=mysqli_query($conn,$sqlcmt);
  				while($cmtRow=mysqli_fetch_array($rcmt))
  				{
  				?>

  				       <div class="channel">
  				         <figure><img src="images/vastu.jpg"></figure>
  				         <div class="para">
  				           <h2><?php echo $cmtRow['user']; ?></h2>
  				           <p><?php echo $cmtRow['comment']; ?></p>
  				           <h3><a href="#">Like</a> . <a href="#">Reply</a></h3>
  				         </div>
  				       </div>
  				<?php
  				}
  				?>
  				   </div>
  				       <button data-toggle="collapse" data-target="#demo" onClick="loadMore('<?php echo $videoid; ?>')">Load More Comments</button>
  				       <div id="demo" class="collapse">

  				       </div>
  				       </div>
  				      </div>
							</div>
						</div>
					</div>
        <!-- comment section closed -->


 				  </div>
 				</div>

 				         </div>
 				      </div>

                      <!--  product List start from here -->
						<?php if (!$DEVICE) { ?>
 				      		<div class="second-part">
 				       <h2>Best Seller</h2>
 				         <div id="owl-demo5" class="owl-carousel owl-theme">



 				          <?php
							   $sql22="SELECT * FROM `product` ORDER BY `priority` ";
							   $rs22=mysqli_query($conn,$sql22);
							   while($row22=mysqli_fetch_array($rs22))
							   {
							   ?> <div class="item">
 				                  <a href="prod_desc.php?prod_type=<?php echo $row22['sr']; ?>">
 				                     <img src="<?php echo $row22['url']; ?>">
 				                     <mark>
 				                        <?php echo "Rs. ".$row22['sprice']; ?> <cite>Rs. <span><?php echo $row22['mrp']; ?></span></cite>
 				                        <blockquote class="pull-right"><?php echo intval((1-($row22['sprice']/$row22['mrp']))*100)."% Off"; ?></blockquote>
 				                     </mark>
                                     <cite><?php echo $row22['name']; ?></cite>
 				                  </a>
                                   </div>
                                  <?php
							   }
								  ?>
 				         </div>
 				      </div>
						<?php } ?>
                        <!--  product List close from here -->

 				   </div>
 				</section>



				 <?php if(!$DEVICE) { ?>
                 <!-- Desktop Footer  start here-->
         		 <footer>
            <div class="top-footer">
               <div class="container">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <h2>Quick Links</h2>
                     <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return, Refund and Cancellation Policy </a></li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <h2>WE ARE USING SAFE PAYMENTS</h2>
                     <ul class="payment">
                        <li><img src="images/payment-1.png"></li>
                        <li><img src="images/payment-2.png"></li>
                        <li><img src="images/payment-3.png"></li>
                        <li><img src="images/payment-4.png"></li>
                     </ul>
                     <h3>Secured By:</h3>
                     <ul class="payment">
                        <li><img src="images/payment-5.png"></li>
                        <li><img src="images/payment-6.png"></li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <h2>Contact Detail</h2>
                     <ul class="address">
                        <li><i class="fa fa-map"></i> <span class="footer_text">765, Golf Course Road, Gurgaon 122009 </span></li>
                        <li><i class="fa fa-envelope"></i> <span><a href="mailto:thebhakti.com@gmail.com">thebhakti.com@gmail.com</a></span></li>
                        <li><i class="fa fa-mobile"></i> <span class="footer_text">9999-47-4433</span></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="bottom-footer">
               <div class="container">
                  <p>Copyright &copy; 2017. All Rights Reserved.</p>
               </div>
            </div>
         </footer>
         	     <!-- Desktop Footer  close here-->
				 <?php } else { ?>
             <!-- Mobile Footer  start here-->
            	 <div class="container-fluid padding-0">
			<?php echo $mobile_footer ; ?>
		</div>
        	 <!-- Mobile Footer  close here-->
				 <?php } ?>
      </div>





      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function() {

         var owl = $("#owl-demo5");

         owl.owlCarousel({
         items : 4, //10 items above 1000px browser width
         itemsDesktop : [1000,5], //5 items between 1000px and 901px
         itemsDesktopSmall : [900,3], // betweem 900px and 601px
         itemsTablet: [600,2], //2 items between 600px and 481px
         itemsMobile : [480,1],//2 items between 480px and 0
         navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
          // itemsMobile disabled - inherit from itemsTablet option
         });

         // Custom Navigation Events
         $(".next").click(function(){
         owl.trigger('owl.next');
         })
         $(".prev").click(function(){
         owl.trigger('owl.prev');
         })

         });


				 $("#comment_show_up").click(function(){
						$("#u_comment_show").show();
					 $("#comment_show_down").show();
					 $("#comment_show_up").hide();
				});
			 $("#comment_show_down").click(function(){
				 $("#u_comment_show").hide();
				$("#comment_show_down").hide();
				$("#comment_show_up").show();
			 });

			 $("#show_more").click(function(){
					$("#show_more").hide();
				 $("#show_less").show();
				 $("#video_desc_mobile").show();
			});
		 $("#show_less").click(function(){
			 $("#show_more").show();
			 $("#show_less").hide();
			 $("#video_desc_mobile").hide();
		 });
  </script>
   </body>
</html>
