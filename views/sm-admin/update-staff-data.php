<?php  
include_once dirname(__FILE__). "\..\../autoload.php";
use apps\libs\Staffs\StaffManagement;
$StaffManagement = new StaffManagement;
?>
<?php  
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $data = $StaffManagement-> updateData($id,$fname,$lname,$contact,$email);
    if($data = true)
    {
        header("location: view-all-staff.php");
    }
?>