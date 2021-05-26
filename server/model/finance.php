<?php
require_once '../init.php';
class Finance
{

    public $tableName = "invoice";

    function __construct()
    {
        $this->tableName;
    }

    function insertInvoice($name, $date, $user_id)
    {
        $conn = db();
        $query = select('*', $this->tableName, "name='$name'");
        if (!$query) {
            $insertInvoice = insert($this->tableName, '`invoice_id`, `name`, `date`, `user_id`', "NULL,'$name','$date','$user_id'");
            die("done");
        } else {
            return "name already used";
        }
    }

    function deleteInvoice($invoice_id)
    {
        $deleteInvoice = delete($this->tableName, "invoice_id='$invoice_id'");
        if ($deleteInvoice) {
            return "Record deleted successfully";
        } else {
            return  "Error deleting record: ";
        }
    }
    function updateInvoice($invoice_id, $name, $date, $user_id)
    {
        $updateInvoice = update($this->tableName, "name='$name',date='$date'", "invoice_id='$invoice_id'");
        if ($updateInvoice) {
            return "Record updated successfully";
        } else {
            return "Error updating record: ";
        }
    }
    function selectInvoice()
    {
        $selectInvoice = select("*", $this->tableName, "");
        if ($selectInvoice) {
            return $selectInvoice;
        } else {
            return  "0 results";
        }
    }
}
