<html>

<head>
    <title>Simple Login System | Redirection</title>
</head>

<body>

    <?php
    if (isset($_REQUEST["message"])) {
        // echo $_REQUEST["message"];
        if ($_REQUEST["message"] == "success") {
            echo "Login Successful!";
        } else {
            echo "Incorrect username or password";
        }
    }
    ?>

    <form action="./result.php" method="POST">
        Username: <input type="text" name="username">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
</body>

</html>