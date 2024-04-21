<?php
            $con = mysqli_connect("localhost", "root", "", "shop");

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id, name, description, price, image FROM products";
            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) :
            ?>
                    <div class="col"> 
                    <a href="detail.php?id=<?= $row['id']; ?>">
                        <div class="card">
        
                            <img src="<?= $row['image']; ?>" alt="" class="card-img-top">
                        
                            <div class="card-body">
                                <span class="text-uppercase fw-bold" ><?= $row['name']; ?></span>
                                <p class="text-secondary fw-bold" >Electronics Components</p>
                                <div>
                                    <span style="font-size: 1.1em" ><?= $row['price']; ?>¥</span>
                                    <button type="button" class="btn3 btn btn-outline-dark rounded-5">Buy now</button>
                                </div>
                            </div>
                        </div>
                     </a>
                    </div>
            <?php
                endwhile;
            } else {
                echo "Error: " . mysqli_error($con);
            }

            mysqli_close($con);
            ?>