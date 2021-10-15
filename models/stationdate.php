<?php
class StationDate
{
    public $Station_Name, $StationDate_Date ,$Station_StartTime,$StationDate_ID;

    public function __construct($StationDate_ID,$Station_Name, $StationDate_Date, $Station_StartTime)
    {
        $this->Station_Name = $Station_Name;
        $this->StationDate_Date = $StationDate_Date;
        $this->Station_StartTime = $Station_StartTime;
        $this->StationDate_ID = $StationDate_ID;
    }



    public static function getAll()
    {
        //echo "getAll";
        $stationdateList = [];
        require("connection_connect.php");
        $sql = "SELECT * 
        FROM StationDate,Station
        WHERE StationDate.Station_ID = Station.Station_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $StationDate_ID = $my_row[StationDate_ID];
            $Station_Name = $my_row[Station_Name];
            $StationDate_Date = $my_row[StationDate_Date];
            $Station_StartTime = $my_row[Station_StartTime];
            $stationdateList[] = new StationDate($StationDate_ID,$Station_Name, $StationDate_Date, $Station_StartTime);
        }
        require("connection_close.php");
        return $stationdateList;
    }
}
