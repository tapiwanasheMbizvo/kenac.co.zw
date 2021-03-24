<?php
/**
 * Created by PhpStorm.
 * User: tapiwanashem
 * Date: 8/3/2021
 * Time: 12:13
 */



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once  "theBomb.php";
require_once "DBModel.php";

$theHand = new theBomb();

$partnerObj = new DBModel($theHand, "partners", "id");



$assoc = array(
    "partner_name"=> $_POST['partner_name'],
    "image_url"=>$_POST['image_url'],
    "details"=>$_POST['details'],
);

return $partnerObj->create($assoc);