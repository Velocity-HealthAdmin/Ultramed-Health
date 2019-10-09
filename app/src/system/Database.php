<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 9/13/2019
 * Time: 11:24 PM
 */
include_once dirname(__FILE__) . '/constants.php';

class Database
{
    //Variable to store database link
    private $con;
    private $pdo;

    public function PDO() {
        try {
            $this->pdo = new PDO('mysql:host=' .DB_HOST .';dbname=' . DB_LNAME, DB_USERL, DB_PWD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (\Exception $e) {
            header("content-type: application/json");
            print_r(json_encode(array("error"=> array('type' => 'DATABASE ERROR', 'message' => $e->getMessage()))));
            exit();
        }
    }


    public function mysqli()
    {
        try{
            $this->con = new mysqli(DB_HOST, DB_USERL, DB_PWD, DB_LNAME);
            return $this->con;
        }catch(\Exception $e){
            header("content-type: application/json");
            print_r(json_encode(array("error"=> array('type' => 'DATABASE ERROR', 'message' => $e->getMessage()))));
            exit();
        }

    }
}