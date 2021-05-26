<?php
require_once '../init.php';
class It
{

    public $tableName = "laptops";

    function __construct()
    {
        $this->tableName;
    }

    function insertLaptops($mark, $size, $serial, $user_id)
    {
        $query = select('*', $this->tableName, "serial_number='$serial'");
        if (!$query) {
            $insertLaptop = insert($this->tableName, '`laptop_id`, `mark`, `size`, `serial_number`, `user_id`', "NULL,$mark,$size,$serial,$user_id");
            die("Inserted Successfuly");
        } else {
            return "serial already used";
        }
    }

    function deleteLaptops($laptop_id)
    {
        $deleteLaptops = delete($this->tableName, "laptop_id=$laptop_id");
        if ($deleteLaptops) {
            return "Record deleted successfully";
        } else {
            return  "Error deleting record: ";
        }
    }
    function updateLaptops($laptop_id, $mark, $size, $serial)
    {
        $updateLaptops = update($this->tableName, "mark=$mark,size=$size,serial_number=$serial", "laptop_id=$laptop_id");
        if ($updateLaptops) {
            return "Record updated successfully";
        } else {
            return "Error updating record: ";
        }
    }
    function selectLaptops()
    {
        $selectLaptop = select("*", $this->tableName,"");
        if ($selectLaptop) {
            return $selectLaptop;
        } else {
            return  "0";
        }
    }
}
