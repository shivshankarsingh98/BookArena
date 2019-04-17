<?php

	$host='127.0.0.1';
	$uname='root';
	$passw='';
	$db='bookareana';
	$conn=mysqli_connect($host,$uname,$passw,$db);
	$query="select email,bname,sale_date from sale";
	echo "<b>Email&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   Bookname&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp    SaleDate</b><br>";


	$result=mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val."  " ;

          }
         echo "<br>";
        }



	?>
