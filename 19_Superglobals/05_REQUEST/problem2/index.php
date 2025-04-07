<!------------------------ 
Triangle 
------------------------->

<html>

<head>
    <title>Triangle</title>
</head>

<body>
    <form action="" method="POST">
        Line Number: <input type="number" name="line_number"> <br>
        <input type="submit" name="form1">
    </form>

    <?php
    if (isset($_REQUEST["form1"])) {
        for ($i = 1; $i <= $_REQUEST["line_number"]; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            } echo "<br>";
        }
    }
    ?>
</body>

</html>