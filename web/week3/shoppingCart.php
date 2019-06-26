<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Nathan Birch">
        <title>View Your Cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="birch-weekx.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="birch-weekx.js"></script>
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
            // get session items from id in $_SESSION CART
            $cart = [];
            foreach($_SESSION["cart"] as $c) {
                foreach($_SESSION["items"] as $i) {
                    if ($c == $i['id']) {
                        $cart[] = $i;
                        break;
                    }
                }
            }
            // add to cart
            if(isset($_POST['submit'])){
                $item = $_POST['itemObject'];
                $_SESSION["cart"][] = $item;

                //increment counter of item being added
                $id = array_search($item, array_column($_SESSION["items"], 'id')); 
                $currentCount = intval($_SESSION["items"][$id]['inCartCount']);
                $_SESSION["items"][$id]['inCartCount'] = $currentCount + 1;
            }
        ?>
        <div class="container">
            <h1>Welcome to your Cart! <button class="btn btn-primary checkoutButton" style="float:right">Checkout</button></h1>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>Item</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                </tr>
                <?php for ($i = 0; $i < count($cart); $i++) { ?>
                  <tr>
                    <td><img src="<?php echo $_SESSION['cart'][$i]['url']; ?>"></br><p class="description">16 in. Groove Joint Pliers</br>SKU#1234</p></td>
                    <td id="price">$24.99</td>
                    <td>
                      <div class="counter">
                        <input id="qty" value="0" />
                        <!-- <button class="dec" onclick="modify_qty(-1)">-</button>
                        <button class="inc" onclick="modify_qty(+1)">+</button> -->
                      </div>
                    </td>
                    <td id="subtotal">$24.99</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>
        <?php include '../shared/footer.php';?><br><br>
    </body>
</html>
