<?php
  # compbooks_rec.php
  # this server script receives data from compbooks.html
  # it will find the books that have been ordered with quantities
  # calculate the total price, and output the order with the 
  # total price in an html document, that will be returned to the client

?>

<html>
<!-- in php, outside the sections we're just outputting the html tags that
     are a part of creating the response document -->
<head>
  <title>Order Response from Compbooks</title>
  <style type="text/css">
  p.ord {border-style:solid;
         border-width:10px;
         padding:10px;}
  </style>
</head>
<body>
<h2>CompBooks Order Confirmation</h2>

<?php
   // we have to find which books were ordered and for those ordered the quantity
   // variables are created for input values by the user
   $name = $_POST["fn"];
   $ord1 = $_POST["Javascript_Made_Simple"];
   $ord2 = $_POST["Perl_for_Beginners"];
   $ord3 = $_POST["PHP_Objects"];
   $ord4 = $_POST["Inside_DOM"];
   $quan1 = $_POST["jsquan"];
   $quan2 = $_POST["perlquan"];
   $quan3 = $_POST["phpquan"];
   $quan4 = $_POST["domquan"];
   $totalPrice;
   
   //prints out the customers name above the data box
   echo "<p> Thanks for your order, " . $name . "</p>";   
   echo "<p class='ord'>";
   echo "Your order: <br/>";
   
   //if "Javascript Made Simple" was selected, outup the quantity given and price*quantity
   //price of those books are added to the total price variable
	if($ord1 == "8.00"){
	 echo "Javascript Made Simple: quantity - " . $quan1 . ", price - $" 
	 . $ord1*$quan1. "<br/>";
	 $totalPrice = $totalPrice + ($ord1 * $quan1);
	}
	
	 //if "Perl for Beginners" was selected, outup the quantity given and price*quantity
	 //price of those books are added to the total price variable
	if($ord2 == "12.00"){
	 echo "Perl for Beginners: quantity - " . $quan2 . ", price - $" 
	 . $ord2*$quan2. "<br/>";
	 $totalPrice = $totalPrice + ($ord2 * $quan2);
	}
	
	 //if "PHP Objects" was selected, outup the quantity given and price*quantity
	 //price of those books are added to the total price variable
	if($ord3 == "3.00"){
	 echo "PHP Objects: quantity - " . $quan3 . ", price - $" 
	 . $ord3*$quan3. "<br/>";
	 $totalPrice = $totalPrice + ($ord3 * $quan3);
	}
	
	 //if "Inside DOM" was selected, outup the quantity given and price*quantity
	 //price of those books are added to the total price variable
	if($ord4 == "11.00"){
	 echo "Inside DOM: quantity - " . $quan4 . ", price - $" 
	 . $ord4*$quan4. "<br/>";
	 $totalPrice = $totalPrice + ($ord4 * $quan4);
	}
	
	echo "<br/>";
	//total price of all selected books
	echo "Total Price = $". $totalPrice;
	echo "</p>";
  
  

    



?>

</body>
</html>