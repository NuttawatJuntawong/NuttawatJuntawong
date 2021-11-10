<?php
    class PagesController{
        public function home(){
            $summary_list = Staffdaily::summary();
            require_once("./views/pages/home.php");
        }
        public function error(){
            require_once("./views/pages/error.php");
        }
    }

?>