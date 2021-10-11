<?php
class ProductColor
{
    public $procID, $proName ,$color;

    public function __construct($procID, $proName, $color)
    {
        $this->procID = $procID;
        $this->proName = $proName;
        $this->color = $color;
        // echo $proID;
        // echo $proName;
    }

    // public static function get($ID){
    //     require("connection_connect.php");
    //     $sql = "select * from product,product_color WHERE product.P_ID = product_color.P_ID AND quotation_detail.QD_ID = '$ID'";
    //     $result = $conn->query($sql);
    //     $my_row = $result->fetch_assoc();
    //     $procID = $my_row[PC_ID];
    //     $proName = $my_row[P_Name];
    //     $color = $my_row[PC_Color];
    //     require("connection_close.php");
    //     return new ProductColor($procID, $proName,$color);
    // }


    public static function getAll()
    {
        //echo "getAll";
        $productList = [];
        require("connection_connect.php");
        $sql = "select * from product,product_color WHERE product.P_ID = product_color.P_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $procID = $my_row[PC_ID];
            $proName = $my_row[P_Name];
            $color = $my_row[PC_Color];
            // echo "show id = ".$proID;
            // echo "show name = ".$proName;
            $productList[] = new ProductColor($procID, $proName,$color);
        }
        require("connection_close.php");
        return $productList;
    }
}
