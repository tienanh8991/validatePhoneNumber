<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $phoneNumber = $_REQUEST['number'];

    function validatePhoneNumber($str)
    {
        $phoneNumberRegexPatten = "/^\d{2}-\d{4}\d{3}\d{3}$/";
        if (preg_match($phoneNumberRegexPatten,$str)){
            return true;
        }else{
            return false;
        }
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Phone Number :
    <input type="text" name="number">
    <button type="submit">Check</button>
</form>
<div>
    <?php
    if (isset($phoneNumber)){
        if (validatePhoneNumber($phoneNumber)){
            echo "Validate Phone Number";
        }else{
            echo "Invalid Phone Number";
        }
    }
    ?>
</div>
</body>
</html>
