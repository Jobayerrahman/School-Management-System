<?php  
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Staffs\StaffManagement;
    $StaffManagement = new StaffManagement;
    if(isset($_POST["staff_id"]))  
    {  
        $id = $_POST["staff_id"];
        $data = $StaffManagement-> viewSingleData($id);
        $row = mysqli_fetch_array($data);  
        echo json_encode($row);  
    }  
 ?>