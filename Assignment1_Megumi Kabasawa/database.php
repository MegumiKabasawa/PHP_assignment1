<?php
class Database{
  private $connection;
  // Constructor that automatically calls the connect_db method
  function __construct(){
    $this->connect_db();
  }
   // Method to establish a database connection
  public function connect_db(){
    $this->connection = mysqli_connect('localhost', 'root', '', 'Oct6_db');
    if(mysqli_connect_error()){
      die("Database Connection Failed" . mysqli_connect_error());
    }
  }
    // Method to create a new record in the database
  public function create($name,$email,$vote,$message){
    $sql = "INSERT INTO fallVoteData (name, email, vote, message) VALUES ('$name', '$email', '$vote', '$message')";
    $res = mysqli_query($this->connection, $sql);
    // Check if the query was successful
    if($res){
      return true;
    }
    else{
      return false;
    }
  }
  // Method to read data from the database
  public function read(){
    $sql = "SELECT * FROM fallVoteData";
    $res = mysqli_query($this->connection, $sql);
    return $res;
  }

}
// Create an instance of the Database class
$database = new Database();
?>
