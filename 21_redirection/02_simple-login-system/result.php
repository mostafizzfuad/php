<?php
// result.php
if ($_REQUEST["username"] == "mostafizur" && $_REQUEST["password"] == "1234") {
    header("location: index.php?message=success");
} else {
    header("location: index.php?message=error");
}