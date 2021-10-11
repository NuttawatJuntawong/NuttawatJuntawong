<?php

    class Product{

        public $ID;
        public $Name;

        public function __construct($ID, $Name){
            $this->ID = $ID;
            $this->Name = $Name;
        }

        public static function getAll(){
            $productList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $ID = $my_row[P_ID];
                $Name = $my_row[P_Name];
                $productList[] = new Product($ID ,$Name);
            }
            require("connection_close.php");
            return $productList;
        }

    }
