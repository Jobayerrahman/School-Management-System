<?php

    namespace apps\libs\Teachers;
    use apps\libs\Database\Database;

    class TeacherManagement extends Database
    {
        //New Admin Insert
        public function AddTeacher($first_name,$last_name,$email,$password,$contact,$unique_image_name)
        {
            $sql = "INSERT INTO teacherinfo (first_name,last_name,email,password,contact,photo) VALUES ('$first_name','$last_name','$email','$password','$contact','$unique_image_name')";
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
            $sql ="SELECT * FROM teacherinfo WHERE email = '$email' ";
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
            $sql ="SELECT * FROM teacherinfo ";
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
            $sql ="SELECT * FROM teacherinfo where Id='$id'";
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
            $sql = "UPDATE teacherinfo SET first_name='$fname', last_name='$lname', email='$email', contact='$contact' WHERE Id='$id'";
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

        public function dataDelete($teacher_id){
            $sql = "Delete From teacherinfo WHERE Id='$teacher_id'";
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