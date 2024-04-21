<?php
   $userName='root';
   $password = '';
   $dbName = 'shop';
   $con = new mysqli("localhost", $userName, $password, $dbName);
  
   if(!$con){
       echo ("Connection failed");
   }
    $id= $_GET['delete_id'];
    $sql = "DELETE FROM PRODUCTS WHERE id=$id";
    $res = mysqli_query($con, $sql);
    if($res){
        echo "<script type='text/javascript'>alert('Success');</script>";
        header('Location: a.php');
        exit;
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
?>
<?php
    mysqli_close($con);
?>