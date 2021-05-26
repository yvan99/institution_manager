<?php
require_once '../init.php';
class Marketing
{
    public $tableName = "advertisment";

    function __construct()
    {
        $this->tableName;
    }

    function insertAdvert($name, $description, $user_id)
    {
        $conn = db();
        $query = select("*", $this->tableName, "name='$name'");
        if (!$query) {
            $insertAd = insert($this->tableName, '`ads_id`, `name`, `description`, `user_id`', "NULL,'$name','$description','$user_id'");
            return "advert creation successful";
        } else {
            return "advert exits";
        }
    }

    function deleteAdvert($ads_id)
    {
        $conn = db();
        $deleteAdvert = delete($this->tableName, "ads_id='$ads_id'");
        if ($deleteAdvert) {
            return "Advert deleted!";
        } else {
            return "could not delete! Contact Admin";
        }
    }

    function updateAdvert($ads_id, $name, $description, $user_id)
    {
        $updateAdvert = update($this->tableName, "name='$name',description='$description'", "ads_id='$ads_id'");
        if ($updateAdvert) {
            return "Advert Updated!";
        } else {
            return "Could not update! Contact Admin";
        }
    }

    function displayAdvert()
    {
        $selectAdvert = select("*", $this->tableName, "");
        if ($selectAdvert) {
            return $selectAdvert;
        } else {
            return "No results to display! Add atleast one entry";
        }
    }
}
