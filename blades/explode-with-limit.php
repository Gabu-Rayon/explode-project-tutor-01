<html>
<head>
<title>PHP-Explode with limit</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../assets/css/style.css" />
</head>
<body>
	<div class="container">
		<h4>Explode with limit</h4>
    <?php
    $string = 'Hello, World!, Learn, New';
    print "<pre>";
    print_r(explode(', ', $string, 0));
    print_r(explode(', ', $string, 2));
    print_r(explode(', ', $string, 3));
    print_r(explode(', ', $string, - 1));
    print_r(explode(', ', $string, - 2));
    ?>
    </div>
</body>
</html>