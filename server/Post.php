<?php
/**
 * Created by PhpStorm.
 * User: tapiwanashem
 * Date: 13/5/2020
 * Time: 12:03
 */

require_once "DBModel.php";
class Post extends DBModel {

    public $post_id;
    public $title;
    public $body;
    public $created_on;

    public function createPost(){


        $assoc =  array(
            "title"=> $this->title,
            "body"=>$this->body

        );

        $this->create($assoc);

        return json_encode($this->response);

    }


}