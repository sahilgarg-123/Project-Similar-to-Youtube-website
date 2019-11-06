<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<div class="row">
  <div class="col-lg-12">
  <div class="table">
          <div class="table-responsive current-list">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                   <th><a href="downloadContacts.php?status=<?php echo $_GET['Data']; ?>&val1=<?php echo $_GET['val1']; ?>"?><button class="btn btn-dropbox">Download Report</button></a></th>
                     
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
				  include("connect.php");
				  $status=$_GET['Data'];
				  if($status=='All')
				  {
					  
				  $sql="SELECT * FROM `appContacts` ORDER BY `sr` DESC";
				  $rs=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($rs))
				  {	
				  $mob1=trim($row['Mobb']);
				  if(strlen($mob1)==11)
				  {
					  ?>
                         <tr style="width:120px">
                    <td><?php echo $row['sr']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo trim($row['Mobb'],0); ?></td>   
                     <td><a href="https://wa.me/91<?php echo trim($row['Mobb'],0); ?>?text=धार्मिक videos , भारत के प्रसिद्ध ज्योतिर्लिंग के Live दर्शन के लिए हमारी app  को इनस्टॉल करे | अपनी कुंडली और गृह नक्षत्रो, पारवारिक समस्याओ , प्रेम सम्बंधित समस्याओ , वशीकरण आदि समस्याओ के निदान के लिए नीचे दिए हुए लिंक से क्लिक करके app को इनस्टॉल करे और आचार्य जी से अपनी समायो के लिए बात करे | 👇👇👇👇       https://play.google.com/store/apps/details?id=com.thebhakti" target="new"><Button class="btn btn-whatsapp">Whatsapp</Button></a>
                    
                     </td>               
                  </tr>
                      <?php
				  }
				  else
				  {
				  ?>
                  
                  <tr style="width:120px">
                    <td><?php echo $row['sr']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Mobb']; ?></td>   
                     <td><a href="https://wa.me/<?php echo trim($row['Mobb']); ?>?text=धार्मिक videos , भारत के प्रसिद्ध ज्योतिर्लिंग के Live दर्शन के लिए हमारी app  को इनस्टॉल करे | अपनी कुंडली और गृह नक्षत्रो, पारवारिक समस्याओ , प्रेम सम्बंधित समस्याओ , वशीकरण आदि समस्याओ के निदान के लिए नीचे दिए हुए लिंक से क्लिक करके app को इनस्टॉल करे और आचार्य जी से अपनी समायो के लिए बात करे | 👇👇👇👇       https://play.google.com/store/apps/details?id=com.thebhakti" target="new"><Button class="btn btn-whatsapp">Whatsapp</Button></a>
                    
                     </td>               
                  </tr>
                  
                  <?php
				  }
				  }
				  }
				  else if($status=='donater')
				  {
					   $sql="SELECT * FROM `ContactIdentifier`";
				  $rs=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($rs))
				  {				  
				  ?>
                  <tr style="width:120px">
                    <td><?php echo $row['sr']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['MOB']; ?></td>                 
                  </tr>
                  <?php 
				  }
				  }
				    else if($status=='Mob')
				  {
					   $sql="SELECT * FROM `appContacts` WHERE refMob='".$_GET['val1']."'";
				  $rs=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($rs))
				  {				  
				  ?>
                  <tr style="width:120px">
                    <td><?php echo $row['sr']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Mobb']; ?></td>                 
                  </tr>
                  <?php 
				  }
				  }
				  ?>
                                
                  </tbody>
                </table>
              </div>
            </div>

</div>
</div>
</body>
</html>