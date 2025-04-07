<html>

<head>
    <title>Form Handling | Using $_POST</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo "Hello " . $name;
        }
    }
    ?>
</body>

</html>