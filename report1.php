<?php
$host='127.0.0.1';
	$uname='root';
	$passw='';
	$db='bookareana';
	$conn=mysqli_connect($host,$uname,$passw,$db);
	if($_POST['report1']=="cod")
	{
		echo "<b> Total Price   &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp  NO Of Books Sold</b> <br>";
		$query="select sum(price),count(pay_mode) from book,sale where book.bname=sale.bname group by pay_mode having pay_mode='cod'";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }



	}
	if($_POST['report1']=="card")
	{
		echo "<b> Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";
		$query="select sum(price),count(pay_mode) from book,sale where book.bname=sale.bname group by pay_mode having pay_mode='cod'";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="genre")
	{
				echo "<b> Genre &nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";

		$query="select genre,sum(price),count(*) from book,sale where book.bname=sale.bname group by genre";

			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="subject")
	{
				echo "<b>Subject Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";

		$query="select subject,sum(price),count(*) from book,sale where book.bname=sale.bname group by subject";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="year")
	{
				echo "<b>Year &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";

		$query="select year(sale_date),sum(price),count(*) from book,sale where book.bname=sale.bname group by year(sale_date)";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="month")
	{
				echo "<b>Month &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";

		$query="select month(sale_date),sum(price),count(*) from book,sale where book.bname=sale.bname group by month(sale_date)";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="new")
	{
		echo "<b> Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";
	$query="select sum(price),count(*) from book,sale where book.bname=sale.bname group by bcondition having bcondition='new'";
	$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="good")
	{
				echo "<b> Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";

			$query="select sum(price),count(*) from book,sale where book.bname=sale.bname group by bcondition having bcondition='good'";

			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="poor")
	{
				echo "<b> Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";
			$query="select sum(price),count(*) from book,sale where book.bname=sale.bname group by bcondition having bcondition='poor'";

			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}
	if($_POST['report1']=="avg")
	{
				echo "<b> Total Price  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No of Books Sold </b><br>";

			$query="select sum(price),count(*) from book,sale where book.bname=sale.bname group by bcondition having bcondition='avg'";

				$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }

	}


?>