<!-- 
 
$_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
$_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
$_REQUEST collects form data from the input fields using the name attribute's value.

$_REQUEST['fname'];
$_REQUEST['lname'];

-->

<html>

<head>
    <title>Using $_REQUEST for POST Method</title>
</head>

<body>
    <form method="POST" action="welcome.php">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
</body>

</html>