<?php

class massDelete extends Dbh
{

    public function deleteProduct($all_sku)
    {
        $sql = "DELETE FROM products WHERE sku in ('$all_sku')";

        $stmt = $this->connect()->query($sql);
        if ($stmt) {
            $stmt = null;
            header("Location: /?error=stmtfailed");
            exit();
        }
    }
}