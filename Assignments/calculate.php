<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #4CAF50;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Arithmetic Operation Result</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero</p>";
                }
                break;
            case 'modulo':
                if ($num2 != 0) {
                    $result = $num1 % $num2;
                } else {
                    echo "<p>Error: Modulus by zero</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operation</p>";
                break;
        }

        echo "<p>Result: $result</p>";
    } else {
        echo "<p>Error: Form not submitted</p>";
    }
    ?>

</body>
</html>
