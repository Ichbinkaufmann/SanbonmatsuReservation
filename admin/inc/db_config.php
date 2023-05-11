<?php
error_reporting(0);

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "sanbonmatsu_reservation";

$con = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
}

class getDB
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tableitem;
        public $tableadmin;
        public $tablecart;
        public $tablereservation;
        public $tablemail;

        public $con;


        // class constructor
    public function __construct(
        $dbname = "sanbonmatsu_reservation",
        $tableitem = "item",
        $tableadmin = "admin_table",
        $tablecart = "item_cart",
        $tablereservation = "reservation",
        $tablemail = "email_details",
        $servername = "localhost",
        $username = "root",
        $password = "",
    )
    {
      $this->dbname = $dbname;
      $this->tableadmin = $tableadmin;
      $this->tableitem = $tableitem;
      $this->tablecart = $tablecart;
      $this->tablereservation = $tablereservation;
      $this->tablemail = $tablemail;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table

        }
    }
    public function filteration($data){
      foreach($data as $key => $value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        $data[$key] = $value;
      }
      return $data;
    }
  

    // Admin login

    // get item from the database

    // post from item table to page

    // post hiking data to page
    public function getDataHikingPersonal(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Hiking' AND subcategory = 'Personal'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
             
    }

    public function getDataHikingBusiness(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Hiking' AND subcategory = 'Business'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
          return $result;
      }
  }

    public function getDataHikingStudent(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Hiking' AND subcategory = 'Student'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }



    //post beer making data to page
    public function getDataBeerMaking(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Nikko Craft Beer' AND subcategory = 'Beer Brewing Experience'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }
    // post Restaurant data to page
    public function getDataRestaurant(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Restaurant'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

        // post BBQ data to page
        public function getDataBBQ(){
          $sql = "SELECT * FROM $this->tableitem WHERE category = 'Nikko Craft Beer BBQ' AND subcategory='BBQ'";
    
          $result = mysqli_query($this->con, $sql);
    
          if(mysqli_num_rows($result) > 0){
            return $result;
          }
        }

    // post E-bike data to page
    public function getDataEbike(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'E-Bike'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    // post Winter Equipment data to page
    public function getDataWinterEquipmentSki(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Winter Activity Equipment' AND subcategory='Cross-country Ski'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }
    public function getDataWinterEquipmentSnowshoeHourly(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Winter Activity Equipment' AND subcategory='Snowshoe' AND rent_type='Hourly'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getDataWinterEquipmentSnowshoeDaily(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Winter Activity Equipment' AND subcategory='Snowshoe' AND rent_type='Daily'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getDataWinterEquipmentOther(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Winter Activity Equipment' AND subcategory='Other'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }
    public function getDataWinterEquipmentExtension(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Winter Activity Equipment' AND subcategory='Extension'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }





    // Admin Page connection setting
    public function getEmailTable(){
      $sql = "SELECT * FROM $this->tablemail WHERE id='1'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getHikingTable(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Hiking'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getEbikeTable(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'E-Bike'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getRestaurantTable(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Restaurant'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }


    public function getBrewexTable(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Nikko Craft Beer' AND subcategory='Beer Brewing Experience'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getBBQTable(){
      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Nikko Craft Beer BBQ' AND subcategory='BBQ'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }

    public function getWinterEquipmentTable(){

      $sql = "SELECT * FROM $this->tableitem WHERE category = 'Winter Activity Equipment'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }


    // Call cart items

    public function getCartItem(){
      $nameUser=$_POST['nameUser'];
      $sql = "SELECT * FROM $this->tablecart WHERE cart_owner ='$nameUser'";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }
    

  // Call data to cart confirmation
    public function getDataItemreservation(){
      $id=$_GET['getidhiking'];
      $sql = "SELECT * FROM item WHERE item_id=$id";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }
} ?>