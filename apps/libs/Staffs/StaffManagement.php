<?php

    namespace apps\libs\Staffs;
    use apps\libs\Database\Database;

    class StaffManagement extends Database
    {
        //New Admin Insert
        public function AddStaff($first_name,$last_name,$email,$password,$contact,$unique_image_name)
        {
            $sql = "INSERT INTO staffinfo (first_name,last_name,email,password,contact,photo) VALUES ('$first_name','$last_name','$email','$password','$contact','$unique_image_name')";
            $data = parent::connection() -> query($sql);

            if($data)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        //Email existence check
        public function emailCheck($email)
        {
            $sql ="SELECT * FROM staffinfo WHERE email = '$email' ";
            $data = parent::connection()->query($sql);

            $email_count = $data -> num_rows;

            if($email_count > 0){
                return false;
            }
            else{
                return true;
            }
        }

        

        //Student Information view
        public function viewdata()
        {
            $sql ="SELECT * FROM staffinfo ";
            $data = parent::connection()->query($sql);

            if($data == true)
            {
                return $data;
            }
            else
            {
                return false;
            }
        }

        //Single student Data view
        public function viewSingleData($id)
        {
            $sql ="SELECT * FROM staffinfo where Id='$id'";
            $data = parent::connection()->query($sql);

            if($data == true)
            {
                return $data;
            }
            else
            {
                return false;
            }
        }


        //Update Student Data
        public function updateData($id,$fname,$lname,$contact,$email)
        {
            $sql = "UPDATE staffinfo SET first_name='$fname', last_name='$lname', email='$email', contact='$contact' WHERE Id='$id'";
            $data = parent::connection()->query($sql);
            if($data == true)
            {
                return $data;
            }
            else
            {
                return false;
            }
        }

        public function dataDelete($staff_id){
            $sql = "Delete From staffinfo WHERE Id='$staff_id'";
            $data = parent::connection()->query($sql);
            if($data == true)
            {
                return $data;
            }
            else
            {
                return false;
            }
        }
    }
?>