<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>phan2 bai 3</title>
</head>

<body>
    <script>
    $(document).ready(() => {
        const productId = '<?php echo $_GET['delete_id'] ?>';
        console.log(productId);

        const deleteProduct = (productId) => {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: `server/delete.php?delete_id=${productId}`,
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: (data) => {
                        console.log(data);
                        resolve();
                    },
                    error: (err) => {
                        console.log(err);
                        reject(err);
                    }
                });
            });
        };

        deleteProduct(productId)
            .then(() => {
                alert("This product was deleted successfully");
                window.location.href = "a.php";
            })
            .catch((err) => {
                console.error(err);
            });
    });
    </script>
</body>

</html>