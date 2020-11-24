<?php
namespace App\Support;
use mysqli;
abstract class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $db = 'basic';
    private $connection;

    private function connection(){
       return $this ->connection = new mysqli($this->host,$this->username,$this->pass,$this->db);
    }

    protected function create($sql){
        $status = $this->connection()->query($sql);

        if ($status){
            return true;
        }else{
            return false;
        }
    }

    protected function all($sql){
      return $this -> connection()->query($sql);
    }

    protected function delete($table,$id){
      $status = $this -> connection() ->query("DELETE FROM $table WHERE id='$id'");
      if ($status){
          return true;
      }else{
          return false;
      }
    }

    protected function show($table,$id){
      return $this -> connection() -> query("SELECT * FROM $table WHERE id='$id'");
    }

    public function update($sql){
       $this -> connection() -> query($sql);
    }

}