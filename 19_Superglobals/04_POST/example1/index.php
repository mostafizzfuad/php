<!--

$_POST contains an array of variables received via the HTTP POST method.
we can use the $_POST variable to collect the value of the input fields.

# There are two main ways to send variables via the HTTP Post method:
- HTML forms
- JavaScript HTTP requests
 
-->


<html>

<head>
    <title>Form Handling | Using $_POST</title>
</head>

<body>
    <form action="./welcome.php" method="POST">
        Name: <input type="text" name="fname">
        Phone: <input type="number" name="phone">
        Password: <input type="password" name="pass">
        <input type="submit">
    </form>
</body>

</html>