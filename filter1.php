<?php
if(isset($_POST['submit']))
{
	$host='127.0.0.1';
	$uname='root';
	$passw='';
	$db='bookareana';
	$conn=mysqli_connect($host,$uname,$passw,$db);

	$selected=$_POST["filters"];
	$query="";
if($selected=="genre")
{
	$genre_value=$_POST["genre_name"];
	$query="select * from book where genre='".$genre_value."'";
}
else if($selected=="subject")
{
	$subject_value=$_POST["subject_name"];
	$query="select * from book where subject='".$subject_value."'";
}
else if($selected=="author")
{
	$author_value=$_POST["author_name"];
	$query="select * from book where author='".$author_value."'";
}
else if($selected=="price")
{
	$price_range_value=$_POST["price_range"];
	$query="select * from book where price<= '".$price_range_value."'";
}
else
{
	$bname_value=$_POST["book_name"];
	$query="select * from book where bname like '%".$bname_value."%'";
}




	$result=mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }


}




?>