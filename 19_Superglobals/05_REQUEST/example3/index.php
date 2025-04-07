<html>

<head>
    <title>Using $_REQUEST on $_POST Requests</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>

</html>



<!-- 

Interview Q. ⇒   $_REQUEST is an array containing data from 3 super globals, which ones ?
⇒  $_GET, $_POST and $_COOKIE

-->