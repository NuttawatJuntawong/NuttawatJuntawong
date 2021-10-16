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
            $S_ID = $_GET['S_ID'];
            $SP_ID = $_GET['SP_ID'];
            $StationDate_ID = $_GET['StationDate_ID'];
    
            echo $S_ID." ".$SP_ID." ".$StationDate_ID;

            Staffdaily::Add($S_ID,$SP_ID,$StationDate_ID);
            StaffdailyController::index();

        }

        public function search(){
            $key = $_GET['key'];
            $staffdaily_list = Staffdaily::search($key);
            //echo "search";
            require_once("./views/staffDaily/index_staffdaily.php");
        }

        // public function updateForm(){
        //     $ID = $_GET['ID'];
        //     $staff = Staff::get($ID);
        //     $staff_list = Staff::getAll();
        //     require_once("./views/staff/updateForm.php");
        // }

        // public function update(){
        //     $ID = $_GET['ID'];
        //     $S_FName = $_GET['S_FName'];
        //     $S_LName = $_GET['S_LName'];
        //     $S_DoB = $_GET['S_DoB'];
        //     Staff::update($ID,$S_FName,$S_LName,$S_DoB);
        //     StaffController::index();
        // }

        // public function deleteConfirm(){
        //     $ID = $_GET['ID'];
        //     $staff = Staff::get($ID);
        //     require_once("./views/staff/deleteConfirm.php");
        // }

        // public function delete(){
        //     $ID = $_GET['ID'];
        //     staff::delete($ID);
        //     StaffController::index();
        // }

    }
?>