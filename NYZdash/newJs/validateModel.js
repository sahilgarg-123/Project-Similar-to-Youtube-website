// JavaScript Document

function ValidateForm1()
{
	var adds=$("#adds").val();
	var odrid=$("#orderid").val();
	var name=$("#name").val();
	var lname=$("#lname").val();
	var Mob=$("#Mob").val();
	var mail=$("#email").val();
	var city=$("#city").val();
	var state=$("#state").val();
	var pincode=$("#pincode").val();
	var weight2=$("#weight2").val();
	var length=$("#length").val();
	var base=$("#base").val();
	var height=$("#height").val();
	var pValue=$("#value1").val();
	var srr=$("#srr").val();
	var modal = document.getElementById('myModal');
	
	   var prod1=$("#prod1").val();
	   var skucode1=$("#skucode1").val();
	   var qty1=$("#qty1").val();
	   var price1=$("#price1").val();
	   var prod2=$("#prod2").val();
	   var skucode2=$("#skucode2").val();
	   var qty2=$("#qty2").val();
	   var price2=$("#price2").val();
	    var prod3=$("#prod3").val();
	   var skucode3=$("#skucode3").val();
	   var qty3=$("#qty3").val();
	   var price3=$("#price3").val();
	    var prod4=$("#prod4").val();
	   var skucode4=$("#skucode4").val();
	   var qty4=$("#qty4").val();
	   var price4=$("#price4").val();
	    var prod5=$("#prod5").val();
	   var skucode5=$("#skucode5").val();
	   var qty5=$("#qty5").val();
	   var price5=$("#price5").val();
	
	
	var rname; 
	rname=/^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
	
	var rlname;
	rlname=/^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
	
	var rMob = /^[-+]?\d*\.?\d*$/;
	
	var remail = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
	
	var rheight = /^[-+]?\d*\.?\d*$/;
	var radds = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9--_,#]*$/;
	
	
	
   var regexp;
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(odrid))
   {
      alert("Enter Order Id");
      $("#orderid").focus();
      return false;
   }
   else if (odrid == "")
   {
      alert("Enter Order Id");
      $("#orderid").focus();
      return false;
   }
   else if (odrid.length < 8)
   {
      alert("Enter Order Id");
      $("#orderid").focus();
      return false;
   }
   else if (odrid.length > 12)
   {
      alert("Enter Order Id");
      $("#orderid").focus();
      return false;
   }
   if (!radds.test(adds))
   {
      alert("Enter Address");
      $("#adds").focus();
      return false;
   }
   if (adds == "")
   {
      alert("Enter Address");
      $("#adds").focus();
      return false;
   }
   if (adds.length < 10)
   {
      alert("Enter Address");
      $("#adds").focus();
      return false;
   }
   if (adds.length > 90)
   {
      alert("Enter Address");
      $("#adds").focus();
      return false;
   }

   
   else if (!rname.test(name))
   {
      alert("Enter Name");
      $("#name").focus();
      return false;
   }
   else if (name == "")
   {
      alert("Enter Name");
       $("#name").focus();
      return false;
   }
   else if (name.length < 3)
   {
      alert("Enter Name");
       $("#name").focus();
      return false;
   }
   else if (name.length > 30)
   {
      alert("Enter Name");
       $("#name").focus();
      return false;
   }
   
   else if (!rlname.test(lname))
   {
      alert("Enter Last Name");
      $("#lname").focus();
      return false;
   }
   else if (lname == "")
   {
      alert("Enter Last Name");
      $("#lname").focus();
      return false;
   }
   else if (lname.length < 3)
   {
      alert("Enter Last Name");
      $("#lname").focus();
      return false;
   }
   else if (lname.length > 20)
   {
      alert("Enter Last Name");
      $("#lname").focus();
      return false;
   }
   
   else if (!rMob.test(Mob))
   {
      alert("Enter Mobile No");
      $("#Mob").focus();
      return false;
   }
   else if (Mob == "")
   {
      alert("Enter Mobile No");
      $("#Mob").focus();
      return false;
   }
   else if (Mob.length < 10)
   {
      alert("Enter Mobile No");
      $("#Mob").focus();
      return false;
   }
   else if (Mob.length > 10)
   {
      alert("Enter Mobile No");
      $("#Mob").focus();
      return false;
   }
 
   
   else if (!remail.test(mail))
   {
      alert("Enter Email ID");
      $("#email").focus();
      return false;
   }
   else if (mail == "")
   {
      alert("Enter Email ID");
      $("#email").focus();
      return false;
   }
   else if (mail.length < 10)
   {
      alert("Enter Email ID");
      $("#email").focus();
      return false;
   }
   else if (mail.length > 70)
   {
      alert("Enter Email ID");
      $("#email").focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(city))
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   if (city.value == "")
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   if (city.length < 3)
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   if (city.length > 40)
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(state))
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   if (state.value == "")
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   if (state.length < 3)
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   if (state.length > 40)
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(pincode))
   {
      alert("Enter Pin Code");
      $("#pincode").focus();
      return false;
   }
   if (pincode.value == "")
   {
      alert("Enter Pin Code");
      $("#pincode").focus();
      return false;
   }
   if (pincode.length < 6)
   {
      alert("Enter Pin Code");
      $("#pincode").focus();
      return false;
   }
   if (pincode.length > 15)
   {
      alert("Enter Pin Code");
      $("#pincode").focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(weight2))
   {
      alert("Enter Weight");
      $("#weight2").focus();
      return false;
   }
   if (weight2.value == "")
   {
      alert("Enter Weight");
      $("#weight2").focus();
      return false;
   }
   if (weight2.length < 1)
   {
      alert("Enter Weight");
      $("#weight2").focus();
      return false;
   }
   if (weight2.length > 8)
   {
      alert("Enter Weight");
      $("#weight2").focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(length))
   {
      alert("Enter Length");
      $("#length").focus();
      return false;
   }
   if (length.value == "")
   {
      alert("Enter Length");
      $("#length").focus();
      return false;
   }
   if (length.length < 1)
   {
      alert("Enter Length");
      $("#length").focus();
      return false;
   }
   if (length.length > 8)
   {
      alert("Enter Length");
      $("#length").focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(base))
   {
      alert("Enter Base");
      $("#base").focus();
      return false;
   }
   if (base.value == "")
   {
      alert("Enter Base");
      $("#base").focus();
      return false;
   }
   if (base.length < 1)
   {
      alert("Enter Base");
      $("#base").focus();
      return false;
   }
   if (base.length > 8)
   {
      alert("Enter Base");
      $("#base").focus();
      return false;
   }
   
   if (!rheight.test(height))
   {
      alert("Enter Height 2");
      $("#height").focus();
      return false;
   }
   if (height == "")
   {
      alert("Enter Height 1");
      $("#height").focus();
      return false;
   }
   if (height.length < 1)
   {
      alert("Enter Height");
      $("#height").focus();
      return false;
   }
   if (height.length > 8)
   {
      alert("Enter Height");
      $("#height").focus();
      return false;
   }
   if(pValue==1)
   {
	   var prod1=$("#prod1").val();
	   var skucode1=$("#skucode1").val();
	   var qty1=$("#qty1").val();
	   var price1=$("#price1").val();
	   rqty1 = /^[-+]?\d*\.?\d*$/;
	   rprice1 = /^[-+]?\d*\.?\d*$/;
	   
	 	 if ($("#prod1").selectedIndex <= 0)
			{
  			 alert("Select Product");
  			 $("#prod1").focus();
  			 return false;
			}
			
			if(prod1=="")
			{
				alert("Select Product");
  			 $("#prod1").focus();
  			 return false;
			}
			
   if (!rqty1.test(qty1))
   {
      alert("Enter Quantity");
      $("#qty1").focus();
      return false;
   }
   if (qty1 == "")
   {
      alert("Enter Quantity");
      $("#qty1").focus();
      return false;
   }
   if (qty1.length < 1)
   {
      alert("Enter Quantity");
      $("#qty1").focus();
      return false;
   }
   if (qty1.length > 6)
   {
      alert("Enter Quantity");
      $("#qty1").focus();
      return false;
   }
   
   if (!rprice1.test(price1))
   {
      alert("Enter Price");
      $("#price1").focus();
      return false;
   }
   if (price1 == "")
   {
      alert("Enter Price");
      $("#price1").focus();
      return false;
   }
   if (price1.length < 1)
   {
      alert("Enter Price");
      $("#price1").focus();
      return false;
   }
   if (price1.length > 5)
   {
      alert("Enter Price");
      $("#price1").focus();
      return false;
   }




 				 	  	if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						
						if(this.responseText=="done")
						{
						modal.style.display = "none";
						}
						else
						{
							alert(this.responseText);
						}
					}
				};
				xmlhttp.open("GET","saveOrder.php?pV="+pValue+'&orderid='+odrid+'&name='+name+'&lname='+lname+'&Mob='+Mob+'&mail='+mail+'&city='+city+'&state='+state+'&pincode='+pincode+'&weight2='+weight2+'&length='+length+'&base='+base+'&height='+height+'&adds='+adds+'&prod1='+prod1+'&skucode1='+skucode1+'&qty1='+qty1+'&price1='+price1+'&srr='+srr,true);
				xmlhttp.send();
	   
   }
   else if(pValue==2)
   {
	    var prod2=$("#prod2").val();
	   var skucode2=$("#skucode2").val();
	   var qty2=$("#qty2").val();
	   var price2=$("#price2").val();
	   rqty2 = /^[-+]?\d*\.?\d*$/;
	   rprice2 = /^[-+]?\d*\.?\d*$/;
	   
	 	 if ($("#prod2").selectedIndex <= 0)
			{
  			 alert("Select Product");
  			 $("#prod2").focus();
  			 return false;
			}
			
			if(prod2=="")
			{
				alert("Select Product");
  			 $("#prod2").focus();
  			 return false;
			}
			
   if (!rqty2.test(qty2))
   {
      alert("Enter Quantity");
      $("#qty2").focus();
      return false;
   }
   if (qty2 == "")
   {
      alert("Enter Quantity");
      $("#qty2").focus();
      return false;
   }
   if (qty2.length < 1)
   {
      alert("Enter Quantity");
      $("#qty2").focus();
      return false;
   }
   if (qty2.length > 6)
   {
      alert("Enter Quantity");
      $("#qty2").focus();
      return false;
   }
   
   if (!rprice2.test(price2))
   {
      alert("Enter Price");
      $("#price2").focus();
      return false;
   }
   if (price2 == "")
   {
      alert("Enter Price");
      $("#price2").focus();
      return false;
   }
   if (price2.length < 1)
   {
      alert("Enter Price");
      $("#price2").focus();
      return false;
   }
   if (price2.length > 5)
   {
      alert("Enter Price");
      $("#price2").focus();
      return false;
   }
   				
				
 				  	if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						if(this.responseText=="done")
						{
						modal.style.display = "none";
						}
						else
						{
							alert(this.responseText);
						}
					}
				};
				xmlhttp.open("GET","saveOrder.php?pV="+pValue+'&orderid='+odrid+'&name='+name+'&lname='+lname+'&Mob='+Mob+'&mail='+mail+'&city='+city+'&state='+state+'&pincode='+pincode+'&weight2='+weight2+'&length='+length+'&base='+base+'&height='+height+'&adds='+adds+'&prod1='+prod1+'&skucode1='+skucode1+'&qty1='+qty1+'&price1='+price1+'&prod2='+prod2+'&price2='+price2+'&qty2='+qty2+'&skucode2='+skucode2+'&srr='+srr,true);
				xmlhttp.send();
   }
   else if(pValue==3)
   {
	    var prod3=$("#prod3").val();
	   var skucode3=$("#skucode3").val();
	   var qty3=$("#qty3").val();
	   var price3=$("#price3").val();
	   rqty3 = /^[-+]?\d*\.?\d*$/;
	   rprice3 = /^[-+]?\d*\.?\d*$/;
	   
	 	 if ($("#prod3").selectedIndex <= 0)
			{
  			 alert("Select Product");
  			 $("#prod3").focus();
  			 return false;
			}
			
			if(prod3=="")
			{
				alert("Select Product");
  			 $("#prod3").focus();
  			 return false;
			}
			
   if (!rqty3.test(qty3))
   {
      alert("Enter Quantity");
      $("#qty3").focus();
      return false;
   }
   if (qty3 == "")
   {
      alert("Enter Quantity");
      $("#qty3").focus();
      return false;
   }
   if (qty3.length < 1)
   {
      alert("Enter Quantity");
      $("#qty3").focus();
      return false;
   }
   if (qty3.length > 6)
   {
      alert("Enter Quantity");
      $("#qty3").focus();
      return false;
   }
   
   if (!rprice3.test(price3))
   {
      alert("Enter Price");
      $("#price3").focus();
      return false;
   }
   if (price3 == "")
   {
      alert("Enter Price");
      $("#price3").focus();
      return false;
   }
   if (price3.length < 1)
   {
      alert("Enter Price");
      $("#price3").focus();
      return false;
   }
   if (price3.length > 5)
   {
      alert("Enter Price");
      $("#price3").focus();
      return false;
   }


 				  
 				if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						if(this.responseText=="done")
						{
						modal.style.display = "none";
						}
						else
						{
							alert(this.responseText);
						}
					}
				};
				xmlhttp.open("GET","saveOrder.php?pV="+pValue+'&orderid='+odrid+'&name='+name+'&lname='+lname+'&Mob='+Mob+'&mail='+mail+'&city='+city+'&state='+state+'&pincode='+pincode+'&weight2='+weight2+'&length='+length+'&base='+base+'&height='+height+'&adds='+adds+'&prod1='+prod1+'&prod2='+prod2+'&prod3='+prod3+'&skucode1='+skucode1+'&skucode2='+skucode2+'&skucode3='+skucode3+'&qty1='+qty1+'&qty2='+qty2+'&qty3='+qty3+'&price1='+price1+'&price2='+price2+'&price3='+price3+'&srr='+srr,true);
				xmlhttp.send();
   }
   else if(pValue==4)
   {
	    var prod4=$("#prod4").val();
	   var skucode4=$("#skucode4").val();
	   var qty4=$("#qty4").val();
	   var price4=$("#price4").val();
	   rqty4 = /^[-+]?\d*\.?\d*$/;
	   rprice4 = /^[-+]?\d*\.?\d*$/;
	   
	 	 if ($("#prod4").selectedIndex <= 0)
			{
  			 alert("Select Product");
  			 $("#prod4").focus();
  			 return false;
			}
			
			if(prod4=="")
			{
				alert("Select Product");
  			 $("#prod4").focus();
  			 return false;
			}
			
   if (!rqty4.test(qty4))
   {
      alert("Enter Quantity");
      $("#qty4").focus();
      return false;
   }
   if (qty4 == "")
   {
      alert("Enter Quantity");
      $("#qty4").focus();
      return false;
   }
   if (qty4.length < 1)
   {
      alert("Enter Quantity");
      $("#qty4").focus();
      return false;
   }
   if (qty4.length > 6)
   {
      alert("Enter Quantity");
      $("#qty4").focus();
      return false;
   }
   
   if (!rprice4.test(price4))
   {
      alert("Enter Price");
      $("#price4").focus();
      return false;
   }
   if (price4 == "")
   {
      alert("Enter Price");
      $("#price4").focus();
      return false;
   }
   if (price4.length < 1)
   {
      alert("Enter Price");
      $("#price4").focus();
      return false;
   }
   if (price4.length > 5)
   {
      alert("Enter Price");
      $("#price4").focus();
      return false;
   }


 				
 				if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						if(this.responseText=="done")
						{
						modal.style.display = "none";
						}
						else
						{
							alert(this.responseText);
						}
					}
				};
				xmlhttp.open("GET","saveOrder.php?pV="+pValue+'&orderid='+odrid+'&name='+name+'&lname='+lname+'&Mob='+Mob+'&mail='+mail+'&city='+city+'&state='+state+'&pincode='+pincode+'&weight2='+weight2+'&length='+length+'&base='+base+'&height='+height+'&adds='+adds+'&prod1='+prod1+'&prod2='+prod2+'&prod3='+prod3+'&prod4='+prod4+'&skucode1='+skucode1+'&skucode2='+skucode2+'&skucode3='+skucode3+'&skucode4='+skucode4+'&qty1='+qty1+'&qty2='+qty2+'&qty3='+qty3+'&qty4='+qty4+'&price1='+price1+'&price2='+price2+'&price3='+price3+'&price4='+price4+'&srr='+srr,true);
				xmlhttp.send();
   }
   else if(pValue==5)
   {
	   var prod5=$("#prod5").val();
	   var skucode5=$("#skucode5").val();
	   var qty5=$("#qty5").val();
	   var price5=$("#price5").val();
	   rqty5 = /^[-+]?\d*\.?\d*$/;
	   rprice5 = /^[-+]?\d*\.?\d*$/;
	   
	 	 if ($("#prod5").selectedIndex <= 0)
			{
  			 alert("Select Product");
  			 $("#prod5").focus();
  			 return false;
			}
			
			if(prod5=="")
			{
				alert("Select Product");
  			 $("#prod5").focus();
  			 return false;
			}
			
   if (!rqty5.test(qty5))
   {
      alert("Enter Quantity");
      $("#qty5").focus();
      return false;
   }
   if (qty5 == "")
   {
      alert("Enter Quantity");
      $("#qty5").focus();
      return false;
   }
   if (qty5.length < 1)
   {
      alert("Enter Quantity");
      $("#qty5").focus();
      return false;
   }
   if (qty5.length > 6)
   {
      alert("Enter Quantity");
      $("#qty5").focus();
      return false;
   }
   
   if (!rprice5.test(price5))
   {
      alert("Enter Price");
      $("#price5").focus();
      return false;
   }
   if (price5 == "")
   {
      alert("Enter Price");
      $("#price5").focus();
      return false;
   }
   if (price5.length < 1)
   {
      alert("Enter Price");
      $("#price5").focus();
      return false;
   }
   if (price5.length > 5)
   {
      alert("Enter Price");
      $("#price5").focus();
      return false;
   }


 				if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						if(this.responseText=="done")
						{
						modal.style.display = "none";
						}
						else
						{
							alert(this.responseText);
						}
					}
				};
				xmlhttp.open("GET","saveOrder.php?pV="+pValue+'&orderid='+odrid+'&name='+name+'&lname='+lname+'&Mob='+Mob+'&mail='+mail+'&city='+city+'&state='+state+'&pincode='+pincode+'&weight2='+weight2+'&length='+length+'&base='+base+'&height='+height+'&adds='+adds+'&prod1='+prod1+'&prod2='+prod2+'&prod3='+prod3+'&prod4='+prod4+'&skucode1='+skucode1+'&skucode2='+skucode2+'&skucode3='+skucode3+'&skucode4='+skucode4+'&qty1='+qty1+'&qty2='+qty2+'&qty3='+qty3+'&qty4='+qty4+'&price1='+price1+'&price2='+price2+'&price3='+price3+'&price4='+price4+'&prod5='+prod5+'&skucode5='+skucode5+'&qty5='+qty5+'&price5='+price5+'&srr='+srr,true);
				xmlhttp.send();
   }
}

