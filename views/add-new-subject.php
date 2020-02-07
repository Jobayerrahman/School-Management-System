<?php require_once dirname(__FILE__) . "\../template/header-design-contain.php"; ?>
<section>
    <div class= "main-section" style=" width:800px; margin:10px auto 0px;">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary" href="view-all-student.php">All Students</a>
                <br>
                <br>
                <form action="{{ url('add-new-student-data')}}" method="POST" enctype="multipart/form-data">
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
<?php require_once dirname(__FILE__) . "\../template/footer-design-contain.php"; ?>