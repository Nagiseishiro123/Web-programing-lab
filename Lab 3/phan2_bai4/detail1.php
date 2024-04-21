<?php
$con = mysqli_connect("localhost", "root", "", "shop");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the product ID from the URL
$product_id = $_POST['id'];

// Retrieve product details from the database based on the product ID
$sql = "SELECT id, name, description, price, image FROM products
        WHERE products.id = $product_id";

$result = mysqli_query($con, $sql);

if ($result) {
    $product_details = mysqli_fetch_assoc($result);
?>
         
            <div>
              <a href="#" class="banner">Home</a>
              >
              <a href="#" class="banner"
                >ELECTRONICS COMPONENTS</a
              >
              >
              <a href="#" class="banner"
                ><?= $product_details['name']; ?></a
              >
            </div>
    <div class="row mt-3">
        <div class="col-lg">
           <img src="<?= $product_details['image']; ?>" alt="" class="w-100" style="border: 2px solid #ddd; border-radius: 8px; padding: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
        </div>
        <div class="col-lg-5">
            <h2 class="gojo fw-bold fs-3"><?= $product_details['name']; ?> </h2>
            <p class="fw-bold fs-3">Price: <?= $product_details['price']; ?>¥</p>
            <p><?= $product_details['description']; ?></p>
            <p class="fw-bold fs-5">Quantity:</p>
                <div class="d-flex justify-content-between align-items-center">
                  <input
                    type="number"
                    name="quantity"
                    id="quantity"
                    style="width: 80px; height: 35px"
                    class="px-2"
                  />
                  <button
                    class="bg-black text-white px-4 shadow-lg fw-bold"
                    style="height: 35px"
                  >
                    ADD TO CART
                  </button>
                  <i class="fa-sharp fa-solid fa-pipe"></i>
                </div>
        </div>
       
    </div>
<?php
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>