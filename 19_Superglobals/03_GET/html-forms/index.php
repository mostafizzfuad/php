<?php 
// ==========  HTML Forms  ========== //
// A HTML form submits information via the HTTP GET method if the form's method attribute is set to "GET".
?>


<html>

<head>
    <title>Form Handling | Using $_GET</title>
</head>

<body>
    <form action="./welcome.php" method="GET">
        Name: <input type="text" name="name">
        E-mail: <input type="email" name="email">
        <input type="submit">
    </form>
</body>

</html>