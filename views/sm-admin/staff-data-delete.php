<?php
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Students\StudentManagement;
    $StudentManagement = new StudentManagement; 
    $student_id = $_GET['id'];
    if(isset($student_id))  
    {  
        $data = $StudentManagement-> dataDelete($student_id);
        header("Location: view-all-student.php");
    }
?>