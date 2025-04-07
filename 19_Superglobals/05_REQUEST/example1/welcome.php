<html>

<head>
    <title>Submit Page</title>
</head>

<body>
    <?php
    // $name = $_POST['fname']; // when, from method="post"
    // $name = $_GET['fname']; // when, from method="get"

    $name = $_REQUEST['fname']; // from method should be "get" or "post"
    echo "Thanks !! $name. Your form is submitted !!";
    ?>
</body>

</html>