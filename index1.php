<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" name="myForm" action="index.php">
    <div class="caculator">
        <h2>Future Caculator</h2>
        <?php
        $nowValue = $_POST["inventAmount"];
        $rate = $_POST["interestRate"];
        $year = $_POST["numYear"];
        if (!empty($nowValue) && !empty($rate) && !empty($year)) {
            for ($count = 1; $count <= $year; $count++) {
                $futureValue = ($nowValue + ($nowValue * $rate * 0.01));
                $nowValue = $futureValue;
            }
            echo("<h4>" . "Inventment Amount: $" . $nowValue . "</h4>" . "<br>");
            echo("<h4>" . "Yearly Interest Rate: %" . $rate . "</h4>" . "<br>");
            echo("<h4>" . "Number of Years: " . $year . "</h4>" . "<br>");
            echo("<h4>" . "Future Value: $" . $futureValue . "</h4>" . "<br>");
        } else {
            echo ("<h4>" . "Xin moi nhap lai !" . "</h4>");
        }
        ?>
        <input type="submit">
    </div>
</form>

</body>
</html>