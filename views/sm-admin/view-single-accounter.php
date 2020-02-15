<?php 
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Accounts\AccountManagement;
    $AccountManagement = new AccountManagement;
?>
<section>
    <div class= "main-section" style=" width:500px; margin:50px auto 0px;">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                <?php
                    if(isset($_POST["accounts_id"])){
                        $id = $_POST["accounts_id"];
                        $data = $AccountManagement-> viewSingleData($id);
                        while ($single_data = $data -> fetch_assoc()) :
                ?>
                    <img class="img-thumbnail rounded" style="width:100px; height=100px; border-radius: 50%;" src="../../assets/images/<?php echo $single_data['photo']?>" alt="">
                    <br>
                    <br>
                    <tr>  
                        <td width="30%"><label>First Name</label></td>  
                        <td width="70%"><?php echo $single_data['first_name']; ?></td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Last Name:</label></td>  
                        <td width="70%"><?php echo $single_data['last_name']; ?></</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Email:</label></td>  
                        <td width="70%"><?php echo $single_data['email']; ?></td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Contact</label></td>  
                        <td width="70%"><?php echo $single_data['contact']; ?></td>  
                    </tr>  
                    <?php  
                    endwhile;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
