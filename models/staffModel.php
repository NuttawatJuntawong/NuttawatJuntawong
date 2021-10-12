<?php
class Staff
{
    public $S_ID;
    public $S_FName;
    public $S_LName;
    public $S_DoB;
  


    public function __construct($S_ID,$S_FName,$S_LName,$S_DoB)
    {
        $this->S_ID = $S_ID;
        $this->S_FName = $S_FName;
        $this->S_LName = $S_LName;
        $this->S_DoB = $S_DoB;
       

    }
    // public static function get($ID){
    //     require("connection_connect.php");
    //     $sql = "SELECT * FROM quotationDetail, quotation_detail, product_color, product WHERE quotationDetail.QD_ID = quotation_detail.QD_ID AND product_color.PC_ID = quotation_detail.PC_ID AND product.P_ID = product_color.P_ID AND quotation_detail.QD_ID = '$ID'";
    //     $result = $conn->query($sql);
    //     $my_row = $result->fetch_assoc();
    //     $QDid = $my_row[QD_ID];
    //     $Qid = $my_row[Q_ID];
    //     $Pid = $my_row[P_ID];
    //     $Pname = $my_row[P_Name];
    //     $PCid = $my_row[PC_ID];
    //     $Pcolor = $my_row[PC_Color];
    //     $Unit = $my_row[QD_Quantity];
    //     $QDScr = $my_row[QD_ScreenQty];
    //     $UnitPrice = $my_row[Price];
    //     $Total = $my_row[Total];
    //     require("connection_close.php");
    //     return new QuotationDetail($QDid,$Qid, $Pid, $Pname,$PCid,$Pcolor,$Unit,$QDScr,$UnitPrice,$Total);
    // }

    public static function getAll()
    {
        $staffList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Staff WHERE S_Status = 1";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $S_ID= $my_row[S_ID];
            $S_FName= $my_row[S_FName];
            $S_LName= $my_row[S_LName];
            $S_DoB= $my_row[S_DoB];
            $staffList[] = new Staff($S_ID,$S_FName,$S_LName,$S_DoB);
        }
        require("connection_close.php");
        return $staffList;
    }
    // public static function search($key)
    // {
    //     $quotationDetailList = [];
    //     require("connection_connect.php");
    //     $sql = "SELECT * FROM quotationDetail, quotation_detail, product_color, product WHERE quotationDetail.QD_ID = quotation_detail.QD_ID AND product_color.PC_ID = quotation_detail.PC_ID AND product.P_ID = product_color.P_ID AND (product.P_ID LIKE '%$key%' OR product.P_Name LIKE '%$key%' OR quotation_detail.Q_ID LIKE '%$key%' OR product_color.PC_Color LIKE '%$key%')";
    //     $result = $conn->query($sql);
    //     while ($my_row = $result->fetch_assoc()) {
    //         $QDid = $my_row[QD_ID];
    //         $Qid = $my_row[Q_ID];
    //         $Pid = $my_row[P_ID];
    //         $Pname = $my_row[P_Name];
    //         $PCid = $my_row[PC_ID];
    //         $Pcolor = $my_row[PC_Color];
    //         $Unit = $my_row[QD_Quantity];
    //         $QDScr = $my_row[QD_ScreenQty];
    //         $UnitPrice = $my_row[Price];
    //         $Total = $my_row[Total];

    //         $quotationDetailList[] = new QuotationDetail($QDid,$Qid, $Pid, $Pname,$PCid ,$Pcolor,$Unit,$QDScr,$UnitPrice,$Total);
    //     }
    //     require("connection_close.php");
    //     return $quotationDetailList;
    // }
    public static function Add($S_ID,$S_FName,$S_LName,$S_DoB)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Staff`(`S_ID`, `S_FName`, `S_LName`, `S_DoB`, `S_Status`) VALUES ('$S_ID','$S_FName','$S_LName','$S_DoB',1);";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    // public static function update($NewQDID,$QID,$PCID,$QtyScr,$Unit,$ID)
    // {
    //     //echo $NewQDID,$QID,$PCID,$QtyScr,$Unit;
    //     require("connection_connect.php");
    //     $sql = "UPDATE quotation_detail SET QD_ID = '$NewQDID' ,QD_Quantity = '$Unit', QD_ScreenQty = '$QtyScr', PC_ID = '$PCID', Q_ID = '$QID' WHERE quotation_detail.QD_ID = '$ID'";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    // }

    // public static function delete($ID)
    // {
    //     require("connection_connect.php");
    //     $sql = "DELETE FROM quotation_detail WHERE quotation_detail.QD_ID = '$ID'";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    // }

}
