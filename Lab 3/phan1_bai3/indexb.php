<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phan1_bai3b</title>
</head>
<body>
    <?php
    $i = 0;
    while ($i < 101) {
      if ($i % 2 != 0) {
        echo $i . "<br>";
      }
      $i++;
    }
    ?>
</body>
</html>