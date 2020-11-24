<?php

namespace App\Controller;
use App\Support\Database;

class Student extends Database{
    public function studentData($name,$email,$cell,$username){
        $data = $this->create("INSERT INTO students (name,email,cell,username)VALUES('$name','$email','$cell','$username')");

        if ($data){
            return "data insert successful";
        }
    }

    public function allData(){
        $data = $this -> all("SELECT * FROM students");
        return $data;
    }
    public function dataDelete($id){
       $data = $this ->delete('students',$id);
       if ($data){
           return "data delete successful";
       }
    }

    public function profileData($id){
       $data = $this -> show('students',$id);
       return $data;
    }

    public function editData($id){
        $data=$this -> show('students',$id);
        return $data;
    }

    public function editStudent ($name,$email,$cell,$username,$id){
           $update= $this -> update("UPDATE students SET name='$name',email='$email',cell='$cell',username='$username'WHERE id='$id'");

            header('location:students.php');
    }

}
