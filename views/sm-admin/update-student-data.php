<?php  
include_once dirname(__FILE__). "\..\../autoload.php";
use apps\libs\Students\StudentManagement;
$StudentManagement = new StudentManagement;
?>
<?php  
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $data = $StudentManagement-> updateData($id,$fname,$lname,$contact,$email);
    if($data = true)
    {
        header("location: view-all-student.php");
    }
?>