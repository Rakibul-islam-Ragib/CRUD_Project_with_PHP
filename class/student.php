<?php

 include "DB.php";

class student{

    private $table = "tbl_student";
    //Read data start----
    private $name;
    private $dep;
    private $age;

    public function setName($name){
        $this->name = $name;
    }
    public function setDep($dep){
        $this->dep = $dep;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function insert(){
        $sql = "INSERT into $this->table (name, dep, age) values (:name, :dep, :age)";
        //method e axess korlam--
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dep', $this->dep);
        $stmt->bindParam(':age', $this->age);
        return $stmt->execute();
    }
    public function update($id){
        $sql = "UPDATE $this->table SET name=:name, dep=:dep, age=:age WHERE id=:id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dep', $this->dep);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function readById($id){
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();

    }
   
//read data end---
    public function readAll(){
        $sql ="SELECT * from $this->table"; 
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}


?>