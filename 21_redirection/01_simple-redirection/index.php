<html>

<head>
    <title>Form Handling | Simple Redirection</title>
</head>

<body>

    <?php
    if (isset($_REQUEST["message"])) { // check korche - message variable er kono ostitto ache kina? (exist kore kina)
        // echo $_REQUEST["message"];
        if ($_REQUEST["message"] == 1) {
            echo "Successful!";
        }
    }
    ?>

    <form action="./result.php" method="POST">
        Name: <input type="text" name="name">
        E-mail: <input type="email" name="email">
        <input type="submit">
    </form>
</body>

</html>