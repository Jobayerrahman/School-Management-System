<?php  
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Accounts\AccountManagement;
    $AccountManagement = new AccountManagement;
    if(isset($_POST["accounts_id"]))  
    {  
        $id = $_POST["accounts_id"];
        $data = $AccountManagement-> viewSingleData($id);
        $row = mysqli_fetch_array($data);  
        echo json_encode($row);  
    }  
 ?>