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
    public $SD_Status;
  


    public function __construct($SD_ID,$S_FName,$S_LName,$SP_Name,$SP_Salary,$Station_Name,$Station_StartTime,$StationDate_Date,$SD_Status)
    {
        $this->SD_ID = $SD_ID;
        $this->S_FName = $S_FName;
        $this->S_LName = $S_LName;
        $this->SP_Name = $SP_Name;
        $this->SP_Salary = $SP_Salary;
        $this->Station_Name = $Station_Name;
        $this->Station_StartTime = $Station_StartTime;
        $this->StationDate_Date = $StationDate_Date;
        $this->SD_Status = $SD_Status;
       

    }
    public static function get($ID){
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffDaily NATURAL JOIN Staff NATURAL JOIN StaffPosition NATURAL JOIN Station NATURAL JOIN StationDate WHERE StaffDaily.S_ID = Staff.S_ID AND StaffDaily.SP_ID = StaffPosition.SP_ID AND StationDate.Station_ID = Station.Station_ID AND Staff.S_Status != 0 AND StaffPosition.SP_Status != 2 AND StaffDaily.SD_Status = 1 AND StaffDaily.SD_ID = $ID";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
            $SD_ID= $my_row[SD_ID];
            $S_FName= $my_row[S_FName];
            $S_LName= $my_row[S_LName];
            $SP_Name= $my_row[SP_Name];
            $SP_Salary= $my_row[SP_Salary];
            $Station_Name= $my_row[Station_Name];
            $Station_StartTime= $my_row[Station_StartTime];
            $StationDate_Date= $my_row[StationDate_Date];
        require("connection_close.php");
        return new Staffdaily($SD_ID,$S_FName,$S_LName,$SP_Name,$SP_Salary,$Station_Name,$Station_StartTime,$StationDate_Date,$SD_Status);
    }

    public static function getAll()
    {
        $staffdailyList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffDaily NATURAL JOIN Staff NATURAL JOIN StaffPosition NATURAL JOIN Station NATURAL JOIN StationDate WHERE StaffDaily.S_ID = Staff.S_ID AND StaffDaily.SP_ID = StaffPosition.SP_ID AND StationDate.Station_ID = Station.Station_ID AND Staff.S_Status != 0 AND StaffPosition.SP_Status != 2 AND StaffDaily.SD_Status = 1 ORDER BY StaffDaily.SD_ID";
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

            $staffdailyList[] = new Staffdaily($SD_ID,$S_FName,$S_LName,$SP_Name,$SP_Salary,$Station_Name,$Station_StartTime,$StationDate_Date,$SD_Status);
        }
        require("connection_close.php");
        return $staffdailyList;
    }
    public static function search($key)
    {
        $staffdailyList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM StaffDaily NATURAL JOIN Staff NATURAL JOIN StaffPosition NATURAL JOIN Station NATURAL JOIN StationDate WHERE StaffDaily.S_ID = Staff.S_ID AND StaffDaily.SP_ID = StaffPosition.SP_ID AND StationDate.Station_ID = Station.Station_ID AND Staff.S_Status != 0 AND StaffPosition.SP_Status != 2 AND StaffDaily.SD_Status = 1 
         AND (StaffDaily.SD_ID LIKE '%$key%' OR Staff.S_FName LIKE '%$key%' OR Staff.S_LName LIKE '%$key%' OR StaffPosition.SP_Name LIKE '%$key%' OR StaffPosition.SP_Salary LIKE '%$key%'
         OR Station.Station_Name LIKE '%$key%'OR Station.Station_StartTime LIKE '%$key%'OR StationDate.StationDate_Date LIKE '%$key%') ORDER BY StaffDaily.SD_ID";
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

            $staffdailyList[] = new Staffdaily($SD_ID,$S_FName,$S_LName,$SP_Name,$SP_Salary,$Station_Name,$Station_StartTime,$StationDate_Date,$SD_Status);
        }
        require("connection_close.php");
        return $staffdailyList;
    }
    public static function Add($S_ID,$SP_ID,$StationDate_ID)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `StaffDaily`(`S_ID`, `SP_ID`, `StationDate_ID`,`SD_Status`) VALUES ($S_ID,'$SP_ID',$StationDate_ID,1)";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function update($SD_ID,$SP_ID)
    {
        //echo $SD_ID,$SP_ID,$StationDate_ID;
        require("connection_connect.php");
        $sql = "UPDATE `StaffDaily` SET `SP_ID`='$SP_ID' WHERE StaffDaily.SD_ID = $SD_ID";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function delete($ID)
    {
        require("connection_connect.php");
        $sql = "UPDATE `StaffDaily` SET `SD_Status`=0 WHERE StaffDaily.SD_ID = $ID";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

}
