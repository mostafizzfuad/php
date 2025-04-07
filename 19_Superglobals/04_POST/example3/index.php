<html>

<head>
    <title>Form Handling | Using $_POST</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        Email: <input type="email" name="email">
        <input type="submit" name="form1">
    </form>

    <?php 
    if (isset($_POST["form1"])) { // form1 e jodi hit kora hoi OR form1 jodi clickable hoye thake, tahole if block kaj korbe
        echo $_POST["fname"] . "<br>";
        echo $_POST["email"];
    }
    
    ?>
</body>

</html>