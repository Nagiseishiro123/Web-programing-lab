<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: info.php');
    exit;
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['username'], $_POST['password']) || empty($_POST['username']) || empty($_POST['password'])) {
        $error = 'Please fill in both fields.';
    } else {
        session_regenerate_id();
        $_SESSION['login'] = true;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
            $cookie_name = 'username';
            $cookie_value = $_POST['username'];
            $cookie_expiration = time() + (86400 * 30); // 30 ngày
            setcookie($cookie_name, $cookie_value, $cookie_expiration, '/');
        }

        header('Location: info.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        background-image: url(bg.webp) !important;
    }

    .login-container {
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
                <div class="card login-container">
                    <div class="card-body">
                        <h1 class="card-title text-2xl py-5">Login</h1>
                        <?php echo $error; ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                            class="flex flex-col gap-2">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="username" placeholder="Username" id="username"
                                    class="form-control">
                            </div>
                            <div class="input-group" style="margin-top: 10px">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Password" id="password"
                                    class="form-control">
                            </div>
                            <div class="form-check my-3">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember me</label>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>