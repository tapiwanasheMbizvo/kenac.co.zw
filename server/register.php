<?php
/**
 * Created by PhpStorm.
 * User: tapiwanashem
 * Date: 9/5/2020
 * Time: 09:54
 */



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



if(!isset($_SESSION)){

    session_start();

    /*CAN YOU SEE THIS */

}


if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once "User.php";
    require_once "theBomb.php";

    $theHand = new theBomb();
    $ObjUser = new  User($theHand, "users", "user_id");

    $data = json_decode(file_get_contents('php://input'), true);
    $ObjUser->password = $data['password'];
    $ObjUser->email = $data['email'];
    $ObjUser->first_name = $data['first_name'];
    $ObjUser->last_name = $data['last_name'];
    $ObjUser->phone_number = $data['phone_number'];


       echo $ObjUser->makeUser();

       // echo  $ObjUser->getAll();
}

