<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Продукты</title><
       
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </head>
    <div class="container">
    <div class="product">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/products/Pots-Max-300x300.png">
                    <input type="text" name='product[]' value="Product 1" readonly="readonly">
                </div>
                <div class="col-md-4">
                    <img src="images/products/watch.jpg">
                    <input type="text" name='product[]' value="Product 2" readonly="readonly">
                </div>
                <div class="col-md-4">
                    <img src="images/products/inreachmini-newarrivals.png">
                    <input type="text" name='product[]' value="Product 3" readonly="readonly">
                </div>
                <div class="col-md-3">
                    <img src="images/products/MCJT-19912_vivoactive3m_v02.png">
                    <input type="text" name='product[]' value="Product 4" readonly="readonly">
                </div>
                 <div class="col-md-3">
                    <img src="images/products/MCJT-19912_vivoactive3m_v02.png">
                    <input type="text" name='product[]' value="Product 4" readonly="readonly">
                </div>
                 <div class="col-md-3">
                    <img src="images/products/MCJT-19912_vivoactive3m_v02.png">
                    <input type="text" name='product[]' value="Product 4" readonly="readonly">
                </div>
                 <div class="col-md-3">
                    <img src="images/products/MCJT-19912_vivoactive3m_v02.png">
                    <input type="text" name='product[]' value="Product 4" readonly="readonly">
                </div>
                <input type="submit" value="Send">
            </div>
        </form>
    </div>
    <?php
        foreach ($_REQUEST['product'] as $product=>$value){
            echo  $value.'<br/>';
        }
    ?>
    </div>
</html>
