<?php
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Staffs\StaffManagement;
    $StaffManagement = new StaffManagement; 
    $staff_id = $_GET['id'];
    if(isset($staff_id))  
    {  
        $data = $StaffManagement-> dataDelete($staff_id);
        header("Location: view-all-staff.php");
    }
?>