<?php
class Customer
{
    public $C_ID, $C_Name;

    public function __construct($C_ID, $C_Name)
    {
        $this->C_ID = $C_ID;
        $this->C_Name = $C_Name;
    }
    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "select * from customer";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $C_ID = $my_row[C_ID];
            $C_Name = $my_row[C_Name];
            $customerList[] = new Customer($C_ID, $C_Name);
        }
        require("connection_close.php");
        return $customerList;
    }
}
