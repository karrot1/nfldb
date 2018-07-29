<?php


    /*
    * Created by Belal Khan
    * website: www.simplifiedcoding.net
    */

    //Class DbConnect
    class DbConnect
    {
    //Variable to store database link
    private $con;

    //Class constructor
    function __construct()
    {

    }

    //This method will connect to the database
    function connect()
    {
    //Including the constants.php file to get the database constants
    include_once dirname(__FILE__) . '/Constants.php';

    //connecting to mysql database0
    $this-> $con= new mysqli("us-cdbr-iron-east-04.cleardb.net","b7b177ae59ac76","558d3bc8","heroku_8f0dc4064126e98");

    //Checking if any error occured while connecting
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //finally returning the connection link
    return $this->con;
    }

    }
