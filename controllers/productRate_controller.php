<?php

    class ProductRateController{

        public function index(){
            $productRate_list = ProductRate::getAll();

            require_once("./views/productRate/index_productRate.php");
        }

        public function newProductRate(){
            $product_list = Product::getAll();

            require_once("./views/productRate/newProductRate.php");
        }

        public function addProductRate(){
            $ID = $_GET['P_ID']."_R";
            while(strlen($ID)+strlen($_GET['QtyMoreThan']) < 10) {
                $ID = $ID."0";
            }
            $ID = $ID.$_GET['QtyMoreThan'];
            $P_ID = $_GET['P_ID'];
            $QtyMoreThan = $_GET['QtyMoreThan'];
            $Price = $_GET['Price'];
            $ScreenPrice = $_GET['ScreenPrice'];

            ProductRate::add($ID, $P_ID, $QtyMoreThan ,$Price ,$ScreenPrice);

            ProductRateController::index();
        }

        public function search(){
            $key = $_GET['key'];
            $productRate_list = ProductRate::search($key);

            require_once("./views/productRate/index_productRate.php");
        }

        public function updateForm(){
            $ID = $_GET['ID'];
            $productRate = ProductRate::get($ID);
            $product_list = Product::getAll();

            require_once("./views/productRate/updateFrom.php");
        }

        public function update(){
            $New_ID = $_GET['P_ID']."_R";
            while(strlen($New_ID)+strlen($_GET['QtyMoreThan']) < 10) {
                $New_ID = $New_ID."0";
            }
            $New_ID = $New_ID.$_GET['QtyMoreThan'];
            $P_ID = $_GET['P_ID'];
            $QtyMoreThan = $_GET['QtyMoreThan'];
            $Price = $_GET['Price'];
            $ScreenPrice = $_GET['ScreenPrice'];
            $ID = $_GET['ID'];

            ProductRate::update($New_ID, $P_ID, $QtyMoreThan, $Price, $ScreenPrice, $ID);

            ProductRateController::index();
        }

        public function deleteConfirm(){
            $ID = $_GET['ID'];
            $productRate = ProductRate::get($ID);

            require_once("./views/productRate/deleteConfirm.php");
        }

        public function delete(){
            $ID = $_GET['ID'];

            ProductRate::delete($ID);

            ProductRateController::index();
        }

    }

?>