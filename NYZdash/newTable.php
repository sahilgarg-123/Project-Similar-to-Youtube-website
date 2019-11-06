<?php
 include("connect.php");
 $status=$_GET['status'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
 <div class="container">        
  <table class="table table-bordered" style="width:3000px;height:120px; border:groove" cellpadding="5" cellspacing="5">
                  <thead>
                  <tr>
                  <?php
				  if($status=="READY")
				  {
				  ?>
                  <th>Ops</th>
                  <?php
				  }
				  ?>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Products</th>
                    <th>OrderID</th>
                    <th>Price</th>
                    <th>Agent</th>
                    <th>Mobile</th>
                    <th>Payments</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Comment</th>
                    <th>Notes</th>
                     <th><a href="downloadExcel.php?status=<?php echo $_GET['status']; ?>"?><button class="btn btn-dropbox">Download Report</button></a></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
				 
				  $sql="SELECT * FROM `saleProduct` WHERE status='".$status."'";
				  $rs=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($rs))
				  {				  
				  ?>
                  <tr style="width:120px">
                  <?php
				  if($status=="READY")
				  {
				  ?>
                  <td><button title="Create ship rocket order" id="<?php echo $row['sr']; ?>" onclick="showModel(<?php echo $row['sr']; ?>)">Create Order</button></td>
                  <?php
				  }
				  ?>
                    <td><?php echo $row['sr']; ?></td>
                    <td><?php echo $row['client']; ?></td>
                    <td><?php echo $row['product']; ?></td>
                    <td><?php echo $row['orderid']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td title="Refrenced by"><?php echo $row['user']; ?></td>
                    <td><?php echo $row['clientMob']; ?></td>
                     <td title="Payment status : if paid then show(Approved) otherwise shows(Pending)"><?php echo $row['payment']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                    <td>   
                    <?php
					if($status=="RTO PENDING")
					{
					?>                                
                    <select id="status" style="width:120px" onchange="saveStatus(<?php echo $row['sr']; ?>)">
                    <option value="">Choose Status</option>
                    <option value="RTO CONFIRM">RTO Confirm</option>
                    </select>
                    
                    <?php
					}
					else if($status=="RTO CONFIRM")
					{
						?>
                             <select id="status" style="width:120px" onchange="saveStatus(<?php echo $row['sr']; ?>)">
                    <option value="">No List A/V</option>
                    
                    </select>
                        <?php
					}
					
					
					?>
                    
                      <select id="status" name="status" style="width:120px" onchange="saveStatus(<?php echo $row['sr']; ?>)">
                    <option value="">Choose Status</option>
                    <option value="NEW">New</option>
                    <option value="PENDING">Pending</option>
                    <option value="READY">Ready to ship</option>
                    <option value="CONFIRM">Confirm</option>
                    <option value="DEL">Delivered</option>                    
                    </select>
                   
                    
                    
                    
                    </td>
                    <td>
                    <input style="width:100px" type="text" id="<?php echo $row['sr']; ?>" placeholder="Comments here" required><button id="btnsave" onclick="saveComment(<?php echo $row['sr']; ?>)">Save</button></td> 
                    <td>
                    <div style="overflow:scroll; height:60px">
                    <?php
					$sql12="SELECT * FROM `ordercmt` WHERE srr='".$row['sr']."'";
					$rs12=mysqli_query($conn,$sql12);
					while($rowR=mysqli_fetch_array($rs12))
					{						
					echo $rowR['comment'].'<br>';	
					
					}
					?>
                    </div></td>
                  </tr>
                  <?php
				  }
				  ?>
                                
                  </tbody>
                </table>
              </div>
           
</body>
</html>