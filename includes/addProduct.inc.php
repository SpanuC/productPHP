<?php

if (isset($_POST["submit"])) {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['productType'];

    switch ($_POST['productType']) {
        case "Size":
            $size = $_POST['size'];
            if (!empty($size) && floatval($size >= 0)) {
                $value = $size . " MB";
                break;
            } else {
                header("Location: /addproduct?error=emptysizeinput");
                break;
            }
        case "Weight":
            $weight = $_POST['weight'];
            if (!empty($weight) && floatval($weight >= 0)) {
                $value = $weight . " KG";
                break;
            } else {
                header("Location: /addproduct?error=emptyweightinput");
                break;
            }
        case "Dimension":
            $height = $_POST["height"];
            $width = $_POST["width"];
            $length = $_POST["length"];

            if (empty($height) && !floatval($height >= 0)) {
                header("Location: /addproduct?error=emptyheightinput");
                break;
            } else if (empty($width) && !floatval($width >= 0)) {
                header("Location: /addproduct?error=emptywidthinput");
                break;
            } else if (empty($length) && !floatval($length >= 0)) {
                header("Location: /addproduct?error=emptylengthinput");
                break;
            } else {
                $value = $height . "x" . $width . "x" . $length;
                break;
            }
    }

    include "../core/dbh.php";
    include "../classes/addProduct.php";
    include "../controller/addProductContr.php";

    $addProduct = new addProductContr($sku, $name, $price, $type, $value);
    $addProduct->addProducts();

    header("Location: /");
} else if (isset($_POST["cancel"])) {
    header("Location: /");
}