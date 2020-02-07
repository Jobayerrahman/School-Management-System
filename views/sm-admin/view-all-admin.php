<?php require_once "../templates/admin-header-design-contain.php"; ?>  
<?php 
    include_once dirname(__FILE__). "\..\../autoload.php";
    use apps\libs\Admins\AdminManagement;
    $AdminManagement = new AdminManagement;
?>
<section>
    <section class="vbox">
        <section class="scrollable padder">
            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">All Admin Data</h3> <small>Welcome back, John Smith</small> </div>
            </section>
            <div class="row bg-light dk m-b">
                <div class="col-md-12 dker">
                    <section>
                        <div class= "main-section" style=" width:800px; margin:100px auto 0px;">
                            <div class="card">
                                <div class="card-body">
                                    <a class="btn btn-sm btn-primary" href="add-new-admin.php">Add New Admin</a>
                                    <table class="table table-dark">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name </th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                            $data =$AdminManagement-> viewdata();
                                            while ($single_data = $data -> fetch_assoc()) :
                                        ?>
                                        <tbody>
                                            <tr>
                                            <td scope="row"><?php echo $single_data['Id']; ?></td>
                                            <td><?php echo $single_data['first_name']; ?></td>
                                            <td><?php echo $single_data['last_name']; ?></td>
                                            <td><?php echo $single_data['email']; ?></td>
                                            <td><?php echo $single_data['contact']; ?></td>
                                            <td><img class="img-thumbnail rounded" style="width:60px; height=60px; border-radius: 50%;" src="../../assets/images/<?php echo $single_data['photo']?>" alt=""></td>
                                            <td>
                                                <input type="button" name="view" class="btn btn-sm btn-info view_data" value="View" id="<?php echo $single_data['Id']; ?>" />
                                                <input type="button" name="edit" class="btn btn-sm btn-warning edit_data" value="Edit" id="<?php echo $single_data['Id']; ?>" />
                                                <a class="btn btn-sm btn-danger" href="admin-data-delete.php?id=<?php echo $single_data['Id'];?>">Delete</a>
                                            </td>
                                            </tr>
                                        </tbody>
                                        <?php endwhile; ?>
                                    </table>
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

<section>
    <div class="modal fade" id="dataModal" >
        <div class="modal-dialog" >
            <div class="modal-content" style="width:600px; height:600px;">
                <div class="model-header">
                    <button type="button" style="margin-right: 20px;" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="model-title" style="margin-left: 40px;">Admin Details</h3>
                </div>
                <div class="modal-body" id="admin_detail">
                </div>
                <div></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="update_data_Modal" class="modal fade">  
        <div class="modal-dialog">  
            <div class="modal-content">  
                    <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal">&times;</button>  
                        <h4 class="modal-title">Update Admin Info</h4>  
                    </div>  
                    <div class="modal-body">  
                        <form method="post" id="update_form">  
                            <label>First Name</label>  
                            <input type="text" name="fname" id="first_name" class="form-control" />  
                            <br />  
                            <label>Last Name</label>  
                            <input type="text" name="lname" id="last_name" class="form-control" />   
                            <br/>  
                            <label>Email</label>  
                            <input type="text" name="email" id="email" class="form-control" />  
                            <br />  
                            <label>Contact</label>  
                            <input type="text" name="contact" id="contact" class="form-control" />  
                            <br />  
                            <input type="hidden" name="admin_id" id="admin_id" />  
                            <input type="submit" name="submit" id="update" value="Update" class="btn btn-success" />  
                        </form>  
                    </div>  
                    <div class="modal-footer">  
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                    </div>  
            </div>  
        </div>  
    </div>
</section>
<script>
$(document).ready(function(){  
      $(document).on('click', '.edit_data', function(){  
           var admin_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch-admin-data.php",  
                method:"POST",  
                data:{admin_id:admin_id},  
                dataType:"json",  
                success:function(data){  
                     $('#first_name').val(data.first_name);  
                     $('#last_name').val(data.last_name);  
                     $('#email').val(data.email);  
                     $('#contact').val(data.contact);  
                     $('#student_id').val(data.Id);  
                     $('#update').val("Update");  
                     $('#update_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#update_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#first_name').val() == "")  
           {  
                alert("First name is required");  
           }  
           else if($('#last_name').val() == '')  
           {  
                alert("Last name is required");  
           }  
           else if($('#email').val() == '')  
           {  
                alert("Email is required");  
           }  
           else if($('#contact').val() == '')  
           {  
                alert("Contact number is required");  
           }  
           else  
           {   
               var admin_id=$('#admin_id').val();
               var first_name=$('#first_name').val();
               var last_name=$('#last_name').val();
               var email=$('#email').val();
               var contact=$('#contact').val();
                $.ajax({  
                     url:"update-admin-data.php",  
                     method:"POST",  
                     data:{id: admin_id, fname: first_name, lname: last_name, email: email, contact: contact},  
                     beforeSend:function(){  
                          $('#update').val("updating");  
                     }, 
                     success:function(data){   
                          $('#update_data_Modal').modal('hide');
                     }  
                });  
           }  
      });

    $(document).on('click', '.view_data', function(){  
        var admin_id = $(this).attr("id");  
        if(admin_id != '')  
        {  
            $.ajax({  
                url:"view-single-admin.php",  
                method:"POST",  
                data:{admin_id:admin_id},  
                success:function(data){   
                    $('#admin_detail').html(data);
                    $('#dataModal').modal('show');
                }  
            });  
        }            
    });
});
</script>