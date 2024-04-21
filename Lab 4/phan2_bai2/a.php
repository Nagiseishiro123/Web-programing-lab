<!-- list of all product in database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    body {
        margin: 50px;
    }

    .fun {
        width: 10vw;
        margin: 3px;
    }

    img {
        width: 100%;
        height: 100%;
    }
    </style>
    <title>phan2 bai 3</title>
</head>

<body>
    <script>
    fetch('server/getAll.php')
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Request failed. Status: ' + response.status);
            }
        })
        .then(products => {
            var table = document.getElementById("ptable");
            products.forEach(element => {
                var row = table.insertRow();
                row.insertCell().innerHTML = element.id;
                row.insertCell().innerHTML = element.name;
                row.insertCell().innerHTML = element.description;
                row.insertCell().innerHTML = element.price;
                row.insertCell().innerHTML = '<a href="detail.php?detail_id=' + element.id +
                    '"><button type="button" class="btn btn-primary">Detail</button></a> ' +
                    '<a href="c.php?edit_id=' + element.id +
                    '"><button type="button" class="btn btn-warning">Edit</button></a>' +
                    '<a href="d.php?delete_id=' + element.id +
                    '"><button type="button" class="btn btn-danger" onclick="return confirm(\'You want to delete ?\')">Delete</button></a>';
            });
        })
        .catch(error => {
            console.error(error);
        });
    </script>
    <div class="container">
        <!-- Button -->
        <a href="b.php"><button type="button" class="btn btn-primary" style="margin: 30px;">Creare New
                Product</button></a>
        <!-- Table with Button -->
        <table class="table table-bordered table-hover table-striped" id="ptable">
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

            </tbody>
        </table>
    </div>
</body>

</html>