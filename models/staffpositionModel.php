<?php
class Staffposition
{
    public $SP_ID;
    public $SP_Name;
    public $SP_Salary;
    public $SP_Duty;
  


    public function __construct($SP_ID,$SP_Name,$SP_Salary,$SP_Duty)
    {
        $this->SP_ID = $SP_ID;
        $this->SP_Name = $SP_Name;
        $this->SP_Duty = $SP_Duty;
        $this->SP_Salary = $SP_Salary;
       

    }
    // public static function get($ID){
    //     require("connection_connect.php");
    //     $sql = "SELECT * FROM Staff WHERE S_Status = 1 AND Staff.S_ID = '$ID'";
    //     $result = $conn->query($sql);
    //     $my_row = $result->fetch_assoc();
    //     $S_ID= $my_row[S_ID];
    //     $S_FName= $my_row[S_FName];
    //     $S_LName= $my_row[S_LName];
    //     $S_DoB= $my_row[S_DoB];
    //     require("connection_close.php");
    //     return new Staff($S_ID,$S_FName,$S_LName,$S_DoB);
    // }

    public static function getAll()
    {
        $staffpositionList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffPosition ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $SP_ID= $my_row[SP_ID];
            $SP_Name= $my_row[SP_Name];
            $SP_Salary= $my_row[SP_Salary];
            $SP_Duty= $my_row[SP_Duty];
            $staffpositionList[] = new Staffposition($SP_ID,$SP_Name,$SP_Salary,$SP_Duty);
        }
        require("connection_close.php");
        return $staffpositionList;
    }
    public static function search($key)
    {
        $staffpositionList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffPosition WHERE (StaffPosition.SP_ID LIKE '%$key%' OR StaffPosition.SP_Name LIKE '%$key%' OR StaffPosition.SP_Salary LIKE '%$key%' OR StaffPosition.SP_Duty LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $SP_ID= $my_row[SP_ID];
            $SP_Name= $my_row[SP_Name];
            $SP_Salary= $my_row[SP_Salary];
            $SP_Duty= $my_row[SP_Duty];

            $staffpositionList[] = new Staffposition($SP_ID,$SP_Name,$SP_Salary,$SP_Duty);
        }
        require("connection_close.php");
        return $staffpositionList;
    }
    public static function Add($SP_ID,$SP_Name,$SP_Salary,$SP_Duty)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `StaffPosition`(`SP_ID`, `SP_Name`, `SP_Salary`, `SP_Duty`) VALUES ('$SP_ID','$SP_Name','$SP_Salary','$SP_Duty')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    // public static function update($ID,$S_FName,$S_LName,$S_DoB)
    // {
    //     echo $ID,$S_FName,$S_LName,$S_DoB;
    //     require("connection_connect.php");
    //     $sql = "UPDATE `Staff` SET `S_ID`= $ID, `S_FName`='$S_FName', `S_LName`='$S_LName',`S_DoB`='$S_DoB' WHERE Staff.S_ID = $ID";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    // }

    // public static function delete($ID)
    // {
    //     require("connection_connect.php");
    //     $sql = "UPDATE `Staff` SET `S_Status` = 0 WHERE Staff.S_ID = $ID";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    // }

}
