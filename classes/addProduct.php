<?php

class addProduct extends Dbh
{
    protected function setProduct($sku, $name, $price, $type, $value)
    {
        $stmt = $this->connect()->prepare('INSERT INTO products (sku, name, price, type, value) VALUES (?, ?, ?, ?, ?)');

        if (!$stmt->execute(array($sku, $name, $price, $type, $value))) {
            $stmt = null;
            header("Location: /addproduct?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
    protected function checkProduct($sku)
    {
        $stmt = $this->connect()->prepare('SELECT sku FROM products WHERE sku = ?;');

        if (!$stmt->execute(array($sku))) {
            $stmt = null;
            header("Location: /addproduct?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if (!$stmt->rowCount() > 0) {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}