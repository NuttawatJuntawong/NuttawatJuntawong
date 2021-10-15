<?php
class Staffdaily
{
    public $SD_ID;
    public $S_FName;
    public $S_LName;
    public $SP_Name;
    public $SP_Salary;
    public $Station_Name;
    public $Station_StartTime;
    public $StationDate_Date;
  


    public function __construct($SD_ID,$S_FName,$S_LName,$SP_Name,$SP_Salary,$Station_Name,$Station_StartTime,$StationDate_Date)
    {
        $this->SD_ID = $SD_ID;
        $this->S_FName = $S_FName;
        $this->S_LName = $S_LName;
        $this->SP_Name = $SP_Name;
        $this->SP_Salary = $SP_Salary;
        $this->Station_Name = $Station_Name;
        $this->Station_StartTime = $Station_StartTime;
        $this->StationDate_Date = $StationDate_Date;
       

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
        $staffdailyList = [];
        require("connection_connect.php");
        $sql = "SELECT *
        FROM StaffDaily NATURAL JOIN Staff NATURAL JOIN StaffPosition NATURAL JOIN Station NATURAL JOIN StationDate
        WHERE StaffDaily.S_ID = Staff.S_ID AND StaffDaily.SP_ID = StaffPosition.SP_ID AND StationDate.Station_ID = Station.Station_ID AND Staff.S_Status != 0
        ORDER BY StaffDaily.SD_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $SD_ID= $my_row[SD_ID];
            $S_FName= $my_row[S_FName];
            $S_LName= $my_row[S_LName];
            $SP_Name= $my_row[SP_Name];
            $SP_Salary= $my_row[SP_Salary];
            $Station_Name= $my_row[Station_Name];
            $Station_StartTime= $my_row[Station_StartTime];
            $StationDate_Date= $my_row[StationDate_Date];

            $staffdailyList[] = new Staffdaily($SD_ID,$S_FName,$S_LName,$SP_Name,$SP_Salary,$Station_Name,$Station_StartTime,$StationDate_Date);
        }
        require("connection_close.php");
        return $staffdailyList;
    }
    // public static function search($key)
    // {
    //     $staffList = [];
    //     require("connection_connect.php");
    //     $sql = "SELECT * FROM Staff WHERE S_Status = 1 AND (Staff.S_ID LIKE '%$key%' OR Staff.S_FName LIKE '%$key%' OR Staff.S_LName LIKE '%$key%' OR Staff.S_DoB LIKE '%$key%')";
    //     $result = $conn->query($sql);
    //     while ($my_row = $result->fetch_assoc()) {
    //         $S_ID= $my_row[S_ID];
    //         $S_FName= $my_row[S_FName];
    //         $S_LName= $my_row[S_LName];
    //         $S_DoB= $my_row[S_DoB];

    //         $staffList[] = new Staff($S_ID,$S_FName,$S_LName,$S_DoB);
    //     }
    //     require("connection_close.php");
    //     return $staffList;
    // }
    public static function Add($S_ID,$SP_ID,$StationDate_ID)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `StaffDaily`(`S_ID`, `SP_ID`, `StationDate_ID`) VALUES ($S_ID,'$SP_ID',$StationDate_ID)";
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
