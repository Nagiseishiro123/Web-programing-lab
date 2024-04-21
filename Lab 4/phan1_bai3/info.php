<?php 
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Info</title>
    <style>
    body {
        background-image: url(bg.webp) !important;
    }

    .information {
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card information">
                    <div class="card-body">
                        <h3 class="card-title text-2xl font-bold mb-4">Welcome <?php echo $_SESSION['name']; ?></h3>
                        <a href="logout.php">
                            <button class="btn btn-danger">Log out</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>