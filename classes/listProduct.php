<?php

include "../core/dbh.php";
class listProducts extends Dbh
{
    public function getProducts()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM products');
        $stmt->execute();
        $products = $stmt->fetchAll();

        if ($products) {
            foreach ($products as $product) {
                echo '
                <label name="product_id[]" class="container-product">
                <input type="checkbox" name="product_id[]" value="' . $product['sku'] . '" class="delete-checkbox">
                <div class="text-group">
                <p class="text">' . $product['sku'] . '</p>
                <p class="text">' . $product['name'] . '</p>
                <p class="text">' . $product['price'] . ' $</p>
                <div class=type>
                <p class="text">' . $product['type'] . ': ' . $product['value'] . '</p>
                </div>
                </div>
                </label>';
            }
        } else {
            echo '<div class="empty">
            <p>There is no products to show here</p>
        </div>';
        }
    }
}