<?php

    namespace apps\libs\Students;
    use apps\libs\Database\Database;

    class StudentManagement extends Database
    {
        //New Admin Insert
        public function AddStudent($first_name,$last_name,$email,$password,$contact,$unique_image_name)
        {
            $sql = "INSERT INTO studentinfo (first_name,last_name,email,password,contact,photo) VALUES ('$first_name','$last_name','$email','$password','$contact','$unique_image_name')";
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
            $sql ="SELECT * FROM studentinfo WHERE email = '$email' ";
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
            $sql ="SELECT * FROM studentinfo ";
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
            $sql ="SELECT * FROM studentinfo where Id='$id'";
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
            $sql = "UPDATE studentinfo SET first_name='$fname', last_name='$lname', email='$email', contact='$contact' WHERE Id='$id'";
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
            $sql = "Delete From studentinfo WHERE Id='$student_id'";
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