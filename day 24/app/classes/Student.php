<?php
namespace App\Classes;
class Student
{
    public function saveStudentInfo(){
        $link = mysqli_connect('localhost','root','','demos');
        $sql = "INSERT INTO demos(name,email,mobile) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]')";
        if(mysqli_query($link,$sql)){
            $message = "Student Info saved successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }
    public function viewStudentInfo(){
        $link = mysqli_connect('localhost','root','','demos');
        $sql = "SELECT * FROM demos";
        if (mysqli_query($link,$sql)){
            $result = mysqli_query($link,$sql);
            return $result;
        } else{
            die ('Query Problem'.mysqli_error($link));
        }
    }
    public function getStudentInfoById($id){
        $link = mysqli_connect('localhost','root','','demos');
        $sql = "SELECT * FROM demos WHERE id  ='$id'";
        if (mysqli_query($link,$sql)){
            $result = mysqli_query($link,$sql);
            return $result;
        } else{
            die ('Query Problem'.mysqli_error($link));
        }
    }
    public function updateStudentInfo(){
        $link = mysqli_connect('localhost','root','','demos');
        $sql = "UPDATE demos SET name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]' WHERE id='$_POST[id]'";
        if (mysqli_query($link,$sql)){
            header('location:viewStudent.php');
        } else{
            die ('Query Problem'.mysqli_error($link));
        }
    }
    public function deleteStudentInfo($id){
        $link = mysqli_connect('localhost','root','','demos');
        $sql = "DELETE FROM demos WHERE id ='$id'";
        if (mysqli_query($link,$sql)){
            header('location:viewStudent.php');
        } else{
            die ('Connection Problem'.mysqli_error($link));
        }
    }
    public function searchStudentInfo(){
        $link = mysqli_connect('localhost','root','','demos');
        $sql = "SELECT * FROM demos WHERE name = '%$_POST[searchData]%'|| email LIKE '%$_POST[searchData]%'|| mobile LIKE '%$_POST[searchData]%'";
        if (mysqli_query($link,$sql)){

            $result = mysqli_query($link,$sql);
            return $result;
        } else{
            die ('Query Problem'.mysqli_error($link));
        }
    }
}