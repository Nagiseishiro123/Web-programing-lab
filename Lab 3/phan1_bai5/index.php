<?php
$resultAdd = $resultSub = $resultMul = $resultDiv = $resultPow = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["operation"])) {
        $firstNumber = floatval($_POST["firstNumber"]);
        $secondNumber = floatval($_POST["secondNumber"]);
        $operation = $_POST["operation"];

        switch ($operation) {
            case "add":
                $resultAdd = $firstNumber + $secondNumber;
                break;
            case "sub":
                $resultSub = $firstNumber - $secondNumber;
                break;
            case "mul":
                $resultMul = $firstNumber * $secondNumber;
                break;
            case "div":
                $resultDiv = $secondNumber != 0 ? $firstNumber / $secondNumber : "Infinity";
                break;
            case "pow":
                $resultPow = pow($firstNumber, $secondNumber);
                break;
            default:
                $result = "Invalid operation";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"/>
    <style>
        body {
            background-image: url("math.jpg");
        }
    </style>
    <title>Calculator</title>
</head>
<body>
<div class="container my-5 d-flex justify-content-center">
    <div class="calculator-box p-4 border rounded bg-secondary">
        <!-- Addition -->
        <form method="POST">
            <div class="add d-flex gap-2 align-items-center">
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="firstNumber"
                        placeholder="Input"
                        required
                />
                <div class="fs-4 fw-bold text-light">+</div>
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="secondNumber"
                        placeholder="Input"
                        required
                />
                <button
                        type="submit"
                        name="operation"
                        value="add"
                        class="btn btn-primary btn-lg"
                >
                    =
                </button>
                <div
                        class="result-add fs-2 fw-bold result-box text-light"
                ><?php echo $resultAdd; ?></div>
            </div>
        </form>

        <!-- Subtraction -->
        <form method="POST">
            <div class="sub d-flex gap-2 align-items-center">
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="firstNumber"
                        placeholder="Input"
                        required
                />
                <div class="fs-1 fw-bold text-light">-</div>
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="secondNumber"
                        placeholder="Input"
                        required
                />
                <button
                        type="submit"
                        name="operation"
                        value="sub"
                        class="btn btn-primary btn-lg"
                >
                    =
                </button>
                <div
                        class="result-sub fs-2 fw-bold result-box text-light"
                ><?php echo $resultSub; ?></div>
            </div>
        </form>

        <!-- Multiplication -->
        <form method="POST">
            <div class="multiply d-flex gap-2 align-items-center">
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="firstNumber"
                        placeholder="Input"
                        required
                />
                <div class="fs-1 fw-bold text-light">*</div>
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="secondNumber"
                        placeholder="Input"
                        required
                />
                <button
                        type="submit"
                        name="operation"
                        value="mul"
                        class="btn btn-primary btn-lg"
                >
                    =
                </button>
                <div
                        class="result-mul fs-2 fw-bold result-box text-light"
                ><?php echo $resultMul; ?></div>
            </div>
        </form>

        <!-- Division -->
        <form method="POST">
            <div class="division d-flex gap-2 align-items-center">
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="firstNumber"
                        placeholder="Input"
                        required
                />
                <div class="fs-1 fw-bold text-light">/</div>
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="secondNumber"
                        placeholder="Input"
                        required
                />
                <button
                        type="submit"
                        name="operation"
                        value="div"
                        class="btn btn-primary btn-lg"
                >
                    =
                </button>
                <div
                        class="result-div fs-2 fw-bold result-box text-light"
                ><?php echo $resultDiv; ?></div>
            </div>
        </form>

        <!-- Power -->
        <form method="POST">
            <div class="pow d-flex gap-2 align-items-center">
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="firstNumber"
                        placeholder="Input"
                        required
                />
                <div class="fs-4 fw-bold text-light">^</div>
                <input
                        type="text" 
                        class="form-control form-control-lg w-25"
                        name="secondNumber"
                        placeholder="Input"
                        required
                />
                <button
                        type="submit"
                        name="operation"
                        value="pow"
                        class="btn btn-primary btn-lg"
                >
                    =
                </button>
                <div
                        class="result-pow fs-2 fw-bold result-box text-light"
                ><?php echo $resultPow; ?></div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
