<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
    <style>
        span {
            width: 170px;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <h3>Future Value Calculator</h3>
    <span>Investment Amount:</span><input type="number" name="Investment" value="0"><br>
    <span>YearlyInterestRate:</span><input type="number" name="YearlyInterestRate" value="0"><br>
    <span>Number of Years:</span><input type="number" name="NumberofYears" value="0"><br>
    <button type="submit">Calculator
    </button>
    <span>Future Value:</span>
    <?php
    function calculatorInvesment()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $investment = $_POST["Investment"];
            $yearInvestment = $_POST["YearlyInterestRate"];
            $numberofyear = $_POST["NumberofYears"];
            $result = $investment + ($investment * $yearInvestment)*$numberofyear;
            //  Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)*
            echo $result;
        }
    }
    calculatorInvesment();
    ?>
</form>

</body>
</html>
<?php
