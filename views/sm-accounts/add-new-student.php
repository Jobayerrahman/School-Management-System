<?php require_once "../templates/teacher-header-design-contain.php"; ?> 
<section class="vbox">
        <section class="scrollable padder">
            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">Add new student</h3> <small>Welcome back, John Smith</small> </div>
            </section>
            <div class="row bg-light dk m-b">
                <div class="col-md-12 dker">
                    <section>
                        <div class= "main-section" style=" width:800px; margin:10px auto 0px;">
                            <div class="card">
                                <div class="card-body">
                                    <a class="btn btn-primary" href="view-all-student.php">All Students</a>
                                    <br>
                                    <br>
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
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
<?php require_once "../templates/teacher-footer-design-contain.php"; ?>