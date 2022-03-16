<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array shift</title>
</head>
<body>
    <fieldset><legend><h1>Array shift</h1></legend>
<?php
    $tims = ["erwin","heru","ali","zaki"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person.'<br/>';
    }

?>
</fieldset>
</body>
</html>