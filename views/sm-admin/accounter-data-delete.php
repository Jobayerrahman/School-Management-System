<?php
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Accounts\AccountManagement;
    $AccountManagement = new AccountManagement; 
    $accounts_id = $_GET['id'];
    if(isset($accounts_id))  
    {  
        $data = $AccountManagement-> dataDelete($accounts_id);
        header("Location: view-all-accounts.php");
    }
?>