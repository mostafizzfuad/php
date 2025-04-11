<?php
if (isset($_POST['form1'])) {

    if ($_REQUEST['username'] == 'mostafizur' && $_REQUEST['password'] == '1234') {
        
        setcookie('un', $_REQUEST['username'], time() + (86400));
        setcookie('pw', $_REQUEST['password'], time() + (86400));
        header('location: dashboard.php');

    } else {
        header('location: index.php');
    }        
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <form class="mt-2" action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input class="form-control" type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input class="form-control mt-2" type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-primary mt-2" type="submit" value="Login" name="form1"></td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>