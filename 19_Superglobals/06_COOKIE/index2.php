<?php
setcookie("test_cookie", "test", time() + 5, '/'); // enable 5 sec
?>

<html>

<body>

    <?php
    if (count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
    ?>

</body>

</html>