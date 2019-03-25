<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/25/2019
 * Time: 12:32 PM
 */

namespace App\classes;
use App\Classes\Connection;

class News
{
    public function saveNewsInfo(){
        $sql = "Insert into news(news_title, news_description, news_image, status)
              values ('$_POST[news_title]', '$_POST[news_description]', '$_POST[news_image]', '$_POST[status]')";
        if(mysqli_query(Connection::dbConnection(), $sql)){
            $msg = "news info saved successfully";
            return $msg;
        }else{
            die('Query problem'.mysqli_error(Connection::dbConnection()));
        }
    }
}