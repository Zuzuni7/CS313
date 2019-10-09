<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" >
    <title>Your Cart</title>
</head>
<body>

    Items currently in your cart: <?php echo $_GET["numTires"]; ?><br>
    <?php echo $_GET["tires"] ?>
    <br>

    Items currently in your cart: <?php echo $_GET["numTubes"]; ?><br>
    <?php echo $_GET["tubes"] ?>
    <br>

    Items currently in your cart: <?php echo $_GET["numBrakes"]; ?><br>
    <?php echo $_GET["brakes"] ?>
    <br>

</body>
</html>