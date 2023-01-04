<?php

class addProductContr extends addProduct
{

    private $sku;
    private $name;
    private $price;
    private $type;
    private $value;

    public function __construct($sku, $name, $price, $type, $value)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->value = $value;
    }

    public function addProducts()
    {

        if ($this->skuTakenCheck() == false) {
            // echo "Sku Taken";     
            header("Location: /addproduct?error=skutaken");
            exit();
        } else if ($this->emptySkuInput() == false) {
            // echo "Empty Sku Input";     
            header("Location: /addproduct?error=emptyskuinput");
            exit();
        } else if ($this->emptyNameInput() == false) {
            // echo "Empty Name Input";     
            header("Location: /addproduct?error=emptynameinput");
            exit();
        } else if ($this->emptyPriceInput() == false) {
            // echo "Empty Price Input";     
            header("Location: /addproduct?error=emptypriceinput");
            exit();
        } else if ($this->emptyTypeSelect() == false) {
            // echo "Empty Type Select";     
            header("Location: /addproduct?error=emptytypeselect");
            exit();
        }
        $this->setProduct($this->sku, $this->name, $this->price, $this->type, $this->value);
    }

    private function emptySkuInput()
    {
        $result = false;
        if (!empty($this->sku)) {
            $result = true;
        }
        return $result;
    }
    private function emptyNameInput()
    {
        $result = false;
        if (!empty($this->name)) {
            $result = true;
        }
        return $result;
    }
    private function emptyPriceInput()
    {
        $result = false;
        if (!empty($this->price)) {
            $result = true;
        }
        return $result;
    }

    private function emptyTypeSelect()
    {
        $result = false;
        if (!empty($this->type)) {
            $result = true;
        }
        return $result;
    }

    private function skuTakenCheck()
    {
        $result = false;
        if ($this->checkProduct($this->sku)) {
            $result = true;
        }
        return $result;
    }
}