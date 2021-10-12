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

        // public function searchQuotationDetail(){
        //     $key = $_GET['key'];
        //     $quotationDetail_list = QuotationDetail::search($key);
        //     echo "search";
        //     require_once("./views/quotationDetail/index_quotationDetail.php");
        // }

        // public function updateFormQuotationDetail(){
        //     $ID = $_GET['ID'];
        //     $quotationDetail = QuotationDetail::get($ID);
        //     $product_list = ProductColor::getAll();
        //     $quotation_list = Quotation::getAll();

        //     require_once("./views/quotationDetail/updateFormQuotationDetail.php");
        // }

        // public function updateQuotationDetail(){
        //     $ID = $_GET['ID'];

        //     $NewQDID = $_GET['QID']."_".$_GET['procID'];
        //     $QID = $_GET['QID'];
        //     $PCID = $_GET['procID'];
        //     $QtyScr = $_GET['QtyScr'];
        //     $Unit = $_GET['Unit'];
        //     QuotationDetail::update($NewQDID,$QID,$PCID,$QtyScr,$Unit,$ID);
        //     QuotationDetailController::index();
        // }

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