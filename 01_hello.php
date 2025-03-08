<!-- PHP files can contain text, HTML, CSS, JavaScript, and PHP code. -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <!-- css in php file -->
    <style>
    h1 {
        color: crimson;
    }
    </style>
</head>

<body>
    <!-- html in php file -->
    <h1>Hello PHP !!</h1>

    <!-- php code -->
    <?php
    $age = 25;
    ?>
    <h2>His age is <?php echo $age; ?> </h2>

    <!-- js in php file -->
    <script>
    alert("Hello JS !!");
    </script>
</body>

</html>