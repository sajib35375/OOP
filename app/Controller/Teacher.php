<?php
namespace App\Controller;
use App\Support\Database;


class Teacher extends Database{

 public function teacherData($name,$email,$cell,$username){
     $data = $this -> create("INSERT INTO teachers(name,email,cell,username)VALUES('$name','$email','$cell','$username')");
     if($data){
         return "data insert successful";
     }else{
         return false;
     }
 }

 public function allData(){
    return $this ->all("SELECT * FROM teachers");
 }

 public function dataDelete($id){
     $d_data=$this->delete('teachers',$id);
     if ($d_data){
         return "data delete successful";
     }
 }


public function profileData($id){
   $data = $this->show('teachers',$id);
   return $data;
}
public function editData($id){
    $data = $this -> show('teachers',$id);
    return $data;
}

public function editTeacher($name,$email,$cell,$username,$id){
     $update=$this -> update("UPDATE teachers SET name='$name',email='$email',cell='$cell',username='$username'WHERE id='$id'");

     header('location:teachertable.php');
}

}

?>