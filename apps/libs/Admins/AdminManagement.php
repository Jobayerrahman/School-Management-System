<?php

    namespace apps\libs\Admins;
    use apps\libs\Database\Database;

    class AdminManagement extends Database
    {
        //New Admin Insert
        public function AddAdmin($first_name,$last_name,$email,$password,$contact,$unique_image_name)
        {
            $sql = "INSERT INTO admininfo (first_name,last_name,email,password,contact,photo) VALUES ('$first_name','$last_name','$email','$password','$contact','$unique_image_name')";
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
            $sql ="SELECT * FROM admininfo WHERE email = '$email' ";
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
            $sql ="SELECT * FROM admininfo ";
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
            $sql ="SELECT * FROM admininfo where Id='$id'";
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
            $sql = "UPDATE admininfo SET first_name='$fname', last_name='$lname', email='$email', contact='$contact' WHERE Id='$id'";
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

        public function dataDelete($student_id){
            $sql = "Delete From admininfo WHERE Id='$student_id'";
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