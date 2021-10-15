<?php
    class StaffpositionController{
        public function index()
        {
            $staffposition_list = Staffposition::getAll();
            require_once("./views/staffposition/index_staffposition.php");
        }

        public function newStaffposition()
        {
            $staffposition_list = Staffposition::getAll();
            require_once("./views/staffposition/newStaffposition.php");
        }

        public function addStaffposition()
        {
            $SP_ID = $_GET['SP_ID'];
            $SP_Name = $_GET['SP_Name'];
            $SP_Salary = $_GET['SP_Salary'];
            $SP_Duty = $_GET['SP_Duty'];
            
            echo $SP_ID." ".$SP_Name." ".$SP_Salary." ".$SP_Duty;

            Staffposition::Add($SP_ID,$SP_Name,$SP_Salary,$SP_Duty);
            StaffpositionController::index();

        }

        public function search(){
            $key = $_GET['key'];
            $staffposition_list = Staffposition::search($key);
            require_once("./views/staffposition/index_staffposition.php");
        }

        public function updateForm(){
            $ID = $_GET['ID'];
            $staffposition = Staffposition::get($ID);
            $staffposition_list = Staffposition::getAll();
            require_once("./views/staffposition/updateForm.php");
        }

        public function update(){
            $ID = $_GET['ID'];
            $SP_Name = $_GET['SP_Name'];
            $SP_Salary = $_GET['SP_Salary'];
            $SP_Duty = $_GET['SP_Duty'];
            $SP_Status = $_GET['SP_Status'];
            Staffposition::update($ID,$SP_Name,$SP_Salary,$SP_Duty,$SP_Status);
            StaffpositionController::index();
        }

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