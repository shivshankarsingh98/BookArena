
<!DOCTYPE html>
<html>
<head>
<title>my webpage</title>
<script>
function myFunction(x) {
  document.getElementById(x).style.background = "#202060";
}
function myFunction2(x) {
  document.getElementById(x).style.background = "#ffffff";
}
</script>

<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
<?php
$host='127.0.0.1';
  $uname='root';
  $passw='';
  $db='bookareana';
  $conn=mysqli_connect($host,$uname,$passw,$db);
if(mysqli_connect_errno()){
    echo '<h1> <font color="ffffff">failed to connect</font></h1>'.mysqli_connect_errno();
}

$msg='';
$msgClass='';
if(filter_has_var(INPUT_POST,'submit')){
    //echo 'submitted';
    $book = htmlspecialchars($_POST['book_name']);
    $cost1 = htmlspecialchars($_POST['cost']);
    $genre1 = htmlspecialchars($_POST['genre']);
    $subject1 = htmlspecialchars($_POST['subject']);
    $publication1 = htmlspecialchars($_POST['publication']);
    $edition1 = htmlspecialchars($_POST['edition']);
    $author1 = htmlspecialchars($_POST['author']);
    $condition1 = htmlspecialchars($_POST['condition']);
    //$cost1 = htmlspecialchars($_POST['cost']);

    //required feilds
    if(!empty($book) && !empty($cost1) && !empty($genre1) && !empty($subject1) && !empty($publication1) && !empty($edition1) && !empty($author1) && !empty($condition1)){
        //echo 'passed';
        if(filter_var($cost1, FILTER_VALIDATE_INT)===false){
            $msg='enter integer in cost feild';
            $msgClass='alert-danger';
        }
        if(filter_var($edition1, FILTER_VALIDATE_INT)===false){
            $msg='enter integer in edition feild';
            $msgClass='alert-danger';
        }
        else{
            $query ="INSERT INTO book(bname,author,edition,bcondition,publication,price,subject,genre) VALUES ('$book','$author1','$edition1','$condition1','$publication1','$cost1','$subject1','$genre1')";
            $resul=mysqli_query($conn,$query);
            $msg='sucessful,thank you';
            $msgClass='alert-success';


        }
    }
    else{
        $msg='all feilds required';
        $msgClass='alert-danger';
    }

    

}
?>
<head>
<body id="b1">
<style>
#b1{
    background-color:#6600cc;
  background-color:#202060;
 /* background-color:#111111;*/
  background-repeat: no-repeat;
  background-size: 1400px 650px;
  font-size:0px;

}
#h1{
    text-align:center;
    font-size: 50px;
    font-style:italic;
}
#div1{
    /*padding-left: 500px;*/
    border-radius: 15px;
    height:483px;
    width:350px;
   background-color: #8c8cd9;
  /* background-color:#FF851B;
  /* margin-left: 500px;*/
  
   margin: 10px 0px 0px 500px;
  /* font-size: 18px;*/
}
#i1,#i2,#i3,#i4,#i5,#i6,#i7,#i8{
    border-radius: 5px;
width:90%;
height: 90%;
padding: 5px 20px;

};
#l1,#l2,#l3,#l4,#l5,#l6,#l7{
    font-style:italic;
    font-size:9px;
}
#d2{
    font-size:18px;
}
#t1{
    
    /*margin-bottom:40px;*/
    font-size:18px;
    
}
#f1{
    margin-left: 25px;
}

</style>
<h1 id="h1"><font color="#d9d9f2">book arena</font></h1>
<div id="div1">
    <?php if($msg!=''): ?>
    <div class="container">
       <div id="d2"class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form id="f1" action="sell1.php" method="POST">
     <table id="t1" columnspan="20" cellspacing="15" >
         <th><br><br></th><th></th>
       <tr><td><label id="l1">book_name</label></td><td><input type="text" name="book_name" id="i1" value="<?php echo isset($_POST['book_name'])? $book : ''; ?>"></td></tr>
       <br><tr><td><label id="l4">author</label></td><td><input type="text" name="author" id="i4" placeholder="" value="<?php echo isset($_POST['author'])? $author1: ''; ?>"></td></tr>
       <br><tr><td><label id="l2">price</label></td><td><input type="text" name="cost" id="i2" placeholder="cost in rupees" value="<?php echo isset($_POST['cost'])? $cost1: ''; ?>"></td></tr>
       <br><tr><td><label id="l5">edition</label></td><td><input type="text" name="edition" id="i6" placeholder="number" value="<?php echo isset($_POST['edition'])? $edition1: ''; ?>"></td></tr>
       <br><tr><td><label id="l6">publication</label></td><td><input type="text" name="publication" id="i6" placeholder="" value="<?php echo isset($_POST['publication'])? $publication1: ''; ?>"></td></tr>
       <br><tr><td><label id="l7">subject</label></td><td><input type="text" name="subject" id="i7" placeholder="" value="<?php echo isset($_POST['subject'])? $subject1: ''; ?>"></td></tr>
       <br><tr><td><label id="l8">genre</label></td><td><input type="text" name="genre" id="i8" placeholder="" value="<?php echo isset($_POST['cost'])? $genre1: ''; ?>"></td></tr>
       <br><tr><td><label id="l3">condition</label></td><td><select id="i3" name="condition"><option id="so1" value="poor">poor</option><option id="so2" value="good">good</option><option id="so3" value="average">average</option></select></td></tr>
    <tr><td><input type="submit" value="submit" name="submit" id="ds" onmouseover="myFunction(this.id)" onmouseout="myFunction2(this.id)"></td></tr>
    </table>
    </form>
</div>
</div>
</body>
</html>