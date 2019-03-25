<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/23/2019
 * Time: 10:38 AM
 */

namespace App\classes;


class Connection
{
    public  function dbConnection(){
        $link = mysqli_connect('localhost','root','','demo');
        return $link;

    }
}