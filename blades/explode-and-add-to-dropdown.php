<?php
$countries = "Germany,United Kingdom,France,Spain,United States";
$result = explode(",", $countries);
?>
<html>
<head>
<title>PHP-Explode and add to dropdown</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../assets/css/style.css" />
</head>
<body>
    <div class="container">
        <h4>Explode and add to dropdown</h4>
        <div class="row">
            <div class="label">Select Country</div>
            <select class="input-select" name="country">
                <option value="">Select</option>
                <?php foreach($result as $country){?>
                <option value="<?php echo $country;?>"><?php echo $country;?></option>
                <?php }?>
            </select>
        </div>
    </div>
</body>
</html>