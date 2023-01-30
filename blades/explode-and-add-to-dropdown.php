<?php
$african_nations = "Kenya,Uganda,Tanzania,Djibouti,Ethopia,Sudan,South Sudan,Morocco,Cameroon,Ghana,Niger,Nigeria,Ghana";
$result = explode(",", $african_nations);
?>
<html>

<head>
    <title>PHP-Explode & add to dropdown</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <h4>Explode and add to dropdown</h4>
        <div class="row">
            <div class="label">Select African Nationality!</div>
            <select class="input-select" name="country">
                <option value="">Select</option>
                <?php foreach($result as $nation){?>
                <option value="<?php echo $nation;?>"><?php echo $nation;?></option>
                <?php }?>
            </select>
        </div>
    </div>
</body>

</html>