<?php
if (! empty($_POST["submit"])) {
    if (! empty($_POST["email"])) {
        $string = $_POST["email"];
        $result = explode("@", $string, - 1);
    }
}
?>
<html>
<head>
<title>PHP-Generate username</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../assets/css/style.css" />
</head>
<body>
    <div class="container">
    <h4>Generate username</h4>
        <form action="" method="post">
            <div class="row">
                <div class="label">Enter Email</div>
                <input type="text" name="email" class="input">
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="btn-submit"
                    name="submit">
            </div>
            <div class="row">
            <?php
            if (! empty($result)) {
                echo "<strong>Username :</strong> " . $result[0];
            }
            ?>
            </div>
        </form>
    </div>
</body>
</html>