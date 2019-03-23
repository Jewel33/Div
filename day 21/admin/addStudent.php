<?php
session_start();
require_once "../vendor/autoload.php";
use App\Classes\Login;

$login = new Login();
if(isset($_GET['logout'])){
    $login->adminLogout();
}
/*use App\classes\Student;

$message='';
if(isset($_POST['btn'])){
    $student = new Student();
    $message = $student->saveStudentInfo();
}
*/
?>
<table>
    <tr>
        <td><a href="addStudent.php">Add Student</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
        <td><a href="?logout=true">Logout</a></td>
        <td><a href=""><?php echo $_SESSION['name']; ?></a></td>
    </tr>
</table>
<hr>
<form action="" method="POST">
    <h1><?php //echo $message; ?></h1>
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile:</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
