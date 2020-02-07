<?php  
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Admins\AdminManagement;
    $AdminManagement = new AdminManagement;
    if(isset($_POST["admin_id"]))  
    {  
        $id = $_POST["admin_id"];
        $data = $AdminManagement-> viewSingleData($id);
        $row = mysqli_fetch_array($data);  
        echo json_encode($row);  
    }  
 ?>