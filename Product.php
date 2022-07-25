<?php


//Use to fetch product data
class product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con))return null;
    }

    //fetch product data using getData Method
    public function getData($table='product'){
      result = $this->db->con->query(query:"SELECT*FROM {$table}");

      $resultArray = array();

      //fetch product data one by one
        while ($item = mysqli_fetch_array($result,resulttype:MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }
}