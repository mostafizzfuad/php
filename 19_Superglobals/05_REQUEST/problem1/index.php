<!----------------------- 
Sum of two numbers 
------------------------>

<html>

<head>
    <title>Sum of two numbers</title>
</head>

<body>
    <form action="" method="POST">
        Enter Number 1: <input type="number" name="num1"> <br>
        Enter Number 2: <input type="number" name="num2"> <br>
        <input type="submit" name="form1">
    </form>

    <?php
    if (isset($_REQUEST["form1"])) {
        $sum = $_REQUEST["num1"] + $_REQUEST["num2"];
        echo "Sum = " . $sum;
    }
    ?>
</body>

</html>