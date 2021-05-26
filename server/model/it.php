<?php
require_once '../init.php';
class It{

    public $tableName = 'laptops';

    function __construct(){
        $this->tableName;
    }

    function insertLaptops($mark, $size, $serial, $user_Id){
        $query = select("*",$this->tableName,"serial_number=$serial");
        if(!$query){
            $insert = insert($this->tableName, '`laptop_id`, `mark`, `size`, `serial_number`, `user_id`', "NULL, $mark, $size, $serial, $user_Id");
            return "successfully added";
        }else{
            return "serial already exist";
        }
        

    }

    function deleteLaptops($laptop_id)
    {
        $delete = delete($this->tableName,"laptop_id=$laptop_id");
        if ($delete) {
            return "deleted succefully";
        }else {
            return "Error";
        }
    }

    function updateLaptops($mark, $size, $serial,$laptop_id)
    {
        $update = update($this->tableName,"mark=$mark,size=$size,serial_number=$serial","laptop_id=$laptop_id");
        if ($update) {
            return "updated successfully";
        }else {
            return "Error";
        }
    }

    function selectLaptops()
    {
        $select = select("*",$this->tableName);
        if ($select) {
            return $select;
        }else{
            return "empty";
        }
    }
}
?>