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
    <div style="display: flexbox; width: 100%; margin: 10px;">
        <form id="add-product" action="" method="post">
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="form-group col-md-12">
                    <label for="ftitle">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" />
                </div>
            </div>
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="form-group col-md-12">
                    <label for="ftitle">Price</label>
                    <input type="number" class="form-control" id="price" name="price" />
                </div>
            </div>
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="form-group col-md-12">
                    <label for="fdescription">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                </div>
            </div>
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="form-group col-md-12">
                    <label for="fdescription">Image</label>
                    <input type="text" class="form-control" id="image" name="img" />
                    <span id="image-error" class="text-danger"></span>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
    function validateForm() {
        const name = $("#name").val();
        const price = $("#price").val();
        const description = $("#description").val();
        const image = $("#image").val();

        let errorMessage = "";

        // Kiểm tra name có độ dài từ 5 đến 40 kí tự
        if (name.length < 5 || name.length > 40) {
            errorMessage += "Name must be between 5 and 40 characters.\n";
        }

        // Kiểm tra description có độ dài tối đa 5000 kí tự
        if (description.length > 5000) {
            errorMessage += "Description must not exceed 5000 characters.\n";
        }

        // Kiểm tra price là số thực
        if (isNaN(parseFloat(price))) {
            errorMessage += "Price must be a number.\n";
        }

        // Kiểm tra image có độ dài tối đa 255 kí tự
        if (image.length > 255 || image.length <= 0) {
            errorMessage += "Image must not null or exceed 255 characters.\n";
        }

        if (errorMessage === "") {
            const product = {
                name: name,
                price: price,
                description: description,
                image: image
            };

            $.ajax({
                url: "server/add.php",
                type: "POST",
                data: JSON.stringify(product),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: (data) => {
                    alert("Success");
                    console.log(data);
                    window.location.href = "a.php";
                },
                error: (errorThrown) => {
                    console.log(errorThrown);
                    alert("Error: " + errorThrown);
                }
            });
        } else {
            alert(errorMessage);
        }
    }

    $(document).ready(() => {
        $("#add-product").submit((event) => {
            event.preventDefault();
            validateForm();
        });
    });
    </script>
</body>

</html>