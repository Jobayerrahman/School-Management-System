<?php  
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Teachers\TeacherManagement;
    $TeacherManagement = new TeacherManagement;
    if(isset($_POST["teacher_id"]))  
    {  
        $id = $_POST["teacher_id"];
        $data = $TeacherManagement-> viewSingleData($id);
        $row = mysqli_fetch_array($data);  
        echo json_encode($row);  
    }  
 ?>