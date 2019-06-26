<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Nathan Birch">
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="birch-week3.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="birch-week3.js"></script>
        <script>
               if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
        </script>
    </head>
    <body>
        <?php include '../shared/header.php';?><br><br>
        <?php 
            session_start();
            // initialize variables if they are not already in the session
            if (!isset($_SESSION["items"])) $_SESSION["items"] = 
                array(array("inCartCount"=>0, "name"=>"Genuine Leather Quad Combination, Regular, Indexed, 2013 Edition","url" => "pics/1.png","id" => 1,"price" => "$57.00","desc" => "Includes the LDS edition of the King James Bible, the Book of Mormon, the Doctrine and Covenants, and the Pearl of Great Price ..."),
                      array("inCartCount"=>0, "name"=>"Marble Christus Statue","url" =>  "pics/2.png","id" => 2,"price" => "$99.98","desc" => "12 Inch Cultured White Marble Christus Statue Jesus Christ This awe-inspiring cultured marble Christus statue depicts Jesus ..."),
                      array("inCartCount"=>0, "name"=>"Book of Mormon: Regular, Blue","url" =>  "pics/3.png","id" => 3,"price" => "$3.00","desc" => "This blue edition of the Book of Mormon includes footnotes, cross-references, and Guide to the Scriptures."),
                      array("inCartCount"=>0, "name"=>"Beehive Bookends","url" =>  "pics/4.png","id" => 4,"price" => "$49.99","desc" => "Perfect for the book lover in your life, these bookends bring class to any bookshelf. Featuring a beehive shape, these resin ..."),
                      array("inCartCount"=>0, "name"=>"The Mortal Messiah: From Bethlehem to Calvary [Book]","url" =>  "pics/5.png","id" => 5,"price" => "$4.49","desc" => "This used book is in Very Good condition. Come to a deeper understanding of the scope and meaning of Jesus Christ's ministry ..."),
                      array("inCartCount"=>0, "name"=>"What the Scriptures Teach about Raising a Child [Book]","url" =>  "pics/6.png","id" => 6,"price" => "$10.49","desc" => "This used book is in Very Good condition. In these times of enormous stress on families, where can we find down-to-earth help ..."),
                      array("inCartCount"=>0, "name"=>"Personalized Baptism Quad","url" =>  "pics/7.png","id" => 7,"price" => "$59.99","desc" => "Remember the power of covenants with our personalized temple scriptures. Featuring multiple options, you can create a ..."),
                      array("inCartCount"=>0, "name"=>"However Long & Hard the Road [Book]","url" =>  "pics/8.png","id" => 8,"price" => "$16.99","desc" => "A book with obvious wear. May have some damage to the cover or binding but integrity is still intact. There might be writing ..."),
                      array("inCartCount"=>0, "name"=>"Emotional Intelligence 2.0 [Book]","url" =>  "pics/9.png","id" => 9,"price" => "$24.17","desc" => "A book with obvious wear. May have some damage to the cover or binding but integrity is still intact. There might be writing ..."),
                      array("inCartCount"=>0, "name"=>"With A Pillar of Light - artist Dave Merrill created the image he's worked many years to bring to life: the celebration of ...","url" =>  "pics/10.png","id" => 10,"price" => "$79.99","desc" =>  "Pillar of Light (36x15 Framed Art)")
                );
            if (!isset($_SESSION["cart"])) $_SESSION["cart"] = [];

            // add to cart
            if(isset($_POST['submit'])){
                $item_id = $_POST['itemId'];

                //increment counter of item being added
                $id = array_search($item_id, array_column($_SESSION["items"], 'id'));
                $currentCount = intval($_SESSION["items"][$id]['inCartCount']);
                $_SESSION["items"][$id]['inCartCount'] = $currentCount + 1;
            }
        ?>

        <div class="container">
            <a href='shoppingCart.php'><img src="pics/cart.png" class="cart"></a>
            <div class="row">
              <?php for ($i = 0; $i < count($_SESSION["items"])-1; $i++) { ?>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="imgWrapper"><img src="<?php echo $_SESSION['items'][$i]['url']; ?>" class="imgClass"></div>
                        <p><h5 class="card-title"><?php echo $_SESSION['items'][$i]['name']; ?></h5></p>
                        <p class="largeFont"><?php echo $_SESSION['items'][$i]['price']; ?></p>
                        <p class="card-text"><?php echo $_SESSION['items'][$i]['desc']; ?></p>
                        <form id="" method="post" action="">
                            <input type="hidden" name="itemId" value="<?php echo $_SESSION['items'][$i]['id']; ?>">
                            <?php if($_SESSION['items'][$i]['inCartCount'] === 1) : ?>
                                <input type="submit" value="Add to Cart Again" name="submit" class="btn btn-secondary"> <br>  
                                <span>Added to Cart</span>
                            <?php elseif($_SESSION['items'][$i]['inCartCount'] > 1) : ?>
                                <input type="submit" value="Add to Cart Again" name="submit" class="btn btn-secondary"> <br>  
                                <span>Already Added <?php echo $_SESSION['items'][$i]['inCartCount']; ?> times.</span>
                            <?php else : ?>
                                <input type="submit" value="Add to Cart" name="submit" class="btn btn-primary">   
                                <span></span>
                            <?php endif; ?>
                        </form>
                      </div>
                    </div>
                  </div>
              <?php } ?>
            </div>
            
        </div><br><br>
    </body>
</html>
