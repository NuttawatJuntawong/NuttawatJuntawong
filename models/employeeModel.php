<?php
class Employee
{
    public $E_ID, $E_Name;

    public function __construct($E_ID, $E_Name)
    {
        $this->E_ID = $E_ID;
        $this->E_Name = $E_Name;
    }
    public static function getAll()
    {
        $employeeList = [];
        require("connection_connect.php");
        $sql = "select * from employee";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $E_ID = $my_row[E_ID];
            $E_Name = $my_row[E_Name];
            $employeeList[] = new Employee($E_ID, $E_Name);
        }
        require("connection_close.php");
        return $employeeList;
    }
}
