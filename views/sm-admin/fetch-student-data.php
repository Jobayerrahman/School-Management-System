<?php  
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Students\StudentManagement;
    $StudentManagement = new StudentManagement;
    if(isset($_POST["student_id"]))  
    {  
        $id = $_POST["student_id"];
        $data = $StudentManagement-> viewSingleData($id);
        $row = mysqli_fetch_array($data);  
        echo json_encode($row);  
    }  
 ?>