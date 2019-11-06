// JavaScript Document
function saveNewsubCat()
{
var catt=$("#newCat").val();
	var subCat=$("#newSubcat").val();

	
	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } 
  xmlhttp.onreadystatechange=function() 
   {
    if (this.readyState==4 && this.status==200) 
	{
      alert("You have Created a new Relation with Category and Subcategory"); 
	}
  };
  xmlhttp.open("GET","saveNewsubCat.php?catt="+catt+'&subcat='+subCat,true);
  xmlhttp.send();	
}