<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$ottp=$_GET['ottp'];
header('Location: http://api.msg91.com/api/sendhttp.php?country=91&sender=BHAKTI&route=4&mobiles=9306488494&authkey=261384AngKNXb5F5c59452e&message=Your OTP is :'.$ottp); 
echo "done";
?>
</body>
</html>
