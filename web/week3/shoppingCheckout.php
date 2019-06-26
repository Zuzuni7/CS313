<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Nathan Birch">
        <title>Checkout</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="birch-week3.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="birch-week3.js"></script>
        <script>
            // prevents refresh from submitting form and clears out unneeded variables
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
    <body>
        <?php include '../shared/header.php';?><br><br>
        <?php 
            session_start();

        ?>
        <div class="container">
            <h3>Checkout</h3>
            <p>For a total of $<?php echo $_SESSION["grandTotal"]; ?>.</p>
            <form action="shoppingConfirm.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group col-md-4">
                  <label>City</label>
                  <input type="text" class="form-control" name="city">
                </div>
                <div class="form-group col-md-2">
                  <label>State</label>
                  <input type="text" class="form-control" name="state">
                </div>
                <div class="form-group col-md-2">
                  <label>Zip</label>
                  <input type="text" class="form-control" name="zip">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Complete Checkout</button>
              <a href='shoppingCart.php'><button type="button" class="btn btn-secondary">Back to Cart</button></a>
            </form>
        </div>
        <?php include '../shared/footer.php';?><br><br>
    </body>
</html>
