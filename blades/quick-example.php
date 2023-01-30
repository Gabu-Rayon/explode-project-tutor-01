<?php
$employees = "Kenneth James Mike  Lukas Evans David  William";
$result = explode(" ", $employees);
?>
<html>

<head>
    <title>PHP-Explode quick example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <h4>PHP Explode quick example</h4>
        <?php
        // Prints array
        print "<PRE>";
        print_r($result);

        // Iterates array generated using PHP explode
        foreach ($result as $value) {
            ?>
        <div class="explode"><?php echo $value;?></div>
        <?php
        }
        ?>
    </div>
</body>

</html>