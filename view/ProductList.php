<?php
include "../classes/listProduct.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link rel="stylesheet" href="../sass/ProductList/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/script-productList.js"></script>
</head>

<body>
    <div id="app">
        <div class="body">
            <form action="../includes/massDelete.inc.php" method="post" id="productList_form" class="productList_form">
                <div class="header">
                    <h4 class="title">Product List</h4>
                    <div class="buttons">
                        <button type="submit" name="add" class="button">ADD</button>
                        <button type="submit" id="MASS_DELETE" name="MASS_DELETE" class="button">MASS
                            DELETE</button>
                    </div>
                </div>
                <div class="container-body">
                    <div class="container">
                        <?php
                        $products = new listProducts();
                        $products->getProducts();
                        ?>
                    </div>
                </div>
                <footer class="footer">
                    <span class="text">
                        Product List Page
                    </span>
                </footer>
            </form>
        </div>
    </div>
</body>

</html>