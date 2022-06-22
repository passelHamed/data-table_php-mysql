<?php

class database1{


private $id;
private $firstName;
private $lastName;
private $address;
private $dbConn;


    public function __construct($id = 0 , $firstName = "" , $lastName = "" , $address = ""){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;

        try{
            $this->dbConn = new PDO("mysql:host=localhost;dbname=task2" , "root" , "" );
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setFistName($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function getAddress(){
        return $this->address;
    }

    public function insert(){
        try {
            $sql = $this->dbConn->prepare("INSERT INTO users(firstName , lastName , address) VALUES (?,?,?)");
            $sql->execute([$this->firstName , $this->lastName , $this->address]);
            echo "<script>alert('data saved successfully');document.location='index.php'</script>";
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchAll(){
        try{
            $sql = $this->dbConn->prepare("SELECT * FROM users");
            $sql->execute();
            return $sql->fetchAll();
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchOne(){
        try{
            $sql = $this->dbConn->prepare("SELECT FROM user WHERE id=?");
            $sql->execute([$this->id]);
            return $sql->fetchAll();
        }catch (Exception $e){
            return $e->getMessage();
        }
    }


    public function update(){
        try{
            $sql = $this->dbConn->prepare("UPDATE users SET firstName = ? , lastName = ? , address = ? WHERE id = ?");
            $sql->execute([$this->firstName , $this->lastName , $this->address , $this->id]);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function delete(){
        try{
            $sql = $this->dbConn->prepare("DELETE FROM users WHERE id = ?");
            $sql->execute([$this->id]);
            return $sql->fetchAll();
            echo "<script>alert('data deleted successfully');document.location='index.php'</script>";
        }catch (Exception $e){
            return $e->getMessage();
        }
    }


}