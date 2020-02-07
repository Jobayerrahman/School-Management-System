<?php require_once "../templates/admin-header-design-contain.php"; ?>
<?php 
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Accounts\AccountManagement;
    $AccountManagement = new AccountManagement;
?>
<section class="vbox">
        <section class="scrollable padder">
            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">Add new accounter</h3> <small>Welcome back, John Smith</small> </div>
            </section>
            <div class="row bg-light dk m-b">
                <div class="col-md-12 dker">
                    <section>
                        <div class= "main-section" style=" width:800px; margin:10px auto 0px;">
                            <div class="card">
                                <div class="card-body">
                                    <a class="btn btn-primary" href="view-all-accounts.php">All accounter</a>
                                    <br>
                                    <br>
                                    <?php
                                        if(isset($_POST['submit']))
                                        {
                                            $first_name = $_POST['fname'];
                                            $last_name = $_POST['lname'];
                                            $email = $_POST['email'];
                                            $password = $_POST['tamporary_password'];
                                            $contact = $_POST['contact'];
                                            
                                            //File management
                                            $image_name = $_FILES['photo']['name'];
                                            $image_tmp_name = $_FILES['photo']['tmp_name'];
                                            $image_extension_array = explode('.', $image_name);
                                            $image_extension = end($image_extension_array);
                                            $unique_image_name = md5(time().rand().$image_name). '.' . strtolower($image_extension);

                                            $email_check = $AccountManagement -> emailCheck($email);

                                            if( empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($contact) || empty($unique_image_name) )
                                            {
                                                echo "Field must not be empty";
                                            }
                                            else if(filter_var($email, FILTER_VALIDATE_EMAIL)== false)
                                            {
                                                echo "Invalide email";
                                            }
                                            else if($email_check == false)
                                            {
                                                echo " Email Already Exist!!";
                                            }
                                            else
                                            {
                                                $data = $AccountManagement -> AddAccount($first_name,$last_name,$email,$password,$contact,$unique_image_name);

                                                move_uploaded_file( $image_tmp_name, '../../assets/images/'. $unique_image_name);
                                                if($data == true)
                                                {
                                                    $mess = "<p class='alert alert-success'>A New Accounter Added! !<button class='close' data-dismiss='alert'>&times;</button></p>";
                                                }
                                            }
                                        }
                                    ?>
                                    <div class="mess">
                                        <?php
                                            if( isset($mess))
                                            {
                                                echo $mess;
                                            }
                                        ?>
                                    </div>

                                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input name="fname" type="text" class="form-control" placeholder="Enter first name"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input name="lname" type="text" class="form-control" placeholder="Enter last name"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" placeholder="Enter email"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Tamporary Password</label>
                                            <input name="tamporary_password" type="password" class="form-control" placeholder="Enter a tamporary password"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input name="contact" type="text" class="form-control" placeholder="Enter contact number"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input name="photo" type="file"> 
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</section>
<?php require_once "../templates/admin-footer-design-contain.php"; ?>