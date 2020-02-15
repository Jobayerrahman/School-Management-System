<?php  
include_once dirname(__FILE__). "\..\../autoload.php";
use apps\libs\Teachers\TeacherManagement;
$TeacherManagement = new TeacherManagement;
?>
<?php  
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $data = $TeacherManagement-> updateData($id,$fname,$lname,$contact,$email);
    if($data = true)
    {
        header("location: view-all-teacher.php");
    }
?>