<?php
// Initialize variables to store form data and error messages
$firstName = $lastName = $email = $password = $dob = $gender = $country = $about = "";
$firstNameErr = $lastNameErr = $emailErr = $passwordErr = $dobErr = $genderErr = $countryErr = $aboutErr = "";

// Function to sanitize user input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to display error messages
function showError($error) {
    if (!empty($error)) {
        echo '<span class="text-danger">' . $error . '</span>';
    }
}

// Server-side validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate First Name
    if (empty($_POST["fname"])) {
        $firstNameErr = "First Name is required";
    } else {
        $firstName = sanitizeInput($_POST["fname"]);
        // Additional validation if needed
    }

    // Validate Last Name
    if (empty($_POST["lname"])) {
        $lastNameErr = "Last Name is required";
    } else {
        $lastName = sanitizeInput($_POST["lname"]);
        // Additional validation if needed
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = sanitizeInput($_POST["password"]);
        // Additional validation if needed
    }

    // Validate Date of Birth
    if (empty($_POST["dob"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dob = sanitizeInput($_POST["dob"]);
        // Additional validation if needed
    }

    // Validate Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = sanitizeInput($_POST["gender"]);
        // Additional validation if needed
    }

    // Validate Country
    if ($_POST["country"] == "Choose country") {
        $countryErr = "Please choose your country";
    } else {
        $country = sanitizeInput($_POST["country"]);
        // Additional validation if needed
    }

    // Validate About
    $about = sanitizeInput($_POST["about"]);
    if (strlen($about) > 10000) {
        $aboutErr = "Maximum 10000 characters allowed";
    }

    // If all validation passes, you can perform further actions, such as storing data in a database
    // For this example, we'll just display a success message
    if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($passwordErr)
        && empty($dobErr) && empty($genderErr) && empty($countryErr) && empty($aboutErr)) {
        echo "Registration successful!";
        // Perform additional actions (e.g., store data in a database) here
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign up</title>
    <style>
        body{
            background-image: url(k.jpg);
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <section class="bg-white border border-4 rounded-lg w-75 mx-auto p-4">
            <div class="py-4">
                <h2 class="mb-4 text-3xl font-bold">Registration Form</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="<?php echo $firstName; ?>">
                        <?php showError($firstNameErr); ?>
                    </div>

                    <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="<?php echo $lastName; ?>">
                    <?php showError($lastNameErr); ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
                    <?php showError($emailErr); ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
                    <?php showError($passwordErr); ?>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">Birthday</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $dob; ?>">
                    <?php showError($dobErr); ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="others" value="Others">
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    <?php showError($genderErr); ?>
                </div>

                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select name="country" id="country" class="form-select">
                            <option value="Choose country">Choose country</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Australia">England</option>
                            <option value="United States">United States</option>
                        </select>
                    <?php showError($countryErr); ?>
                </div>

                <div class="mb-3">
                    <label for="about" class="form-label">About</label>
                    <textarea id="about" name="about" rows="5" class="form-control" placeholder="Write about you ...."><?php echo $about; ?></textarea>
                    <?php showError($aboutErr); ?>
                </div>

                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
