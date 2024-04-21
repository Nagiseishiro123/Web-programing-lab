<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phan1_bai4</title>
    <style>
      table,
      th,
      td {
        margin: auto;
        border: 1px solid;
      }
      th,
      td {
        text-align: center;
        padding: 12px;
      }
      tr {
        background-color: yellow;
      }
      table {
        width: fit-content;
      }
      table {
        border-collapse: collapse;
      }
    </style>
</head>
<body>
  <table>
    <?php for ($i = 1; $i <= 7; $i++) {
      echo "<tr>";

      for ($j = 1; $j <= 7; $j++) {
        $mul = $i * $j;
        echo "<td> $mul </td>";
      }

      echo "</tr>";
    } ?>
  </table>

</body>
</html>