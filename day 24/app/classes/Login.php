<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/23/2019
 * Time: 10:34 AM
 */

namespace App\classes;
use App\Classes\Connection;

class Login
{
    public function adminLogin($data){
        $email = $data['email'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM users where email='$email' AND password = '$password' ";
        if(mysqli_query(Connection::dbConnection(), $sql)){
            $result = mysqli_query(Connection::dbConnection(), $sql);
            $use = mysqli_fetch_assoc($result);
            if($use){

                session_start();
                $_SESSION['id'] = $use['id'];
                $_SESSION['name'] = $use['name'];

                header('Location:addStudent.php');
            }else{
                $msg = "use valid email & password";
                return $msg;
            }
        }else{
            die('Query problem'.mysqli_error(Connection::dbConnection()));
        }
    }

    public function adminLogout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('Location:login.php');
    }
}

