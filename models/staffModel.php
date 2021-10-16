<?php
class Staff
{
    public $S_ID;
    public $S_FName;
    public $S_LName;
    public $S_DoB;
  


    public function __construct($S_ID,$S_FName,$S_LName,$S_DoB)
    {
        $this->S_ID = $S_ID;
        $this->S_FName = $S_FName;
        $this->S_LName = $S_LName;
        $this->S_DoB = $S_DoB;
       

    }
    public static function get($ID){
        require("connection_connect.php");
        $sql = "SELECT * FROM Staff WHERE S_Status = 1 AND Staff.S_ID = '$ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $S_ID= $my_row[S_ID];
        $S_FName= $my_row[S_FName];
        $S_LName= $my_row[S_LName];
        $S_DoB= $my_row[S_DoB];
        require("connection_close.php");
        return new Staff($S_ID,$S_FName,$S_LName,$S_DoB);
    }

    public static function getAll()
    {
        $staffList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Staff WHERE S_Status = 1";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $S_ID= $my_row[S_ID];
            $S_FName= $my_row[S_FName];
            $S_LName= $my_row[S_LName];
            $S_DoB= $my_row[S_DoB];
            $staffList[] = new Staff($S_ID,$S_FName,$S_LName,$S_DoB);
        }
        require("connection_close.php");
        return $staffList;
    }
    public static function search($key)
    {
        $staffList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Staff WHERE S_Status = 1 AND (Staff.S_ID LIKE '%$key%' OR Staff.S_FName LIKE '%$key%' OR Staff.S_LName LIKE '%$key%' OR Staff.S_DoB LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $S_ID= $my_row[S_ID];
            $S_FName= $my_row[S_FName];
            $S_LName= $my_row[S_LName];
            $S_DoB= $my_row[S_DoB];

            $staffList[] = new Staff($S_ID,$S_FName,$S_LName,$S_DoB);
        }
        require("connection_close.php");
        return $staffList;
    }
    public static function Add($S_ID,$S_FName,$S_LName,$S_DoB)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Staff`(`S_FName`, `S_LName`, `S_DoB`, `S_Status`) VALUES ('$S_FName','$S_LName','$S_DoB',1);";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function update($ID,$S_FName,$S_LName,$S_DoB)
    {
        //echo $ID,$S_FName,$S_LName,$S_DoB;
        require("connection_connect.php");
        $sql = "UPDATE `Staff` SET `S_ID`= $ID, `S_FName`='$S_FName', `S_LName`='$S_LName',`S_DoB`='$S_DoB' WHERE Staff.S_ID = $ID";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function delete($ID)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Staff` SET `S_Status` = 0 WHERE Staff.S_ID = $ID";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

}
