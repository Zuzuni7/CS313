<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Nathan Birch">
        <title>View Your Cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            // add subtotals and get total
            function updateTotals() {
                $_SESSION["grandTotal"] = 0.0;
                for($i = 0; $i < count($_SESSION["items"])-1; $i++) {
                    $count = intval($_SESSION["items"][$i]["inCartCount"]);
                    if($count > 0) {
                        $_SESSION["items"][$i]["subtotal"] = $count * floatval(ltrim($_SESSION['items'][$i]['price'], '$'));
                        $_SESSION["grandTotal"] += $_SESSION["items"][$i]["subtotal"];
                    }
                }
            }
            updateTotals();
            // add to cart
            if(isset($_POST['inc'])){
                $itemId = $_POST['idOfItemToChange'];
                $id = array_search($itemId, array_column($_SESSION["items"], 'id')); 
                $currentCount = intval($_SESSION["items"][$id]['inCartCount']);
                $_SESSION["items"][$id]['inCartCount'] = $currentCount + 1;
                updateTotals();
            }
            // remove to cart
            if(isset($_POST['dec'])){
                $itemId = $_POST['idOfItemToChange'];
                $id = array_search($itemId, array_column($_SESSION["items"], 'id')); 
                $currentCount = intval($_SESSION["items"][$id]['inCartCount']);
                $_SESSION["items"][$id]['inCartCount'] = $currentCount - 1;
                updateTotals();
            }
            // delete item
            if(isset($_POST['delete'])){
                $itemId = $_POST['deleteItem'];
                $id = array_search($itemId, array_column($_SESSION["items"], 'id')); 
                $currentCount = intval($_SESSION["items"][$id]['inCartCount']);
                $_SESSION["items"][$id]['inCartCount'] = 0;
                updateTotals();
            }
            // delete all
            if(isset($_POST['deleteAll'])){
                for($i = 0; $i < count($_SESSION["items"])-1; $i++) {
                    if($_SESSION["items"][$i]["inCartCount"] > 0) {
                        $_SESSION["items"][$i]["inCartCount"] = 0;
                    }
                }
                updateTotals();
            }
        ?>
        <div class="container">
            <h1>Welcome to your Cart! 
                <a href="shoppingCheckout.php"><button class="btn btn-primary checkoutButton">Checkout</button></a>
                <a href="shopping.php"><button class="btn btn-success checkoutButton" style="margin-right:20px">Keep Shopping</button></a>
            </h1>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>Item</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th>&nbsp;</th>
                </tr>
                <?php for ($i = 0; $i < count($_SESSION["items"])-1; $i++) { ?>
                    <?php if($_SESSION['items'][$i]['inCartCount'] > 0) : ?>
                        <tr>
                          <td>
                              <img src="<?php echo $_SESSION['items'][$i]['url']; ?>" style="width:50px">
                              <span class="description"><?php echo $_SESSION['items'][$i]['name']; ?></span>
                          </td>
                          <td id="price"><?php echo $_SESSION['items'][$i]['price']; ?></td>
                          <td>
                            <div class="counter">
                              <div style="display: flex;">
                                  <input type="hidden" name="idOfItemToChange" value="<?php echo $_SESSION['items'][$i]['id']; ?>">
                                  <input id="qty" class="smInp" value="<?php echo $_SESSION['items'][$i]['inCartCount']; ?>" />
                                  <!-- <form method="post"><input type="submit" name="dec" value="-" class="dec"></form>
                                  <form method="post"><input type="submit" name="inc" value="+" class="inc"></form> -->
                              </div>
                            </div>
                          </td>
                          <td id="subtotal"><?php echo "$".$_SESSION['items'][$i]['subtotal']; ?></td>
                          <td>
                            <form method="post">
                                <input type="hidden" name="deleteItem" value="<?php echo $_SESSION['items'][$i]['id']; ?>">
                                <button type="submit" class="hiddenButton" name="delete"><i class="fa fa-trash trash" aria-hidden="true"></i></button>
                            </form>
                          </td>
                        </tr>
                    <?php else : ?>  
                    <?php endif; ?>
                <?php } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>TOTAL:</td>
                    <td><?php echo $_SESSION["grandTotal"]; ?></td>
                </tr>
              </tbody>
            </table>
            <form method="post">
                <button type="submit" class="btn btn-danger" name="deleteAll">Empty Cart</button>
            </form>

        </div>
        <?php include '../shared/footer.php';?><br><br>
    </body>
</html>
