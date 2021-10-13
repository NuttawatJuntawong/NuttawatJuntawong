<?php
    class StaffController{
        public function index()
        {
            $staff_list = Staff::getAll();
            require_once("./views/staff/index_staff.php");
        }

        public function newStaff()
        {
            $staff_list = Staff::getAll();
            require_once("./views/staff/newStaff.php");
        }

        public function addStaff()
        {
            $S_ID = $_GET['S_ID'];
            $S_FName = $_GET['S_FName'];
            $S_LName = $_GET['S_LName'];
            $S_DoB = $_GET['S_DoB'];
            
            echo $S_ID." ".$S_FName." ".$S_LName." ".$S_DoB;

            Staff::Add($S_ID,$S_FName,$S_LName,$S_DoB);
            StaffController::index();

        }

        public function search(){
            $key = $_GET['key'];
            $staff_list = Staff::search($key);
            echo "search";
            require_once("./views/staff/index_staff.php");
        }

        public function updateForm(){
            $ID = $_GET['ID'];
            $staff = Staff::get($ID);
            $staff_list = Staff::getAll();
            require_once("./views/staff/updateForm.php");
        }

        public function update(){
            $ID = $_GET['ID'];
            $S_FName = $_GET['S_FName'];
            $S_LName = $_GET['S_LName'];
            $S_DoB = $_GET['S_DoB'];
            Staff::update($ID,$S_FName,$S_LName,$S_DoB);
            StaffController::index();
        }

        // public function deleteConfirmQuotationDetail(){
        //     $ID = $_GET['ID'];
        //     $quotationDetail = QuotationDetail::get($ID);
        //     require_once("./views/quotationDetail/deleteConfirm.php");
        // }

        // public function deleteQuotationDetail(){
        //     $ID = $_GET['ID'];
        //     QuotationDetail::delete($ID);
        //     QuotationDetailController::index();
        // }

    }
?>