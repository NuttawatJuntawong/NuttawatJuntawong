<?php
    class StaffdailyController{
        public function index()
        {
            $staffdaily_list = Staffdaily::getAll();
            require_once("./views/staffDaily/index_staffdaily.php");
        }

        public function newStaffdaily()
        {
            $staffdaily_list = Staffdaily::getAll();
            $staff_list = Staff::getAll();
            $staffposition_list = Staffposition::getAll2();
            $stationdate_list = StationDate::getAll();
            require_once("./views/staffDaily/newStaffdaily.php");
        }

        public function addStaffdaily()
        {
            $check = 1;
            $S_ID = $_GET['S_ID'];
            $SP_ID = $_GET['SP_ID'];
            $StationDate_ID = $_GET['StationDate_ID'];
            //$staffdailyList = [];
            require("connection_connect.php");
            $sql = "SELECT COUNT(Staff.S_ID) AS CSID,COUNT(StationDate.StationDate_ID) AS CSTDID ,Station.Station_Name,Staff.S_FName,Staff.S_LName,StationDate.StationDate_Date,Station.Station_StartTime
            FROM StaffDaily NATURAL JOIN Staff NATURAL JOIN StaffPosition NATURAL JOIN Station NATURAL JOIN StationDate WHERE StaffDaily.S_ID = Staff.S_ID AND StaffDaily.SP_ID = StaffPosition.SP_ID AND StationDate.Station_ID = Station.Station_ID AND Staff.S_Status != 0 AND StaffPosition.SP_Status != 2 AND StaffDaily.SD_Status = 1 
            AND (Staff.S_ID LIKE '%$S_ID%' AND StationDate.StationDate_ID LIKE '%$StationDate_ID%') 
            GROUP BY Staff.S_ID,StationDate.StationDate_ID,Station.Station_Name,Staff.S_FName,Staff.S_LName,StationDate.StationDate_Date,Station.Station_StartTime";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $CSID= $my_row[CSID];
                $CSTDID= $my_row[CSTDID];
                $Station_Name= $my_row[Station_Name];
                $S_FName= $my_row[S_FName];
                $S_LName= $my_row[S_LName];
                $StationDate_Date= $my_row[StationDate_Date];
                $Station_StartTime= $my_row[Station_StartTime];
                if($CSID > 0 && $CSTDID > 0){
                    $check = 0;
    
                    require_once("./views/staffDaily/errorNew.php");
                }
            }
            require("connection_close.php");
            //echo "Hi",$check;
            if($check == 1){
                Staffdaily::Add($S_ID,$SP_ID,$StationDate_ID);  
                StaffdailyController::index();
            }

        }

        public function search(){
            $key = $_GET['key'];
            $staffdaily_list = Staffdaily::search($key);
            //echo "search";
            require_once("./views/staffDaily/index_staffdaily.php");
        }

        public function updateForm(){
            $ID = $_GET['ID'];
            $staffdaily = Staffdaily::get($ID);
            $staffdaily_list = Staffdaily::getAll();
            $staff_list = Staff::getAll();
            $staffposition_list = Staffposition::getAll2();
            $stationdate_list = StationDate::getAll();
            require_once("./views/staffDaily/updateForm.php");
        }

        public function update(){
            $ID = $_GET['ID'];
            $SP_ID = $_GET['SP_ID'];
            //$StationDate_ID = $_GET['StationDate_ID'];
     
            Staffdaily::update($ID,$SP_ID);
            StaffdailyController::index();
        }

        public function deleteConfirm(){
            $ID = $_GET['ID'];
            $Staffdaily = Staffdaily::get($ID);
          
            require_once("./views/staffDaily/deleteConfirm.php");
        }

        public function delete(){
            $ID = $_GET['ID'];
            Staffdaily::delete($ID);
            StaffdailyController::index();
        }

    }
?>