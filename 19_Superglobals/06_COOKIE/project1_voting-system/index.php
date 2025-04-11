<?php
if (isset($_POST['form1'])) {
    setcookie('pr', $_REQUEST['person'], time() + (86400));
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">

                <?php if (!isset($_COOKIE['pr'])): ?>
                <form action="" method="post" class="mt-3">
                    <table>
                        <tr>
                            <td><strong>Select Person to Vote: </strong></td>
                            <td>
                                <select name="person" class="form-select">
                                    <option value="Mostafizur">Mostafizur</option>
                                    <option value="Bappy">Bappy</option>
                                    <option value="Siam">Siam</option>
                                    <option value="Junnun">Junnun</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" class="btn btn-success mt-1" name="form1">
                            </td>
                        </tr>
                    </table>
                </form>

                <?php else: ?>
                <p class="mt-2 text-bold text-danger">You already have given vote to <?php echo $_COOKIE['pr']; ?>.
                    Please come
                    here
                    after 24
                    hours.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>