<?php
include "../classes/typeSwitcher.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
    <link rel="stylesheet" href="../sass/ProductAdd/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/script-productAdd.js"></script>
    <script>
        $('#productType')
            .filter(function(i, e) {
                return $(e).text() == "DVD"
            })
    </script>
</head>

<body>
    <div id="app">
        <div class="body">
            <form action="../includes/addProduct.inc.php" method="post" id="product_form" class="product_form">
                <div class="header">
                    <h4 class="title">Product Add</h4>
                    <div class="buttons">
                        <button type="submit" name="submit" id="save" class="button">Save</button>
                        <button type="cancel" name="cancel" class="button">Cancel</button>
                    </div>
                </div>
                <div class="container">
                    <label for="sku" class="text">SKU</label>
                    <input type="text" id="sku" name="sku" class="input">
                    <span class="text-description">
                        Stock Keeping Unit needs to be unique.
                    </span>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == "emptyskuinput") {
                        echo '<div class="text-error">
                        SKU is required to proceed to the next step.
                        </div>';
                    } else if (isset($_GET['error']) && $_GET['error'] == "skutaken") {
                        echo '<div class="text-error">
                        The SKU is associated with a product <br>
                        already existing on website.
                        </div>';
                    }
                    ?>

                    <label for="name" class="text">Name</label>
                    <input type="text" id="name" name="name" class="input">
                    <span class="text-description">
                        Please, provide product name.
                    </span>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == "emptynameinput") {
                        echo '<div class="text-error">
                        Name is required to proceed to the next step.
                        </div>';
                    }
                    ?>
                    <label for="price" class="text">Price ($)</label>
                    <input type="number" step=".01" min=".01" id="price" name="price" class="input">
                    <span class="text-description">
                        Price needs to be a positive number with maximum precision of 0.01.
                    </span>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == "emptypriceinput") {
                        echo '<div class="text-error">
                        Product price is required to proceed to the next step.
                        </div>';
                    }
                    ?>
                    <label for="productType" class="text">Product Type</label>
                    <div>
                        <select id="productType" name="productType" onchange='load_new_content()'>
                            <option selected="true" disabled="disabled">Type Switcher</option>
                            <option value="Size">DVD</option>
                            <option value="Weight">Book</option>
                            <option value="Dimension">Furniture</option>
                        </select>
                    </div>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == "emptytypeselect") {
                        echo '<div class="text-error">
                        Please select a product type.
                        </div>';
                    }
                    ?>
                    <div class="Type-1">
                        <label for="size" class="text">Size (MB)</label>
                        <input type="number" step=".01" min=".01" id="size" name="size" class="input">
                        <span class="text-description">
                            Please, provide size
                        </span>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "emptysizeinput") {
                            echo '<div class="text-error">
                        The field is required to proceed to the next step.
                        </div>';
                        }
                        ?>
                    </div>
                    <div class="Type-2">
                        <label for="height" class="text">Height (CM)</label>
                        <input type="number" step=".01" min=".01" id="height" name="height" class="input">
                        <span class="text-description">
                            Please, provide height dimension
                        </span>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "emptyheightinput") {
                            echo '<div class="text-error">
                        The field is required to proceed to the next step.
                        </div>';
                        }
                        ?>
                        <label for="width" class="text">Width (CM)</label>
                        <input type="number" step=".01" min=".01" id="width" name="width" class="input">
                        <span class="text-description">
                            Please, provide width dimension
                        </span>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "emptywidthinput") {
                            echo '<div class="text-error">
                        The field is required to proceed to the next step.
                        </div>';
                        }
                        ?>
                        <label for="length" class="text">Length (CM)</label>
                        <input type="number" step=".01" min=".01" id="length" name="length" class="input">
                        <span class="text-description">
                            Please, provide length dimension
                        </span>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "emptylengthinput") {
                            echo '<div class="text-error">
                        The field is required to proceed to the next step.
                        </div>';
                        }
                        ?>
                    </div>
                    <div class="Type-3">
                        <label for="weight" class="text">Weight (KG)</label>
                        <input type="number" step=".01" min=".01" id="weight" name="weight" class="input">
                        <span class="text-description">
                            Please, provide weight
                        </span>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "emptyweightinput") {
                            echo '<div class="text-error">
                        The field is required to proceed to the next step.
                        </div>';
                        }
                        ?>
                    </div>
                </div>
                <footer class="footer">
                    <span class="text">
                        Product Add Page
                    </span>
                </footer>
            </form>
        </div>
    </div>
</body>

</html>