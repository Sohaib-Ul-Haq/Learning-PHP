<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radioButton.php" method="post">
        visa
        <input type="radio" name="creditcard" value="visa">
        mastercard
        <input type="radio" name="creditcard" value="mastercard">
        AmericanExpress
        <input type="radio" name="creditcard" value="amexxxxxxx">
    <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

<?php
// ternary operator

$creditcard = isset($_POST["creditcard"]) ? $_POST["creditcard"] : '';

if (isset($_POST['submit'])) {
    if (empty($creditcard)) {
        echo "Please select a credit card";
    }
    foreach ($_POST as $key => $value) {
        if ($key == "submit") {
            continue;
        }
        echo $key . " : " . $value . "<br>";
    }
}
?>



</html>