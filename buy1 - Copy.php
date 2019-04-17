<?php

	$host='127.0.0.1';
	$uname='root';
	$passw='';
	$db='bookareana';
	$conn=mysqli_connect($host,$uname,$passw,$db);
	$bname=$_POST['bookname'];
	
	session_start();
	$email=$_SESSION['username'];
	if(isset($_POST['Buy']))
	{
	$condition=$_POST['CONDITION'];
	$paymode=$_POST['PayMode'];
	$cardno=NULL;
	if(!strcmp($paymode,"CARD"))
	{
		$cardno=$_POST['CARD_NUMBER'];
	}
	
	$query="insert into sale values('$email','$bname',curdate(),'$paymode','$cardno')";
	$query1="select * from book where bname='".$bname."'";

	mysqli_query($conn, $query);

	$result=mysqli_query($conn, $query1);
	while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val." " ;

          }
         echo "<br>";
        }
    }
    if(isset($_POST['addtocart']))
	{
	//session_start();
	
	echo "Your Choice is added to your cart";
	$query="insert into cart values('$email','$bname')";
	mysqli_query($conn, $query);
	}
	if(isset($_POST['showcart']))
	{
		$query="select cart_bname from cart where email='".$email."'";
		//$result=mysql_query($conn,$query);
		$result=mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result)){
          foreach($row as $val) {
              echo $val ;

          }
         echo "<br>";
        }

	}


        
  //session_start();
  //$_SESSION['bname1']=$bname;
  







?>