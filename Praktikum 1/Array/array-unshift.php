<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array unshift</title>
</head>
<body>
    <fieldset><legend><h1>Array Unshift</h1></legend>
<?php
    $tims = ["erwin","heru","ali","zaki"];
    array_unshift($tims,"joko","wati");
    foreach($tims as $person) {
        echo $person.'<br/>';
    }

?>
</fieldset>
</body>
</html>