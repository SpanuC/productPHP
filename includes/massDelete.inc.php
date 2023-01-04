<?php
include "../core/dbh.php";
include "../classes/massDelete.php";

if (isset($_POST["MASS_DELETE"])) {
    if (isset($_POST['product_id'])) {

        $all_sku_id = $_POST['product_id'];
        $extract_sku_id = implode("', '", $all_sku_id);
        $products = new massDelete();
        $products->deleteProduct($extract_sku_id);
    } else {
        header("Location: /");
    }
} else if (isset($_POST["add"])) {
    header("Location: /addproduct");
}