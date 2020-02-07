<?php
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Admins\AdminManagement;
    $AdminManagement = new AdminManagement; 
    $admin_id = $_GET['id'];
    if(isset($admin_id))  
    {  
        $data = $AdminManagement-> dataDelete($admin_id);
        header("Location: view-all-admin.php");
    }
?>