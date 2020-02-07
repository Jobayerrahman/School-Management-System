<?php  
include_once dirname(__FILE__). "\..\../autoload.php";
use apps\libs\Admins\AdminManagement;
$AdminManagement = new AdminManagement;
?>
<?php  
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $data = $AdminManagement-> updateData($id,$fname,$lname,$contact,$email);
    if($data = true)
    {
        header("location: view-all-admin.php");
    }
?>