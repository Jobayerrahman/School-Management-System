<?php
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Teachers\TeacherManagement;
    $TeacherManagement = new TeacherManagement; 
    $teacher_id = $_GET['id'];
    if(isset($teacher_id))  
    {  
        $data = $TeacherManagement-> dataDelete($teacher_id);
        header("Location: view-all-teacher.php");
    }
?>