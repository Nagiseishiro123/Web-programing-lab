<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
      body{
        margin: 50px;
      }
      .fun{
        width: 10vw;
        margin: 3px;
      }
      img{
        width: 100%;
        height: 100%;
      }
    </style>
    <title>phan2 bai 3</title>
  </head>
  <body>
    <div class="container">
      <!-- Button -->
      <a href="b.php"><button type="button" class="btn btn-primary" style="margin: 30px;">Creare New Product</button></a>
      <!-- Table with Button -->
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
              <th scope="col" style="width: 10px;">ID</th>
              <th scope="col" style="width: 50px;">Name</th>
              <th scope="col" style="width: 150px;">Description</th>
              <th scope="col" style="width: 30px;">Price</th>
              <th scope="col" style="width: 100px;">Action</th>
          </tr>
        </thead>
        <tbody>

<?php
       $userName='root';
       $password = '';
       $dbName = 'shop';
       $con = new mysqli("localhost", $userName, $password, $dbName);
      
       if(!$con){
           echo ("Connection failed");
       }   
    $sql = 'SELECT * FROM PRODUCTS';
    $res = mysqli_query($con, $sql );
    if($res){
        while($row = mysqli_fetch_assoc($res)){
            $proId = $row['id'];
            $proName = $row['name'];
            $proDes = $row['description'];
            $proPrice= $row['price'];
            echo '
            <tr>
            <th scope="row">'.$proId.'</th>
            <td>'.$proName.'</td>
            <td>'.$proDes.'</td>
            <td>'.$proPrice.'</td>
            <td>
              <a href="detail.php?detail_id='.$proId.'"><button type="button" class="btn btn-primary">Read</button></a>
              <a href="c.php?edit_id='.$proId.'"><button type="button" class="btn btn-warning">Edit</button></a>
               
              <a href="d.php?delete_id='.$proId.'" onclick="return confirmDelete();">
              <button type="button" class="btn btn-danger">Delete</button>
            </a>
            </td>
          </tr>
          <script>
              function confirmDelete() {
              return confirm("Are you sure you want to delete?");
               }
          </script>
            ';
            
        }
    }
?>


          
        </tbody>
      </table>
      
    </div>
  </body>
</html>


<?php
    mysqli_close($con);
?>