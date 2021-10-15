<?php
class Staffposition
{
    public $SP_ID;
    public $SP_Name;
    public $SP_Salary;
    public $SP_Duty;
    public $SP_Status;


    public function __construct($SP_ID,$SP_Name,$SP_Salary,$SP_Duty,$SP_Status)
    {
        $this->SP_ID = $SP_ID;
        $this->SP_Name = $SP_Name;
        $this->SP_Duty = $SP_Duty;
        $this->SP_Salary = $SP_Salary;
        $this->SP_Status = $SP_Status;

    }
    public static function get($ID){
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffPosition WHERE StaffPosition.SP_ID = '$ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $SP_ID= $my_row[SP_ID];
        $SP_Name= $my_row[SP_Name];
        $SP_Salary= $my_row[SP_Salary];
        $SP_Duty= $my_row[SP_Duty];
        require("connection_close.php");
        return new Staffposition($SP_ID,$SP_Name,$SP_Salary,$SP_Duty,$SP_Status);
    }

    public static function getAll()
    {
        $staffpositionList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffPosition WHERE StaffPosition.SP_Status != 2";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $SP_ID= $my_row[SP_ID];
            $SP_Name= $my_row[SP_Name];
            $SP_Salary= $my_row[SP_Salary];
            $SP_Duty= $my_row[SP_Duty];
            $SP_Status= $my_row[SP_Status];
            $staffpositionList[] = new Staffposition($SP_ID,$SP_Name,$SP_Salary,$SP_Duty,$SP_Status);
        }
        require("connection_close.php");
        return $staffpositionList;
    }
    public static function search($key)
    {
        $staffpositionList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffPosition WHERE (StaffPosition.SP_ID LIKE '%$key%' OR StaffPosition.SP_Name LIKE '%$key%' OR StaffPosition.SP_Salary LIKE '%$key%' OR StaffPosition.SP_Duty LIKE '%$key%' OR StaffPosition.SP_Status LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $SP_ID= $my_row[SP_ID];
            $SP_Name= $my_row[SP_Name];
            $SP_Salary= $my_row[SP_Salary];
            $SP_Duty= $my_row[SP_Duty];
            $SP_Status= $my_row[SP_Status];

            $staffpositionList[] = new Staffposition($SP_ID,$SP_Name,$SP_Salary,$SP_Duty,$SP_Status);
        }
        require("connection_close.php");
        return $staffpositionList;
    }
    public static function Add($SP_ID,$SP_Name,$SP_Salary,$SP_Duty)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `StaffPosition`(`SP_ID`, `SP_Name`, `SP_Salary`, `SP_Duty`, `SP_Status`) VALUES ('$SP_ID','$SP_Name','$SP_Salary','$SP_Duty',1)";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function update($ID,$SP_Name,$SP_Salary,$SP_Duty,$SP_Status)
    {
        echo $ID,$SP_Name,$SP_Salary,$SP_Duty;
        require("connection_connect.php");
        $sql = "UPDATE `StaffPosition` SET `SP_Name`='$SP_Name',`SP_Salary`='$SP_Salary',`SP_Duty`='$SP_Duty', `SP_Status` = $SP_Status WHERE StaffPosition.SP_ID = '$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    // public static function delete($ID)
    // {
    //     require("connection_connect.php");
    //     $sql = "UPDATE `Staff` SET `S_Status` = 0 WHERE Staff.S_ID = $ID";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    // }

}
