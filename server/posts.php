<?php
/**
 * Created by PhpStorm.
 * User: tapiwanashem
 * Date: 13/5/2020
 * Time: 12:03
 */

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


require_once "Post.php";
require_once "theBomb.php";


$theHand = new theBomb();
$post = new Post($theHand, "posts", "post_id");

if(!isset($_SESSION)){

    session_start();


}


if($_SERVER['REQUEST_METHOD']=='POST'){


    $post->title = $_POST["title"];
    $post->body = $_POST["body"];

    echo $post->createPost();


    //create a new post




}elseif ($_SERVER['REQUEST_METHOD']=='GET'){



    echo $post->getAll();

    //GET REQUEST

}


